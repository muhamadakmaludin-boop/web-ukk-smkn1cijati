<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function edit(): View
    {
        $home = Home::firstOrNew();
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request): RedirectResponse
    {
        $home = Home::firstOrFail();

        $home->update($request->validate([
            'hero_judul'     => 'required|string|max:255',
            'hero_text'      => 'required|string',
            'jumlah_guru'    => 'required|integer',
            'jumlah_siswa'   => 'required|integer',
            'jumlah_ekskul'  => 'required|integer',
            'jumlah_jurusan' => 'required|integer',
            'jumlah_kelas'   => 'required|integer',
        ]));

        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }
}