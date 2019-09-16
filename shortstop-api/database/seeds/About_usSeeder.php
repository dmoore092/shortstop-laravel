<?php

use Illuminate\Database\Seeder;

class About_usSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->delete();

        DB::table('about_us')->insert([
            'header' => 'Test Header',
            'text' => 'Test Text'
        ]
        );
    }
}
