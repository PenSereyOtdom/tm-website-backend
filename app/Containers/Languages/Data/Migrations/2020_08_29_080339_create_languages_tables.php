<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguagesTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('seeker_id')->nullable();
            $table->string('lang')->nullable();
            $table->string('level')->nullable();
            $table->timestamps();
            $table->foreign('seeker_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
