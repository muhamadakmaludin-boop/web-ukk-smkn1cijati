<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
    [
        'nama' => 'Rekayasa Perangkat Lunak',
        'kode' => 'RPL',
        'slug' => 'rpl',
        'logo' => 'logo-rpl.jpeg',
        'gambar_hero' => 'leb-rpl-1.JPG', // sarankan rename file (hindari spasi di nama file)
        'deskripsi' => 'Program keahlian yang membekali siswa dengan kemampuan merancang, membangun, dan mengembangkan aplikasi berbasis web, desktop, maupun mobile, sesuai standar kebutuhan industri digital masa kini.',
        'deskripsi_lengkap' => "Jurusan Rekayasa Perangkat Lunak (RPL) SMKN 1 CIJATI mempersiapkan siswa menjadi programmer dan pengembang perangkat lunak yang siap kerja maupun melanjutkan pendidikan ke jenjang perguruan tinggi.\n\nSiswa dibekali kemampuan pemrograman, logika algoritma, basis data, hingga pengembangan aplikasi nyata melalui praktik langsung di laboratorium komputer.",
        'kompetensi' => [
            ['icon'=>'01','judul'=>'Pemrograman Dasar','deskripsi'=>'Mempelajari dasar logika dan algoritma pemrograman.'],
            ['icon'=>'WEB','judul'=>'Pemrograman Web','deskripsi'=>'Mempelajari pembuatan website dan aplikasi berbasis web.'],
            ['icon'=>'DB','judul'=>'Basis Data','deskripsi'=>'Mempelajari perancangan dan pengelolaan basis data.'],
            ['icon'=>'OOP','judul'=>'Pemrograman Berorientasi Objek','deskripsi'=>'Mempelajari konsep dan penerapan OOP dalam aplikasi.'],
            ['icon'=>'MOB','judul'=>'Pengembangan Aplikasi Mobile','deskripsi'=>'Mempelajari pembuatan aplikasi untuk perangkat mobile.'],
            ['icon'=>'UI','judul'=>'Desain UI/UX','deskripsi'=>'Mempelajari perancangan antarmuka dan pengalaman pengguna.'],
        ],
        'fasilitas' => ['pplg-2.jpg|Lab Komputer','Lab Jaringan','Ruang Multimedia','Koneksi internet penunjang praktik'],
        'keunggulan' => [
            ['judul'=>'Praktik Langsung','deskripsi'=>'Siswa membangun aplikasi nyata melalui praktik di laboratorium komputer.'],
            ['judul'=>'Kreativitas Teknologi','deskripsi'=>'Melatih kemampuan berpikir logis dan memecahkan masalah lewat pemrograman.'],
            ['judul'=>'Peluang Karier IT','deskripsi'=>'Membuka peluang kerja maupun studi lanjut di bidang teknologi informasi.'],
        ],
        'prospek' => ['Web Developer','Mobile App Developer','UI/UX Designer','Software Engineer'],
        'urutan' => 1,
    ],
    [
        'nama' => 'Bisnis Daring',
        'kode' => 'BD',
        'slug' => 'bd',
        'logo' => 'logo-bd.jpeg',
        'gambar_hero' => 'bd1.jpg',
        'deskripsi' => 'Program keahlian yang mempelajari bisnis online, pemasaran digital, e-commerce, pengelolaan toko online, dan strategi promosi.',
        'deskripsi_lengkap' => "Bisnis Daring atau BD merupakan program keahlian yang mempelajari berbagai kegiatan bisnis dengan memanfaatkan teknologi digital.\n\nSiswa dibekali kemampuan dalam pemasaran, pengelolaan toko online, digital marketing, pelayanan pelanggan, dan pengelolaan produk.",
        'kompetensi' => [
            ['icon'=>'01','judul'=>'Bisnis Online','deskripsi'=>'Mempelajari konsep dan kegiatan bisnis secara online.'],
            ['icon'=>'DM','judul'=>'Digital Marketing','deskripsi'=>'Mempelajari strategi pemasaran menggunakan media digital.'],
            ['icon'=>'MRK','judul'=>'Pemasaran','deskripsi'=>'Mempelajari strategi pemasaran dan penjualan produk.'],
            ['icon'=>'EC','judul'=>'E-Commerce','deskripsi'=>'Mengenal sistem perdagangan melalui platform digital.'],
            ['icon'=>'TOKO','judul'=>'Pengelolaan Toko Online','deskripsi'=>'Mempelajari pengelolaan toko dan produk secara daring.'],
            ['icon'=>'PROMO','judul'=>'Strategi Promosi','deskripsi'=>'Mengembangkan strategi promosi yang menarik dan efektif.'],
            ['icon'=>'CS','judul'=>'Pelayanan Pelanggan','deskripsi'=>'Mempelajari komunikasi dan pelayanan kepada pelanggan.'],
            ['icon'=>'PROD','judul'=>'Pengelolaan Produk','deskripsi'=>'Mempelajari pengelolaan produk untuk kegiatan bisnis.'],
        ],
        'fasilitas' => ['bd1.jpg|Lab Bisnis Retail','Internet','Perangkat pemasaran digital','Media pembelajaran bisnis'],
        'keunggulan' => [
            ['judul'=>'Bisnis Digital','deskripsi'=>'Mengenal perkembangan bisnis yang memanfaatkan teknologi digital.'],
            ['judul'=>'Kreativitas','deskripsi'=>'Melatih kemampuan membuat strategi promosi dan pemasaran yang kreatif.'],
            ['judul'=>'Peluang Usaha','deskripsi'=>'Membekali siswa dengan pengetahuan untuk mengembangkan usaha secara mandiri.'],
        ],
        'prospek' => ['Digital Marketer','Pengelola Toko Online','Social Media Specialist','Entrepreneur','Staff Pemasaran'],
        'urutan' => 2,
    ],
    [
        'nama' => 'Teknik Kendaraan Ringan',
        'kode' => 'TKR',
        'slug' => 'tkr',
        'logo' => 'logo-tkr.jpeg',
        'gambar_hero' => 'tkr-1.jpg',
        'deskripsi' => 'Program keahlian yang mempelajari perawatan, perbaikan, pemeriksaan, dan sistem kendaraan ringan serta teknologi otomotif.',
        'deskripsi_lengkap' => "Teknik Kendaraan Ringan atau TKR merupakan program keahlian yang berfokus pada teknologi dan perawatan kendaraan ringan.\n\nSiswa mempelajari berbagai sistem kendaraan, perawatan mesin, kelistrikan, sistem rem, sistem kemudi, hingga pemeriksaan kendaraan.",
        'kompetensi' => [
            ['icon'=>'01','judul'=>'Perawatan Kendaraan','deskripsi'=>'Mempelajari perawatan kendaraan secara berkala.'],
            ['icon'=>'MESIN','judul'=>'Perbaikan Mesin','deskripsi'=>'Mengenal pemeriksaan dan perbaikan mesin kendaraan.'],
            ['icon'=>'EL','judul'=>'Kelistrikan Kendaraan','deskripsi'=>'Mempelajari sistem kelistrikan pada kendaraan.'],
            ['icon'=>'STP','judul'=>'Sistem Pemindah Tenaga','deskripsi'=>'Mengenal sistem pemindah tenaga kendaraan.'],
            ['icon'=>'REM','judul'=>'Sistem Rem','deskripsi'=>'Mempelajari pemeriksaan dan perawatan sistem rem.'],
            ['icon'=>'KMD','judul'=>'Sistem Kemudi','deskripsi'=>'Mengenal sistem kemudi dan pemeriksaannya.'],
            ['icon'=>'CEK','judul'=>'Pemeriksaan Kendaraan','deskripsi'=>'Mempelajari pemeriksaan kondisi kendaraan.'],
        ],
        'fasilitas' => ['Bengkel praktik','Peralatan otomotif','Peralatan servis kendaraan','Media praktik kendaraan'],
        'keunggulan' => [
            ['judul'=>'Banyak Praktik','deskripsi'=>'Siswa mendapatkan pengalaman melalui kegiatan praktik otomotif.'],
            ['judul'=>'Keterampilan Otomotif','deskripsi'=>'Membekali siswa dengan keterampilan dasar perawatan dan perbaikan kendaraan.'],
            ['judul'=>'Peluang Kerja','deskripsi'=>'Memiliki peluang untuk bekerja di berbagai bidang industri otomotif.'],
        ],
        'prospek' => ['Mekanik','Teknisi Otomotif','Service Advisor','Teknisi Kendaraan','Wirausaha Bengkel'],
        'urutan' => 3,
    ],
    [
        'nama' => 'Agribisnis Pengolahan Hasil Pertanian',
        'kode' => 'APHP',
        'slug' => 'aphp',
        'logo' => 'logo-aphp.jpeg',
        'gambar_hero' => null,
        'deskripsi' => 'Program keahlian yang mempelajari pengolahan, produksi, pengemasan, pengendalian mutu, dan pemasaran hasil pertanian.',
        'deskripsi_lengkap' => "Agribisnis Pengolahan Hasil Pertanian atau APHP merupakan program keahlian yang mempelajari pengolahan hasil pertanian menjadi produk yang memiliki nilai tambah.\n\nSiswa mempelajari proses produksi, pengolahan, pengemasan, pengendalian mutu, pengembangan produk, hingga pemasaran hasil pertanian.",
        'kompetensi' => [
            ['icon'=>'01','judul'=>'Pengolahan Hasil Pertanian','deskripsi'=>'Mempelajari proses pengolahan bahan hasil pertanian.'],
            ['icon'=>'PROD','judul'=>'Teknik Produksi','deskripsi'=>'Mempelajari teknik produksi produk hasil pertanian.'],
            ['icon'=>'PKG','judul'=>'Pengemasan Produk','deskripsi'=>'Mempelajari teknik pengemasan produk yang baik.'],
            ['icon'=>'QC','judul'=>'Pengendalian Mutu','deskripsi'=>'Mempelajari pemeriksaan dan pengendalian kualitas produk.'],
            ['icon'=>'NEW','judul'=>'Pengembangan Produk','deskripsi'=>'Mengembangkan produk olahan yang memiliki nilai tambah.'],
            ['icon'=>'FOOD','judul'=>'Pengolahan Makanan','deskripsi'=>'Mempelajari proses pengolahan berbagai produk pangan.'],
            ['icon'=>'MRK','judul'=>'Pemasaran Produk','deskripsi'=>'Mempelajari pemasaran produk hasil pertanian.'],
        ],
        'fasilitas' => ['Ruang praktik','Peralatan pengolahan','Peralatan produksi','Peralatan pengemasan'],
        'keunggulan' => [
            ['judul'=>'Produk Kreatif','deskripsi'=>'Mendorong siswa untuk mengembangkan produk hasil pertanian yang kreatif.'],
            ['judul'=>'Keterampilan Produksi','deskripsi'=>'Siswa mendapatkan pengalaman dalam proses pengolahan dan produksi.'],
            ['judul'=>'Peluang Usaha','deskripsi'=>'Membuka peluang untuk mengembangkan usaha di bidang produk pangan dan pertanian.'],
        ],
        'prospek' => ['Pengusaha Produk Olahan','Teknisi Pengolahan Hasil Pertanian','Quality Control','Staff Produksi','Wirausaha Bidang Pangan'],
        'urutan' => 4,
    ],
];


        foreach ($data as $item) {
            Jurusan::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}