<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('posts')->count() === 0) {
            DB::table('posts')->insert([
                'desc' => 'ngắn gọn',
                'content' => 'Câu chuyện rùa và thỏ. Chiên lược...',
                'image_url' => 'https://lorempixel.com/640/480/?45237',
            ])
        }
    }
}
