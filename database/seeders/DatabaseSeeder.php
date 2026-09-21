<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        AdminSeeder::class,
        GuruSeeder::class,
        EskulSeeder::class,
        BeritaSeeder::class,
        JurusanSeeder::class,
        FasilitasJurusanSeeder::class,   // ← tambahkan ini
        ProfilSeeder::class,
        SambutanSeeder::class,
        HomeSeeder::class,
    ]);
}
}