<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medicine_name')->nullable();
            $table->string('expiration_date')->nullable();
            $table->integer('type_of_medicine_id')->nullable();
            $table->string('type_of_medicine_description')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('buffer')->nullable();
            $table->integer('dispense')->nullable();
            $table->boolean('archived')->default(false);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
