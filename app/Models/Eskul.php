<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    protected $table = 'eskul'; // sesuaikan kalau nama tabelmu "eskuls"

    protected $fillable = [
        'nama',
        'deskripsi',
        'pembina',
        'jadwal',
        'foto',
        'logo',
    ];
}