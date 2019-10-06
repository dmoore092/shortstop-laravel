<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('header', '1000')->default('At Athletic Prospects');
            $table->string('text', '1000')->default('We strive to provide High School and JUCO athletes the tools to successfully promote themselves to college coaches by assisting athletes through the recruiting process. Our goal is to be a mentor-leader to athletes to teach them the importance of academics and athletics while showing strong leadership characteristics to be successful on and off the field.');
            $table->string('edited_by');
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
        Schema::dropIfExists('home_info');
    }
}
