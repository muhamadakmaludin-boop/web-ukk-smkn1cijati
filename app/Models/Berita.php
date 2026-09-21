<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = [
        'judul',
        'tanggal',
        'gambar',
        'ringkasan',
        'tag',
    ];

    protected $casts = [
    'tanggal' => 'date',
];

   public function getGambarUrlAttribute(): string
{
    return $this->gambar
        ? asset('image/berita/' . $this->gambar)
        : asset('image/placeholder.jpg');
}
}