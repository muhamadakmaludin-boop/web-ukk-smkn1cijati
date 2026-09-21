<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfilFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_sekolah' => 'SMK NEGERI 1 CIJATI',
            'npsn' => '20252505',
            'akreditasi' => 'A',
            'status_sekolah' => 'NEGERI',
            'jenjang_pendidikan' => 'SMK',
            'alamat' => 'Jl. Cijati, Kecamatan Cijati',
            'desa_kelurahan' => 'Cijati',
            'kecamatan' => 'Cijati',
            'kabupaten' => 'Cianjur',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '43284',
            'email' => 'smknegri1cijati@gmail.com',
            'telepon' => '085720817637',
            'website' => 'www.smkn1cijati.sch.id',
            'tahun_berdiri' => '19 September 2006',
            'deskripsi' => 'SMK NEGERI 1 CIJATI merupakan sekolah menengah kejuruan negeri yang berada di Kecamatan Cijati, Kabupaten Cianjur, Provinsi Jawa Barat. Sekolah ini berkomitmen mencetak lulusan yang kompeten, berkarakter, mandiri, serta siap menghadapi dunia kerja maupun jenjang pendidikan lanjutan.',
            'visi' => 'Terwujudnya lulusan KEREN dan BERSINERGI melalui pembelajaran mendalam, penguatan karakter Pancawaluya, serta kolaborasi aktif dengan dunia kerja dan industri.',
            'misi' => implode("\n", [
                'Menyelenggarakan pembelajaran mendalam yang berpusat pada peserta didik untuk mengembangkan kompetensi secara optimal.',
                'Menumbuhkan karakter religius, energik, dan nasionalis dalam kehidupan sehari-hari melalui penguatan nilai-nilai Pancawaluya.',
                'Mengembangkan lulusan yang kompeten dan berdaya saing sesuai dengan kebutuhan dunia kerja dan perkembangan zaman.',
                'Menanamkan jiwa kewirausahaan (entrepreneurship) melalui kegiatan pembelajaran dan praktik nyata.',
                'Menumbuhkan integritas, etos kerja, dan tanggung jawab melalui pembiasaan, keteladanan, dan budaya sekolah yang positif.',
                'Menguatkan kolaborasi dan kemitraan aktif dengan dunia kerja dan industri untuk meningkatkan relevansi dan kualitas lulusan.',
            ]),
        ];
    }
}