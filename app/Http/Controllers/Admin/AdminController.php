<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Eskul;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Dashboard Admin
     */
    public function home()
    {
        $home = Home::firstOrCreate(['id' => 1]);

        $jumlahGuru    = Guru::count();
        $jumlahEskul   = Eskul::count();
        $jumlahGaleri  = Galeri::count();
        $jumlahBerita  = Berita::count();

        // Siswa & jurusan masih input manual lewat tabel homes
        $jumlahSiswa   = $home->jumlah_siswa;
        $jumlahJurusan = $home->jumlah_jurusan;

        $beritaTerbaru = Berita::latest()->take(5)->get();

        return view('admin.home.index', compact(
            'jumlahGuru',
            'jumlahSiswa',
            'jumlahEskul',
            'jumlahJurusan',
            'jumlahGaleri',
            'jumlahBerita',
            'beritaTerbaru'
        ));
    }

    /**
     * Form edit statistik Beranda
     */
    public function homeEdit()
    {
        $home = Home::firstOrCreate(['id' => 1]);

        return view('admin.home.edit', ['home' => $home]);
    }

    /**
     * Simpan perubahan statistik Beranda
     */
    public function homeUpdate(Request $request)
    {
        $home = Home::firstOrCreate(['id' => 1]);

        $request->validate([
            'jumlah_guru'    => 'required|integer|min:0',
            'jumlah_siswa'   => 'required|integer|min:0',
            'jumlah_ekskul'  => 'required|integer|min:0',
            'jumlah_jurusan' => 'required|integer|min:0',
            'jumlah_kelas'   => 'required|integer|min:0',
        ]);

        $home->update($request->only([
            'jumlah_guru',
            'jumlah_siswa',
            'jumlah_ekskul',
            'jumlah_jurusan',
            'jumlah_kelas',
        ]));

        return redirect()->route('admin.home')
            ->with('success', 'Statistik berhasil diperbarui.');
    }
}