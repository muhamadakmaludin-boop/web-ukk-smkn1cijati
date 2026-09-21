<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil'; // <-- WAJIB, biar tidak salah tebak jadi "profiles"

    protected $fillable = [
        'nama_sekolah',
        'npsn',
        'akreditasi',
        'status_sekolah',
        'jenjang_pendidikan',
        'alamat',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos',
        'email',
        'telepon',
        'website',
        'tahun_berdiri',
        'deskripsi',
        'visi',
        'misi',
    ];

    public function getMisiArrayAttribute(): array
    {
        return array_filter(explode("\n", $this->misi));
    }
}