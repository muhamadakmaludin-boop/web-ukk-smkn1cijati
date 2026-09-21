<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Tampilkan daftar semua berita di halaman admin.
     */
    public function index()
    {
        $berita = Berita::latest('tanggal')->get();
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Tampilkan form tambah berita.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Simpan berita baru ke database.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul'      => 'required|string|max:255',
            'tanggal'    => 'required|date',
            'ringkasan'  => 'required|string',
            'tag'        => 'nullable|string|max:50',
            'gambar'     => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $namaFile = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('image/berita'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        Berita::create($data);

        return redirect('/admin/berita')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Tampilkan form edit berita.
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Perbarui data berita.
     */
    public function update(Request $request, Berita $berita)
    {
        $data = $request->validate([
            'judul'      => 'required|string|max:255',
            'tanggal'    => 'required|date',
            'ringkasan'  => 'required|string',
            'tag'        => 'nullable|string|max:50',
            'gambar'     => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && file_exists(public_path('image/berita/' . $berita->gambar))) {
                unlink(public_path('image/berita/' . $berita->gambar));
            }

            $namaFile = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('image/berita'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        $berita->update($data);

        return redirect('/admin/berita')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Hapus berita.
     */
    public function destroy(Berita $berita)
    {
        if ($berita->gambar && file_exists(public_path('image/berita/' . $berita->gambar))) {
            unlink(public_path('image/berita/' . $berita->gambar));
        }

        $berita->delete();
        return back()->with('success', 'Berita berhasil dihapus.');
    }
}