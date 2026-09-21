<?php

namespace Database\Seeders;

use App\Models\Sambutan;
use Illuminate\Database\Seeder;

class SambutanSeeder extends Seeder
{
    public function run(): void
    {
        Sambutan::updateOrCreate(
            ['id' => 1],
            Sambutan::factory()->make()->toArray()
        );
    }
}