<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(1)->create();

        // User::factory()->create([
        //     'name' => 'Admin',
        //     'username' => 'admin',
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        $this->call([TypeSeeder::class, UserSeeder::class, ProductSeeder::class]);
        // Post::factory(100)->recycle([
        //     Category::all(),
        //     User::all()
        // ])->create();

        
        
        
    }
}
