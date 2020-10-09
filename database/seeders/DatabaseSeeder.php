<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Category_post;
use App\Models\Student;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // $this->call([
        //     StudentsTableSeeder::class,
        //     SubjectsTableSeeder::class,
        // ]);
        Post::factory(10)->create();
        Comment::factory(10)->create();
        Category::factory(10)->create();
        Category_Post::factory(10)->create();
        Student::factory(10)->create();
    }
}
