<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GaleriFactory extends Factory
{
    protected $model = \App\Models\Galeri::class;

    public function definition(): array
    {
        $kategori = $this->faker->randomElement([
            'Kegiatan Sekolah',
            'MPLS',
            'Prestasi',
            'Pendidikan Karakter',
            'Ekstrakurikuler',
        ]);

        return [
            'judul' => ucfirst($this->faker->words(3, true)),
            'kategori' => $kategori,
            'deskripsi' => $this->faker->sentence(12),
            'gambar' => 'galeri/placeholder.jpg',
            'tampil' => true,
            'urutan' => $this->faker->numberBetween(0, 20),
        ];
    }
}