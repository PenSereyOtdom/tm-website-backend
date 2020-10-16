<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCvTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('seeker_id')->unique();
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('skill')->nullable();
            $table->string('email')->nullable();
            $table->integer('phone_number')->nullable();
            $table->longText('summary')->nullable();
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
        Schema::dropIfExists('cvs');
    }
}
