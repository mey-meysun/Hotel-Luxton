<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Room;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index(): View
    {
        $rooms = Room::select('id', 'tipe_kamar', 'gambar', 'harga_kamar', 'deskripsi_kamar')
            ->groupBy('tipe_kamar')
            ->get();

        return view('tipekamar', compact('rooms'));
    }

    public function create($id = null): View
    {
        $room = $id ? Room::find($id) : null;
        $rooms = Room::latest()->get();
        return view('create-tipekamar', compact('room', 'rooms'));

        $rooms = Room::where('status_kamar', 'tersedia')->get();
        $selectedRoom = $id ? Room::find($id) : null;

        return view('reservations.create', compact('rooms', 'selectedRoom'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'gambar'           => 'required|image|mimes:jpeg,jpg,png|max:1049',
            'no_kamar'         => 'required|unique:rooms|min:3',
            'tipe_kamar'       => 'required|min:5',
            'harga_kamar'      => 'required|numeric',
            'status_kamar'     => 'required|in:tersedia,terisi,diperbaiki',
            'deskripsi_kamar'  => 'required|min:10',
        ]);

        // Upload gambar
        $gambar = $request->file('gambar');
        $path = $gambar->store('rooms', 'public');

        Room::create([
            'gambar'          => $path,
            'no_kamar'        => $request->no_kamar,
            'tipe_kamar'      => $request->tipe_kamar,
            'harga_kamar'     => $request->harga_kamar,
            'status_kamar'    => $request->status_kamar,
            'deskripsi_kamar' => $request->deskripsi_kamar,
        ]);

        return redirect()->route('rooms.create')->with(['success' => 'Kamar berhasil ditambahkan!']);
    }

    public function edit(string $id): View
    {
        return $this->create(new Request(), $id);
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'gambar'           => 'nullable|image|mimes:jpeg,jpg,png|max:1049',
            'no_kamar'         => 'required|min:3',
            'tipe_kamar'       => 'required|min:5',
            'harga_kamar'      => 'required|numeric',
            'status_kamar'     => 'required|in:tersedia,terisi,diperbaiki',
            'deskripsi_kamar'  => 'required|min:10',
        ]);

        $room = Room::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($room->gambar && Storage::exists('public/' . $room->gambar)) {
                Storage::delete('public/' . $room->gambar);
            }
            // Simpan gambar baru
            $gambar = $request->file('gambar');
            $room->gambar = $gambar->store('rooms', 'public');
        }

        $room->update([
            'no_kamar'        => $request->no_kamar,
            'tipe_kamar'      => $request->tipe_kamar,
            'harga_kamar'     => $request->harga_kamar,
            'status_kamar'    => $request->status_kamar,
            'deskripsi_kamar' => $request->deskripsi_kamar,
        ]);

        return redirect()->route('rooms.create')->with(['success' => 'Data kamar berhasil diperbarui!']);
    }

    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('show-room', compact('room'));
    }

    public function search(Request $request)
    {
        $query = Room::query(); 

        if ($request->filled('tipe_kamar')) {
            $query->where('tipe_kamar', $request->tipe_kamar);
        }
        if ($request->filled('harga_min') && $request->harga_min > 0) {
            $query->where('harga_kamar', '>=', $request->harga_min);
        }
        if ($request->filled('harga_max') && $request->harga_max > 0) {
            $query->where('harga_kamar', '<=', $request->harga_max);
        }        
        if ($request->filled('check_in') && $request->filled('check_out')) {
            $query->whereDoesntHave('reservations', function ($q) use ($request) {
                $q->where('check_in', '<=', $request->check_out)
                  ->where('check_out', '>=', $request->check_in);
            });
        }
        
        // dd($query->toSql(), $query->getBindings()); // Debug query sebelum get()
        
        $rooms = $query->get();
        
        // Arahkan ke halaman hasil pencarian
        return view('search', compact('rooms'));
    }
    

    public function destroy(string $id): RedirectResponse
    {
        $room = Room::findOrFail($id);

        // Hapus gambar jika ada
        if ($room->gambar && Storage::exists('public/' . $room->gambar)) {
            Storage::delete('public/' . $room->gambar);
        }

        $room->delete();
        return redirect()->route('rooms.create')->with(['success' => 'Data kamar berhasil dihapus!']);
    }
}
