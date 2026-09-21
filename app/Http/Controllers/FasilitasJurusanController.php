<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasJurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::with ('fasilitas')->get();
        return view('fasilitas.index', compact ('jurusan'));
    }
}
