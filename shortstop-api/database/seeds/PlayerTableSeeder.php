<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'user_id' => 1,
            'gender' => 'male'
        ]);

        DB::table('players')->insert([
            'user_id' => 2,
            'gender' => 'male'
        ]);

        DB::table('players')->insert([
            'user_id' => 3,
            'gender' => 'male'
        ]);
    }
}
