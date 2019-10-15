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
            'header' => 'Our Mission',
            'text' => 'Our mission is to build a strong community between Athletes and Coaches to create positive outcomes in life and in the game for all involved. We collaborate with positive coaches to provide young athletes the tools they need to be successful in both their way of living and in the game. We believe Great Coaches transform average players into great players. We are here to serve you! The experiences and knowledge from great coaches is priceless. Athletes deserve a top-notch experience while growing within the sport and be able to promote themselves to college coaches. College coaches are looking for the commitment of the player and thats where we come into play. Our goal is to guide each player in bridging the gap between high school and collegiate athletics. Our focus is on the student-athletes success to see them grow and pass down their experiences to future generations. This is not a one-way street; we are here to go above and beyond for YOU! The Athletic Prospects team teaches you to grow into responsible and hardworking adults by giving you the skills you need to achieve your dreams.',
            'edited_by' => 'Dale Moore',
            ]
        );
    }
}
