<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FasilitasSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FasilitasSekolahController extends Controller
{
    public function index()
    {
        $daftarFasilitas = FasilitasSekolah::orderBy('nama')->get();
        return view('admin.fasilitas.index', compact('daftarFasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'poto' => 'nullable|image|max:5125',
        ]);

        $data = $request->only(['nama']);

        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/pasilitas'), $namaFile);
            $data['poto'] = $namaFile;
        }

        FasilitasSekolah::create($data);

        return redirect()->route('admin.fasilitas-sekolah.index')->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $fasilitas = FasilitasSekolah::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $fasilitas = FasilitasSekolah::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'poto' => 'nullable|image|max:5125',
        ]);

        $data = $request->only(['nama']);

        if ($request->hasFile('poto')) {
            if ($fasilitas->poto && File::exists(public_path('image/pasilitas/' . $fasilitas->poto))) {
                File::delete(public_path('image/pasilitas/' . $fasilitas->poto));
            }
            $file = $request->file('poto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/pasilitas'), $namaFile);
            $data['poto'] = $namaFile;
        }

        $fasilitas->update($data);

        return redirect()->route('admin.fasilitas-sekolah.index')->with('success', 'Fasilitas berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $fasilitas = FasilitasSekolah::findOrFail($id);

        if ($fasilitas->poto && File::exists(public_path('image/pasilitas/' . $fasilitas->poto))) {
            File::delete(public_path('image/pasilitas/' . $fasilitas->poto));
        }

        $fasilitas->delete();

        return redirect()->route('admin.fasilitas-sekolah.index')->with('success', 'Fasilitas berhasil dihapus.');
    }
}