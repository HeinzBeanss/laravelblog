<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        $user = User::factory()->create([
            'name' => 'David Bean'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        Post::factory(2)->create();

        // $user = User::factory()->create();
    
        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::Create([
        //     'title' => 'My First Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'Oh my god I can\'t believe this! Read more...',
        //     'body' => 'You just got click baited haha! There\'s nothing here of value! You just got click baited haha! There\'s nothing here of value! You just got click baited haha! There\'s nothing here of value! You just got click baited haha! There\'s nothing here of value! You just got click baited haha! There\'s nothing here of value! ',
        //     'category_id' => $personal->id,
        //     'user_id' => $user->id
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
