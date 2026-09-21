<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PesanKontak;

class KontakController extends Controller
{
    public function index()
    {
    return view('kontak.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan'  => 'required|string',
        ]);

        Mail::to('emailkamu@gmail.com')->send(new PesanKontak($data)); // ganti dengan emailmu

        return back()->with('success', 'Pesan Anda berhasil dikirim. Terima kasih!');
    }
}