<?php

namespace Database\Seeders;

use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //    Book::factory(4)->create([
        //     'user_id' => $user->id
        // ]);
            Book::create([
            "title" => "Guide to Full Stack Development",
            "author" => "Ochi Tonye Daniel",
            "published_year" => "2025",
            "genre" => "Tech",
           
        ]);
              Book::create([
            "title" => "Laravel Fundamentals",
            "author" => "Max Rigbe",
            "published_year" => "2025",
            "genre" => "Laravel/Inertia",
           
        ]);
    }
}
