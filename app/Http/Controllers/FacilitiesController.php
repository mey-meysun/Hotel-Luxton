<?php

namespace App\Http\Controllers;


use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class FacilitiesController extends Controller
{
    /**
     * index
     *
     * @return void
     */

    public function index(): View
    {
        $facilities = Facility::latest()->get(); // Ambil semua fasilitas
        return view('fasilitas', compact('facilities'));
    }

    public function create(string $id = null): View
    {
        $facility = $id ? Facility::find($id) : null;
        $facilities = Facility::latest()->paginate(10); // Ambil semua fasilitas untuk ditampilkan di tabel

        return view('create-fasilitas', compact('facility', 'facilities'));
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_fasilitas' => 'required|min:3',
            'deskripsi'  => 'required|min:10',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:10048',
        ]);

        // Upload gambar
        $gambar = $request->file('gambar');
        $path = $gambar->store('facilities', 'public');

        Facility::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'deskripsi' => $request->deskripsi,
            'gambar'          => $path
        ]);

        return redirect()->route('fasilitas.create')->with(['success' => 'Fasilitas berhasil ditambahkan!']);
    }

    public function edit(string $id): View
    {
        return $this->create(new Request(), $id);
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'nama_fasilitas' => 'required|min:3',
            'deskripsi'  => 'required|min:10',
            'gambar'     => 'nullable|image|mimes:jpeg,jpg,png|max:10048',
        ]);

        $facility = Facility::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            Storage::delete('public/' . $facility->gambar);
        
            // Simpan gambar baru
            $gambar = $request->file('gambar');
            $path = $gambar->store('facilities', 'public');
        
            // Update data termasuk gambar
            $facility->update([
                'nama_fasilitas' => $request->nama_fasilitas,
                'deskripsi' => $request->deskripsi,
                'gambar' => $path, // Tambahkan ini agar gambar ikut diperbarui
            ]);
        } else {
            // Update tanpa gambar
            $facility->update([
                'nama_fasilitas' => $request->nama_fasilitas,
                'deskripsi' => $request->deskripsi,
            ]);
        }
        

        return redirect()->route('fasilitas.create')->with(['success' => 'Data fasilitas berhasil diperbarui!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $facility = Facility::findOrFail($id);
        Storage::delete('public/' . $facility->gambar);
        $facility->delete();
        return redirect()->route('fasilitas.create')->with(['success' => 'Data fasilitas berhasil dihapus!']);
    }
}
