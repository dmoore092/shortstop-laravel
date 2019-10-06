<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dale Moore',
            'email'=> 'dmoore092@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('keyhole1'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Keith Prestano',
            'email'=> 'kprestano@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('keyhole1'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Dave Smith',
            'email'=> 'dsmith@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('keyhole1'),
            'role' => 'player'
        ]);

        DB::table('users')->insert([
            'name' => 'Mike Jones',
            'email'=> 'mjones@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('keyhole1'),
            'role' => 'player'
        ]);
    }
}
