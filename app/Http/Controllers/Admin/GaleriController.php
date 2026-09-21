<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::orderBy('urutan')->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'     => 'required|string|max:255',
            'kategori'  => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'tampil'    => 'nullable|boolean',
            'urutan'    => 'nullable|integer',
        ]);

        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('image/galeri'), $filename);
        $validated['gambar'] = $filename;
        $validated['tampil'] = $request->has('tampil');

        Galeri::create($validated);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $validated = $request->validate([
            'judul'     => 'required|string|max:255',
            'kategori'  => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'tampil'    => 'nullable|boolean',
            'urutan'    => 'nullable|integer',
        ]);

        $validated['tampil'] = $request->has('tampil');

        if ($request->hasFile('gambar')) {
            if ($galeri->gambar && file_exists(public_path('image/galeri/' . $galeri->gambar))) {
                unlink(public_path('image/galeri/' . $galeri->gambar));
            }
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/galeri'), $filename);
            $validated['gambar'] = $filename;
        }

        $galeri->update($validated);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->gambar && file_exists(public_path('image/galeri/' . $galeri->gambar))) {
            unlink(public_path('image/galeri/' . $galeri->gambar));
        }
        $galeri->delete();

        return back()->with('success', 'Galeri berhasil dihapus.');
    }
}