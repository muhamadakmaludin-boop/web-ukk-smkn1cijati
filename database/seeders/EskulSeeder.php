<?php

namespace Database\Seeders;

use App\Models\Eskul;
use Illuminate\Database\Seeder;

class EskulSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Pramuka',
                'deskripsi' => 'Melatih kedisiplinan, kemandirian, jiwa kepemimpinan, dan kecintaan pada alam melalui kegiatan kepramukaan.',
                'pembina' => 'Moch Najib Aminulah / Nina Hermawati',
                'jadwal' => 'Jumat, 13.00 WIB',
                'foto' => 'image/ekskul/pramuka.jpeg',
                'logo' => 'image/logo/logo.pramuka.jpeg',
            ],
            [
                'nama' => 'Paskibra',
                'deskripsi' => 'Membentuk sikap tegas, disiplin baris-berbaris, dan rasa cinta tanah air melalui latihan formasi pengibaran bendera.',
                'pembina' => 'Ende Iskandar',
                'jadwal' => 'Sabtu, 08.00 WIB',
                'foto' => 'image/ekskul/paskib.jpeg',
                'logo' => 'image/logo/logo.paskib.jpeg',
            ],
            [
                'nama' => 'PMR (Palang Merah Remaja)',
                'deskripsi' => 'Melatih kepedulian sosial, kerja sama, dan keterampilan pertolongan pertama dengan semangat "Tumbuh Bersama, Menolong Sesama".',
                'pembina' => 'Mega Nurunnisa / Moch Najib Aminulah',
                'jadwal' => 'Selasa, 15.00 WIB',
                'foto' => 'image/ekskul/pmr.jpeg',
                'logo' => 'image/logo/logo.pmr.jpeg',
            ],
            [
                'nama' => 'Futsal',
                'deskripsi' => 'Mengasah kerja sama tim, strategi, dan kebugaran fisik siswa melalui latihan dan pertandingan futsal rutin.',
                'pembina' => 'Jaya Nur Setiawandi',
                'jadwal' => 'Rabu-Kamis, 15.30 WIB',
                'foto' => 'image/ekskul/futsal.jpeg',
                'logo' => 'image/logo/logo.futsal.jpeg',
            ],
            [
                'nama' => 'Bola Voli',
                'deskripsi' => 'Melatih ketangkasan, kekompakan tim, dan semangat sportivitas melalui latihan teknik dasar hingga pertandingan.',
                'pembina' => 'Dedi Sukardi',
                'jadwal' => 'Selasa, 15.30 WIB',
                'foto' => 'image/ekskul/voli.jpeg',
                'logo' => 'image/logo/logo.voli.jpeg',
            ],
            [
                'nama' => 'Karawitan',
                'deskripsi' => 'Menyalurkan kreativitas siswa di bidang seni tradisional melalui gamelan dan seni pertunjukan khas Sunda.',
                'pembina' => 'Yoga Agung Nugraha',
                'jadwal' => 'Rabu, 15.00 WIB',
                'foto' => 'image/ekskul/karawitan.jpeg',
                'logo' => 'image/logo/logo.karawitan.jpeg',
            ],
            [
                'nama' => 'Rohis',
                'deskripsi' => 'Belajar keagamaan seperti membaca Al-Qur\'an dengan baik dan benar, serta melatih keberanian berdakwah di depan umum.',
                'pembina' => 'Asep Mukhlis',
                'jadwal' => 'Senin, 15.30 WIB',
                'foto' => 'image/ekskul/rohis.jpg',
                'logo' => 'image/logo/logo.rohis.jpeg',
            ],
            [
                'nama' => 'Cinemak',
                'deskripsi' => 'Wadah jurnalistik dan media sekolah — belajar produksi video, fotografi, dan penulisan berita agar terlihat menarik secara estetika.',
                'pembina' => 'Rahmat Setiawan',
                'jadwal' => 'Senin, 13.00 WIB',
                'foto' => 'image/ekskul/foto/cinemak.jpg',
                'logo' => 'image/logo/logo.cinemak.jpeg',
            ],
            [
                'nama' => 'Marching Band Gitamadhuswara',
                'deskripsi' => 'Mengembangkan kemampuan bermusik, ketukan, dan kekompakan formasi barisan dalam pertunjukan marching band.',
                'pembina' => 'Bu Nurah Alwaini',
                'jadwal' => 'Sabtu, 08.00 WIB',
                'foto' => 'image/ekskul/mb.jpeg',
                'logo' => 'image/logo/logo.marching band.jpeg',
            ],
            [
                'nama' => 'Bahasa Jepang',
                'deskripsi' => 'Melatih kemampuan berbahasa Jepang agar siswa siap saat bekerja ke luar negeri, khususnya Jepang, termasuk kesiapan mengikuti tes bahasa Jepang.',
                'pembina' => 'Saripul Basar',
                'jadwal' => 'Senin, 15.00 WIB',
                'foto' => 'image/ekskul/foto/bahasajepang.jpg',
                'logo' => 'image/logo/logo.b jepang.jpeg',
            ],
        ];

        foreach ($data as $item) {
            Eskul::create($item);
        }
    }
}