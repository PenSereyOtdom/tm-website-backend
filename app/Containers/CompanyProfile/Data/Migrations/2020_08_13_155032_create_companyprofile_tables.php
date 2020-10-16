<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyprofileTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('companyprofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->string('full_name')->unique();
            $table->string('email');
            $table->string('img_profile');
            $table->string('overview');
            $table->string('company_name')->unique();
            $table->string('address');
            $table->string('representative');
            $table->string('person_in_charge');
            $table->string('contact');
            $table->string('year_of_establishment');
            $table->string('annual_sales');
            $table->string('number_of_employees');
            $table->string('overview_history');
            $table->string('main_supplier');
            $table->string('main_client');
            $table->string('business_detail');
            $table->string('area_of_expertise');
            $table->string('construction_work_to_increase_the_outsourcing_ratio_content');
            $table->string('construction_work_to_reduce_cost_content');
            $table->string('target_layer');
            $table->string('url_name');
            $table->string('other');
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('users')->onDelete('cascade');
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('companyprofiles');
    }
}
