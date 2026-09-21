<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuruFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama'    => $this->faker->name(),
            'jabatan' => $this->faker->randomElement(['Guru', 'Kepala Sekolah', 'Staff', 'Petugas']),
            'mapel'   => $this->faker->randomElement(['Matematika', 'Bahasa Indonesia', 'Bahasa Inggris', '-']),
            'foto'    => 'default.jpg',
            'urutan'  => $this->faker->numberBetween(1, 20),
        ];
    }
}