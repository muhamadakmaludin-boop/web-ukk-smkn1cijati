<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FasilitasJurusan;
use Illuminate\Http\Request;

class FasilitasJurusanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'jurusan_id' => 'required|exists:jurusan,id',
            'nama'       => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $namaFoto = null;
        if ($request->hasFile('foto')) {
            $namaFoto = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('image/pasilitas'), $namaFoto);
        }

        FasilitasJurusan::create([
            'jurusan_id' => $request->jurusan_id,
            'nama'       => $request->nama,
            'foto'       => $namaFoto,
        ]);

        return back()->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function destroy(FasilitasJurusan $fasilitas)
    {
        if ($fasilitas->foto && file_exists(public_path('image/pasilitas/' . $fasilitas->foto))) {
            unlink(public_path('image/pasilitas/' . $fasilitas->foto));
        }
        $fasilitas->delete();

        return back()->with('success', 'Fasilitas berhasil dihapus.');
    }
}