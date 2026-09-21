<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin SMKN 1 Cijati',
            'email' => 'akmal@smkn1cijati.com',
               'password' => Hash::make(env('ADMIN_PASSWORD', 'ganti-password-ini')),
        ]);
    }
}