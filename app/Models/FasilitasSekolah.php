<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasSekolah extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_sekolah';

    protected $fillable = ['nama', 'foto'];
}