<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfilController extends Controller
{
    public function edit(): View
    {
        $profil = Profil::firstOrNew([]);

        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama_sekolah'       => 'required|string|max:255',
            'npsn'               => 'required|string|max:50',
            'akreditasi'         => 'required|string|max:5',
            'status_sekolah'     => 'required|string|max:100',
            'jenjang_pendidikan' => 'required|string|max:100',
            'alamat'             => 'required|string|max:255',
            'desa_kelurahan'     => 'required|string|max:100',
            'kecamatan'          => 'required|string|max:100',
            'kabupaten'          => 'required|string|max:100',
            'provinsi'           => 'required|string|max:100',
            'kode_pos'           => 'required|string|max:10',
            'email'              => 'required|email|max:255',
            'telepon'            => 'required|string|max:20',
            'website'            => 'nullable|string|max:255',
            'tahun_berdiri'      => 'required|string|max:100',
            'deskripsi'          => 'required|string',
            'visi'               => 'required|string',
            'misi'               => 'required|string', // textarea, 1 poin per baris
        ]);

        Profil::updateOrCreate(['id' => 1], $data);

        return redirect()
            ->route('admin.profil.edit')
            ->with('success', 'Profil berhasil diperbarui.');
    }
}