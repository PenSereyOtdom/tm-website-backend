<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobpostTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jobposts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('project_title')->nullable();
            $table->string('project_classification')->nullable();
            $table->string('project_opening_category')->nullable();
            $table->string('project_type')->nullable();
            $table->string('location')->nullable();
            $table->string('salary')->nullable();
            $table->string('number_of_hiring');
            $table->string('qualification');
            $table->string('experience_level');
            $table->string('language')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('requirement')->nullable();
            $table->longtext('condition')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('closing_date')->nullable();
            $table->string('project_priority')->nullable();
            $table->string('status');
            $table->integer('save')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('jobposts');
    }
}
