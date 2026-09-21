<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        $daftarGuru = [
            [
                'nama'    => 'A Rahmat Dimyati, S.Pd., M.Pd.',
                'jabatan' => 'Kepala Sekolah',
                'mapel'   => '-',
                'foto'    => 'a_rahmat_dimyati.jpeg',
                'urutan'  => 1,
            ],
            [
                'nama'    => 'Ai Nurhasanah, S.Pd.',
                'jabatan' => 'Guru',
                'mapel'   => 'Matematika & Informatika',
                'foto'    => 'ai_nurhasanah.jpg',
                'urutan'  => 2,
            ],
            [
                'nama'    => 'Andri Muhoir, S.T.',
                'jabatan' => 'Guru',
                'mapel'   => 'Teknik Otomotif',
                'foto'    => 'andri_muhoir.jpg',
                'urutan'  => 3,
            ],
            [
                'nama'    => 'Asep Muhlis Sulaeman, S.Pd.I.',
                'jabatan' => 'Guru',
                'mapel'   => 'PAI & BP',
                'foto'    => 'asep_muhlis_sulaeman.jpg',
                'urutan'  => 4,
            ],
            [
                'nama'    => 'Budiana Hermawan, S.TP.',
                'jabatan' => 'Guru',
                'mapel'   => 'APHP',
                'foto'    => 'budiana_hermawan.jpg',
                'urutan'  => 5,
            ],
            [
                'nama'    => 'Asep Purnama',
                'jabatan' => 'Laboran',
                'mapel'   => 'Teknik Otomotif',
                'foto'    => 'asep_purnama.jpg',
                'urutan'  => 6,
            ],
            [
                'nama'    => 'Ayi Suryati, A.Ma.Pust.',
                'jabatan' => 'Staff Administrasi',
                'mapel'   => 'Perpustakaan',
                'foto'    => 'ayi_suryati.jpg',
                'urutan'  => 7,
            ],
            [
                'nama'    => 'Ahmad Suhendra',
                'jabatan' => 'Petugas',
                'mapel'   => 'Kebersihan & Keindahan Sekolah',
                'foto'    => 'ahmad_suhendra.jpg',
                'urutan'  => 8,
            ],
            [
                'nama'    => 'Apendi',
                'jabatan' => 'Petugas',
                'mapel'   => 'Kebersihan & Keindahan Sekolah',
                'foto'    => 'apendi.jpg',
                'urutan'  => 9,
            ],
            [
                'nama'    => 'D Jamaludin',
                'jabatan' => 'Petugas',
                'mapel'   => 'Kebersihan & Keindahan Sekolah',
                'foto'    => 'd_jamaludin.jpg',
                'urutan'  => 10,
            ],
        ];

      
    foreach ($daftarGuru as $guru) {
        Guru::create($guru);
    }

    }
}