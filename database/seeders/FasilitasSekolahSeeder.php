<?php

namespace Database\Seeders;

use App\Models\FasilitasSekolah;
use Illuminate\Database\Seeder;

class FasilitasSekolahSeeder extends Seeder
{
    public function run(): void
    {
        $daftarFasilitas = [
            ['nama' => 'Workshop BDP', 'poto' => 'leb-bdp.JPG'],
            ['nama' => 'Leb RPL', 'poto' => 'leb-rpl.JPG'],
            ['nama' => 'Musola', 'poto' => 'musola_2_3.JPG'],
            ['nama' => 'RPS TKR', 'poto' => 'rps-tkr.jpeg'],
            ['nama' => 'Ruang Guru', 'poto' => 'ruang-guru.jpeg'],
            ['nama' => 'Ruang Bimbingan & Konseling', 'poto' => 'ruang-bk.jpeg'],
            ['nama' => 'Leb APHP', 'poto' => 'leb-aphp.JPG'],
        ];

        foreach ($daftarFasilitas as $fasilitas) {
            FasilitasSekolah::create($fasilitas);
        }
    }
}