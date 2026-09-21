<?php
// database/factories/HomeFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'jumlah_guru'    => 52,
            'jumlah_siswa'   => 700,
            'jumlah_ekskul'  => 10,
            'jumlah_jurusan' => 4,
            'jumlah_kelas'   => 22,
        ];
    }
}