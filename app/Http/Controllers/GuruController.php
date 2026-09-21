<?php

namespace App\Http\Controllers;

use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $daftarGuru = Guru::all();

        return view('guru.index', compact('daftarGuru'));
    }
}