<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'title' => 'Blog 1',
            'text' => 'This is Blog 1',
            'tags' => 'Sportsmanship, College',
            'post_image' => 'black.JPG',
            'youtube_link' => 'https://youtube.com/embed/_3SpXsvaSi8',
            'author' => 'Dale Moore'
        ]);
    }
}
