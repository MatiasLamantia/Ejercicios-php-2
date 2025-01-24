<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::truncate();
        \App\Models\Post::truncate();
        \App\Models\Category::truncate();

        Post::factory(5)->create();

        
        // $user = \App\Models\User::factory()->create();
        

        // $personal = \App\Models\Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $work = \App\Models\Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // $hobbies = \App\Models\Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies'
        // ]);

        // \App\Models\Post::create([
        //     'category_id' => $personal->id,
        //     'user_id' => $user->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'This is my personal post.',
        //     'body' => '<p>This is the body of my personal post.</p>'
            
            
        // ]);


        // \App\Models\Post::create([
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'This is my work post.',
        //     'body' => '<p>This is the body of my work post.</p>',
        //     'category_id' => $work->id,
        //     'user_id' => $user->id
        // ]);

        // \App\Models\Post::create([
        //     'title' => 'My Hobbies Post',
        //     'slug' => 'my-hobbies-post',
        //     'excerpt' => 'This is my hobbies post.',
        //     'body' => '<p>This is the body of my hobbies post.</p>',
        //     'category_id' => $hobbies->id,
        //     'user_id' => $user->id
        // ]);

    }
}
