<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Eskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EskulController extends Controller
{
    public function index()
    {
        $daftarEskul = Eskul::orderBy('nama')->get();
        return view('admin.eskul.index', compact('daftarEskul'));
    }

    public function create()
    {
        return view('admin.eskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'pembina'   => 'required|string|max:255',
            'jadwal'    => 'required|string|max:255',
            'foto'      => 'nullable|image|max:2048',
            'logo'      => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['nama', 'deskripsi', 'pembina', 'jadwal']);

        if ($request->hasFile('foto')) {
            $fotoFile = $request->file('foto');
            $namaFoto = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoFile->move(public_path('image/ekskul'), $namaFoto);
            $data['foto'] = 'image/ekskul/' . $namaFoto;
        }

        if ($request->hasFile('logo')) {
            $logoFile = $request->file('logo');
            $namaLogo = time() . '_' . $logoFile->getClientOriginalName();
            $logoFile->move(public_path('image/logo'), $namaLogo);
            $data['logo'] = 'image/logo/' . $namaLogo;
        }

        Eskul::create($data);

        return redirect()->route('admin.eskul.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('admin.eskul.edit', compact('eskul'));
    }

    public function update(Request $request, $id)
    {
        $eskul = Eskul::findOrFail($id);

        $request->validate([
            'nama'      => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'pembina'   => 'required|string|max:255',
            'jadwal'    => 'required|string|max:255',
            'foto'      => 'nullable|image|max:2048',
            'logo'      => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['nama', 'deskripsi', 'pembina', 'jadwal']);

        if ($request->hasFile('foto')) {
            if ($eskul->foto && File::exists(public_path($eskul->foto))) {
                File::delete(public_path($eskul->foto));
            }
            $fotoFile = $request->file('foto');
            $namaFoto = time() . '_' . $fotoFile->getClientOriginalName();
            $fotoFile->move(public_path('image/ekskul'), $namaFoto);
            $data['foto'] = 'image/ekskul/' . $namaFoto;
        }

        if ($request->hasFile('logo')) {
            if ($eskul->logo && File::exists(public_path($eskul->logo))) {
                File::delete(public_path($eskul->logo));
            }
            $logoFile = $request->file('logo');
            $namaLogo = time() . '_' . $logoFile->getClientOriginalName();
            $logoFile->move(public_path('image/logo'), $namaLogo);
            $data['logo'] = 'image/logo/' . $namaLogo;
        }

        $eskul->update($data);

        return redirect()->route('admin.eskul.index')->with('success', 'Ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $eskul = Eskul::findOrFail($id);

        if ($eskul->foto && File::exists(public_path($eskul->foto))) {
            File::delete(public_path($eskul->foto));
        }
        if ($eskul->logo && File::exists(public_path($eskul->logo))) {
            File::delete(public_path($eskul->logo));
        }

        $eskul->delete();

        return redirect()->route('admin.eskul.index')->with('success', 'Ekstrakurikuler berhasil dihapus.');
    }
}