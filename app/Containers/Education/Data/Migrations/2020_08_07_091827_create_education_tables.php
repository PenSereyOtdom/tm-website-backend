<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEducationTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('seeker_id');
            $table->string('school_name')->nullable();
            $table->string('degree')->nullable();
            $table->string('edu_start_date')->nullable();
            $table->string('edu_end_date')->nullable();
            $table->string('major')->nullable();
            $table->longText('edu_detail')->nullable();
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
        Schema::dropIfExists('education');
    }
}
