<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\View\View;

class JurusanController extends Controller
{
    public function index(): View
    {
        $jurusans = Jurusan::orderBy('urutan')->get();

        return view('jurusan.index', compact('jurusans'));
    }

    public function show(Jurusan $jurusan)
    {
        $jurusan->load('fasilitasjurusan');
        return view('jurusan.detail', compact('jurusan'));
    }
}