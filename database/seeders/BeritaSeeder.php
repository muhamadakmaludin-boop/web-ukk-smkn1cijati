<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul'     => 'Maulid Nabi Muhammad SAW',
                'tanggal'   => '2026-08-25',
                'gambar'    => 'berita/ucapan-maulid-nabi.jpeg',
                'ringkasan' => 'Semoga kegiatan ini menjadi kegiatan yang mengantarkan kepada kebaikan dunia akhirat.',
                'tag'       => 'Kegiatan',
            ],
            [
                'judul'     => 'Panter Vol 2',
                'tanggal'   => '2026-03-15',
                'gambar'    => 'berita/panter-vol-2_22.jpg',
                'ringkasan' => 'Semangat disiplin semakin menguat, semangat tak pernah padam, karakter terus ditempa. Panter untuk kelas XI SMKN 1 CIJATI bersama Kodim 0608 Cianjur berlangsung penuh antusias dan semangat kebersamaan.',
                'tag'       => 'Siswa',
            ],
            [
                'judul'     => 'Prestasi Paskibraka Kabupaten',
                'tanggal'   => '2026-09-01',
                'gambar'    => 'prestasi/ilham-sulaeman-paskibra-kabupaten.jpeg',
                'ringkasan' => 'Selamat dan sukses kepada ananda Ilham Sulaeman yang telah menjadi bagian Paskibraka Kabupaten Cianjur.',
                'tag'       => 'Prestasi',
            ],
            [
                'judul'     => 'Pesantren Ekologi: Bersih Hati, Bersih Badan, Bersih Lingkungan',
                'tanggal'   => '2026-09-05',
                'gambar'    => 'berita/psantren-ekologi-2026.jpg',
                'ringkasan' => 'Kegiatan Pesantren Ekologi SMKN 1 CIJATI mengangkat semangat kebersihan hati, badan, dan lingkungan sebagai bagian dari pembentukan karakter siswa.',
                'tag'       => 'Kegiatan',
            ],
            [
                'judul'     => 'Program Keahlian SMK Negeri 1 Cijati',
                'tanggal'   => '2026-09-03',
                'gambar'    => 'berita/program-keahlian-smkn1cijati.jpeg',
                'ringkasan' => 'Perkenalan program keahlian yang tersedia di SMKN 1 CIJATI untuk membekali siswa dengan keterampilan sesuai bidang pilihannya.',
                'tag'       => 'Pengumuman',
            ],
            [
                'judul'     => 'Ucapan Selamat Hari Raya Idul Adha 1447 H',
                'tanggal'   => '2026-05-27',
                'gambar'    => 'berita/ucapan-idul-adha.jpeg',
                'ringkasan' => 'Keluarga besar SMKN 1 CIJATI mengucapkan Selamat Hari Raya Idul Adha 1447 H. Semoga semangat keikhlasan dan kebersamaan membawa keberkahan bagi seluruh warga sekolah.',
                'tag'       => 'Pengumuman',
            ],
            [
                'judul'     => 'Upacara Memperingati HUT ke-81 RI',
                'tanggal'   => '2026-08-17',
                'gambar'    => 'berita/upacara-hut-81-ri.jpeg',
                'ringkasan' => 'SMKN 1 CIJATI menggelar upacara bendera dalam rangka memperingati Hari Ulang Tahun ke-81 Kemerdekaan Republik Indonesia.',
                'tag'       => 'Kegiatan',
            ],
        ];

        foreach ($data as $item) {
            Berita::updateOrCreate(
                ['judul' => $item['judul']],
                $item
            );
        }
    }
}