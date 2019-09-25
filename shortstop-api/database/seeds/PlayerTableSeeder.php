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
            'gender' => 'male'
        ]);

        DB::table('players')->insert([
            'gender' => 'male'
        ]);

        DB::table('players')->insert([
            'gender' => 'male',
            'sport' => 'Basketball'
        ]);

        DB::table('players')->insert([
            'gender' => 'male',
            'sport' => 'Football'
        ]);
    }
}
