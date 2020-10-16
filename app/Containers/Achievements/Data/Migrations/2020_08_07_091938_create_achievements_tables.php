<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAchievementsTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('seeker_id');
            $table->string('ach_title')->nullable();
            $table->string('ach_date')->nullable();
            $table->longText('ach_detail')->nullable();
            $table->timestamps();
            $table->foreign('seeker_id')->references('id')->on('users')->onDelete('cascade');

            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
