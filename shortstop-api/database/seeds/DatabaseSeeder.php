<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(About_usSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PlayerTableSeeder::class);

        $this->command->info('About Us table seeded!');
    }
}

