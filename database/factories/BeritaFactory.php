<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul'     => $this->faker->sentence(4),
            'tanggal'   => $this->faker->dateTimeBetween('-1 year', 'now'),
            'gambar'    => 'image/berita/default.jpg',
            'ringkasan' => $this->faker->paragraph(2),
            'tag'       => $this->faker->randomElement(['Kegiatan', 'Siswa', 'Prestasi', 'Pengumuman']),
        ];
    }
}