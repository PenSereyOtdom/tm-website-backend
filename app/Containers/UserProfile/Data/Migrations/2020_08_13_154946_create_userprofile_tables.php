<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserprofileTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('full_name');
            $table->string('status');
            $table->string('email');
            $table->string('major');
            $table->string('year_exp');
            $table->string('dob');
            $table->string('gender');
            $table->string('contact');
            $table->string('address');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('userprofiles');
    }
}
