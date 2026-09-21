<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $daftarBerita = Berita::orderBy('tanggal', 'desc')->get();

        return view('berita.index', compact('daftarBerita'));
    }
}