<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    protected $table = 'home';

    protected $fillable = [
        'hero_judul', 
        'hero_text',
        'jumlah_guru', 
        'jumlah_siswa', 
        'jumlah_ekskul', 
        'jumlah_jurusan', 
        'jumlah_kelas',
    ];
}