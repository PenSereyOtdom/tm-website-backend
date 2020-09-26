<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessindustriesTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('businessindustries', function (Blueprint $table) {

            $table->increments('id');
            $table->string('business_industry')->nullable();
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('businessindustries');
    }
}
