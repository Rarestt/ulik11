<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptate zzzzzzzzzzzzzz zzzzzzzzzzzzzzzzz zzzzzzz zzzzzzzzzzz zzzzzzzzzzzzzzzzzzzz zzzzzzzzzzzzzzzz zzzzzzzz.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);

        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
