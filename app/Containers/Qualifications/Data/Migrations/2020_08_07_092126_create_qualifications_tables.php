<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQualificationsTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('qualification')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('qualifications');
    }
}
