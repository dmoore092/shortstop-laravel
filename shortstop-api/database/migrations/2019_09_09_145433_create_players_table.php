<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create the db table structure here
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('profile_image');
            $table->enum('gender', array('Male','Female'))->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('highschool')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('grad_year')->nullable();
            $table->string('sport')->nullable();
            $table->string('primary_position')->nullable();
            $table->string('secondary_position')->nullable();
            $table->string('travel_team')->nullable();
            $table->string('gpa')->nullable();
            $table->string('sat')->nullable();
            $table->string('act')->nullable();
            $table->string('ref1_name')->nullable();
            $table->string('ref1_jobtitle')->nullable();
            $table->string('ref1_email')->nullable();
            $table->string('ref1_phone')->nullable();
            $table->string('ref2_name')->nullable();
            $table->string('ref2_jobtitle')->nullable();
            $table->string('ref2_email')->nullable();
            $table->string('ref2_phone')->nullable();
            $table->string('ref3_name')->nullable();
            $table->string('ref3_jobtitle')->nullable();
            $table->string('ref3_email')->nullable();
            $table->string('ref3_phone')->nullable();
            $table->string('showcase1')->nullable();
            $table->string('showcase2')->nullable();
            $table->string('showcase3')->nullable();
            $table->string('personal_statement')->nullable();
            $table->string('commitment')->nullable();
            $table->string('service')->nullable();
            $table->string('role')->nullable();
            $table->string('college')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->string('characteristics')->nullable();
            $table->string('velocity')->nullable();
            $table->string('gpareq')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
