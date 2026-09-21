<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasJurusan extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_jurusan';

    protected $fillable = [
        'jurusan_id',
        'nama',
        'foto',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}