<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{

    public function index(): View
{
    $rooms = Room::latest()->get(); // Ambil semua kamar
    dd($rooms); // Debugging: Tampilkan isi $rooms
    return view('rooms-index', compact('rooms'));
}
    
    // public function index(): View
    // {
    //     $rooms = Room::latest()->get(); // Ambil semua kamar
    //     return view('rooms-index', compact('rooms')); // Kirimkan $rooms ke view
    // }
    public function create()
    {
        $rooms = Room::all(); // Ambil semua kamar dari database
        return view('create-tipekamar', compact('rooms'));
    }
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'gambar'           => 'required|image|mimes:jpeg,jpg,png|max:50048',
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

    return redirect()->route('room.create')->with(['success' => 'Kamar berhasil ditambahkan!']);
}

    public function edit(string $id): View
    {
        return $this->create($id);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'gambar'           => 'nullable|image|mimes:jpeg,jpg,png|max:',
            'no_kamar'         => 'required|min:3',
            'tipe_kamar'       => 'required|min:5',
            'harga_kamar'      => 'required|numeric',
            'status_kamar'     => 'required|in:tersedia,terisi,diperbaiki',
            'deskripsi_kamar'  => 'required|min:10',
        ]);

        $room = Room::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($room->gambar) {
                Storage::delete('public/' . $room->gambar);
            }
            
            // Simpan gambar baru
            $gambar = $request->file('gambar');
            $path = $gambar->store('rooms', 'public');
            $room->gambar = $path;
        }

        return redirect()->route('rooms.update', $id)->with(['success' => 'Data kamar berhasil diperbarui!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $room = Room::findOrFail($id);
        Storage::delete('public/' . $room->gambar);
        $room->delete();
        return redirect()->route('rooms.index')->with(['success' => 'Data kamar berhasil dihapus!']);
    }
}