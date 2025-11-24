<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@spmb.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'jk' => 'Laki-Laki',
            'no_hp' => '081234567890',
            'foto'=> 'admin.png',
        ]);
        User::create([
            'nama' => 'Cahya Qomadi',
            'email' => 'cahyaqtp@spmb.com',
            'password' => Hash::make('cahya123'),
            'role' => 'guru',
            'jk' => 'Laki-Laki',
            'no_hp' => '081234567891',
            'foto'=> 'cahya.png',
        ]);
        User::create([
            'nama' => 'Tri Prasetyo',
            'email' => 'triprasetyo@spmb.com',
            'password' => Hash::make('cahya123'),
            'role' => 'guru',
            'jk' => 'Laki-Laki',
            'no_hp' => '081234567892',
            'foto'=> 'tri.png',
        ]);
    }
}
