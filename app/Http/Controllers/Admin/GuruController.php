<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::orderBy('urutan')->get();
        return view('admin.guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'mapel'   => 'nullable|string|max:255',
            'foto'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'urutan'  => 'nullable|integer',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/guru-guru'), $filename);
            $validated['foto'] = $filename;
        }

        Guru::create($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'mapel'   => 'nullable|string|max:255',
            'foto'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'urutan'  => 'nullable|integer',
        ]);

        if ($request->hasFile('foto')) {
            if ($guru->foto && file_exists(public_path('image/guru-guru/' . $guru->foto))) {
                unlink(public_path('image/guru-guru/' . $guru->foto));
            }
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/guru-guru'), $filename);
            $validated['foto'] = $filename;
        }

        $guru->update($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    public function destroy(Guru $guru)
    {
        if ($guru->foto && file_exists(public_path('image/guru-guru/' . $guru->foto))) {
            unlink(public_path('image/guru-guru/' . $guru->foto));
        }
        $guru->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus.');
    }
}