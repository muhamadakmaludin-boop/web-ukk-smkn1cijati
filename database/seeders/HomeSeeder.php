<?php
// database/seeders/HomeSeeder.php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        Home::updateOrCreate(
    ['id' => 1],
    [
        'hero_judul' => 'SMKN 1 CIJATI',
        'hero_text' => 'Selamat datang di website SMKN 1 CIJATI. Temukan informasi sekolah, kegiatan, prestasi, dan berbagai aktivitas siswa.',
        'jumlah_guru' => 52,
        'jumlah_siswa' => 720,
        'jumlah_ekskul' => 10,
        'jumlah_jurusan' => 4,
        'jumlah_kelas' => 22,
    ]
        );
    }
}