<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('applies_id');
            $table->string('invoice_no')->nullable();
            $table->string('total_hours')->nullable();
            $table->string('total_earn')->nullable();
            $table->string('fee')->nullable();
            $table->string('tax')->nullable();
            $table->string('grand_total')->nullable();
            $table->timestamps();
            $table->foreign('applies_id')->references('id')->on('applies')->onDelete('cascade');

        });

        Schema::create('invoice_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoices_id')->unsigned();
            $table->integer('dailyreports_id')->unsigned();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
