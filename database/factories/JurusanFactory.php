<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JurusanFactory extends Factory
{
    public function definition(): array
    {
        $nama = $this->faker->words(3, true);

        return [
            'nama'              => $nama,
            'slug'              => Str::slug($nama),
            'deskripsi'         => $this->faker->sentence(15),
            'deskripsi_lengkap' => $this->faker->paragraph(),
            'logo'              => 'default.jpeg',
            'urutan'            => $this->faker->numberBetween(1, 10),
        ];
    }
}