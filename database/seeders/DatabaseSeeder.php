<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Pengguna::create([
            'nama_lengkap' => 'Nico Simarmata',
            'username' => 'MataCoco',
            'password' => Hash::make('admin123'),
            'no_tlpn' => '081260604445',
            'alamat' => 'Jalan Kebonagung',
        ]);
    }
}
