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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('major');
            $table->string('gender');
            $table->string('contact');
            $table->string('address');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('guthub_link');
            $table->string('linkedin_link');
            $table->string('website_link');
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
