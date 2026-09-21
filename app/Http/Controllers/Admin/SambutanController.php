<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sambutan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SambutanController extends Controller
{
    public function edit()
    {
        $sambutan = Sambutan::first();
        return view('admin.sambutan.edit', compact('sambutan'));
    }

    public function update(Request $request)
    {
        $sambutan = Sambutan::first();

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($sambutan->foto && File::exists(public_path('image/beranda/' . $sambutan->foto))) {
                File::delete(public_path('image/beranda/' . $sambutan->foto));
            }
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image/beranda'), $namaFile);
            $data['foto'] = $namaFile;
        }

        $sambutan->update($data);

        return redirect()->route('admin.sambutan.edit')->with('success', 'Sambutan berhasil diperbarui.');
    }
}