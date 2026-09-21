<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';

  protected $fillable = [
    "nama",
    "kode",
    "slug",
    "deskripsi",
    "deskripsi_lengkap",
    "logo",
    "gambar_hero",
    "urutan",
    "kompetensi",
    "keunggulan",
    "prospek",
    "nama_kaprog",
    "foto_kaprog",
  ];

protected $casts = [
    'kompetensi' => 'array',
    'keunggulan' => 'array',
    'prospek'    => 'array',
];

public function FasilitasJurusan()
{
  return $this->hasMany(FasilitasJurusan::class, 'jurusan_id');
}
}