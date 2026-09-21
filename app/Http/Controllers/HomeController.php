<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Sambutan;
use App\Models\FasilitasSekolah;
use App\Models\Galeri;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $sambutan = Sambutan::first();
        $daftarFasilitas = FasilitasSekolah::orderBy('nama')->get();
        $home = Home::first();
        $daftarGaleri = Galeri::where('tampil', true)->orderBy('urutan')->get();

        return view('home', compact('sambutan', 'daftarFasilitas', 'home', 'daftarGaleri'));
    }
}