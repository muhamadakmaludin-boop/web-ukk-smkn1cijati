<?php

namespace App\Http\Controllers;

use App\Models\Eskul;

class EskulController extends Controller
{
    
    public function index()
    {
        $daftarEskul = Eskul::orderBy('nama')->get();
        return view('eskul.index', compact('daftarEskul'));
    }
}
