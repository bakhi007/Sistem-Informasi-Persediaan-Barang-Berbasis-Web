<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Alpin Bakhtiar',
        //     'username' => 'alpinbakhtiar',
        //     'email' => 'alpinbakhtiar@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);
        User::create([
          'username' => 'Siti Isnaeni',
          'password' => Hash::make('4hsaN_123'),
          'role' => 'Manajer',
          // 'remember_token' => Str::random(10)
      ]);
        User::create([
          'username' => 'Nur Khasanah',
          'password' => Hash::make('n-word'),
          'role' => 'Karyawan',
          // 'remember_token' => Str::random(10)
      ]);
        // User::factory(5)->create();
    }
}
