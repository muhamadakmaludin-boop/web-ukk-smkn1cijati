<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\FasilitasJurusan;

class FasilitasJurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fasilitasPerJurusan = [
            'RPL' => [
                ['nama' => 'Lab Komputer', 'foto' => 'leb-rpl.JPG'],
                ['nama' => 'Ruangan Praktek ', 'foto' => 'ruangleb-rpl.jpeg'],
                ['nama' => 'Komputer Prakter', 'foto' => 'komputer-rpl.jpeg'],
                ['nama' => 'Ruangan Print & Foto Copi', 'foto' => 'ruanganprint-rpl.jpeg'],
                ['nama' => 'Printer', 'foto' => 'printer-rpl.jpeg'],
            ],
            'BD' => [
                ['nama' => 'Studio Live', 'foto' => '(foto).jpg'],
                ['nama' => 'Lab Praktik Bisnis', 'foto' => 'leb-bdp.JPG'],
                ['nama' => 'Ruang Lab Bisnis', 'foto' => '(ruang).jpg'],
            ],
            'TKR' => [
                ['nama' => 'RPS TKR', 'foto' => 'rps-tkr.jpeg'],
                ['nama' => 'Ruang Praktik ', 'foto' => 'ruangbengkel-tkr.jpeg'],
                ['nama' => 'Peralatan Konci', 'foto' => 'konci2-tkr.jpeg'],
                ['nama' => 'Trainer Central Lock', 'foto' => 'TCL-tkr.jpeg'],
                ['nama' => 'Trainer Kelistrikan Dasar', 'foto' => 'tkd-tkr.jpeg'],
                ['nama' => 'Trainer Manajemen Mesin', 'foto' => 'TMM-tkr.jpeg'],
            ],
            'APHP' => [
                ['nama' => 'Lab Pengolahan Pangan', 'foto' => 'lab-pangan.jpg'],
                ['nama' => 'Ruang Praktik Kimia', 'foto' => 'praktik-kimia.jpg'],
                ['nama' => 'Gudang Bahan Baku', 'foto' => 'gudang-bahan.jpg'],
            ],
        ];

        foreach ($fasilitasPerJurusan as $kodeJurusan => $daftarFasilitas) {
            $jurusan = Jurusan::where('kode', $kodeJurusan)->first();

            if (!$jurusan) {
                continue;
            }

            foreach ($daftarFasilitas as $item) {
                FasilitasJurusan::create([
                    'jurusan_id' => $jurusan->id,
                    'nama'       => $item['nama'],
                    'foto'       => $item['foto'],
                ]);
            }
        }
    }
}