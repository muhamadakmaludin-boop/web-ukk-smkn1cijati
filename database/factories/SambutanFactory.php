<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SambutanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_kepsek' => 'A. Rahmat Dimyati',
            'foto' => 'a_rahmat_dimyati.jpeg',
            'isi' => "Assalamualaikum Warahmatullahi Wabarakatuh.\n\n"
                . "Puji syukur kami panjatkan ke hadirat Allah SWT atas segala rahmat dan karunia-Nya, "
                . "sehingga SMK Negeri 1 Cijati dapat terus berkembang dan berkontribusi dalam mencerdaskan "
                . "kehidupan bangsa melalui pendidikan kejuruan yang berkualitas.\n\n"
                . "Selamat datang di laman resmi SMK Negeri 1 Cijati. Sebagai lembaga pendidikan menengah "
                . "kejuruan, kami berkomitmen untuk membentuk generasi muda yang tidak hanya unggul secara "
                . "akademik, tetapi juga memiliki keterampilan, karakter, dan kesiapan menghadapi dunia kerja "
                . "maupun melanjutkan pendidikan ke jenjang yang lebih tinggi.\n\n"
                . "Kami terus berupaya meningkatkan kualitas pembelajaran, sarana dan prasarana, serta "
                . "menjalin kerja sama dengan dunia usaha dan dunia industri agar lulusan kami benar-benar "
                . "kompeten, berkarakter, dan siap bersaing di era global.\n\n"
                . "Atas nama seluruh keluarga besar SMK Negeri 1 Cijati, saya mengucapkan terima kasih atas "
                . "dukungan dan kepercayaan yang diberikan. Semoga sekolah ini dapat terus menjadi tempat "
                . "menimba ilmu yang bermanfaat bagi siswa-siswi kami dan masyarakat luas.\n\n"
                . "Wassalamualaikum Warahmatullahi Wabarakatuh.",
        ];
    }
}