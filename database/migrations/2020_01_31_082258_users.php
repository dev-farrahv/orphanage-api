<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->nullable();;
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('nick_name')->nullable();
            $table->string('gender')->nullable(); // 1=male, 2=female
            $table->integer('age')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('sabbath')->nullable();
            $table->string('provincial_address')->nullable();
            $table->string('civil_status')->nullable(); // 1=single, 2=married
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('date_hired')->nullable();
            $table->string('oi_phil_health')->nullable();
            $table->string('oi_sss')->nullable();
            $table->string('oi_umid')->nullable();
            $table->string('oi_pagibig')->nullable();
            $table->integer('status')->nullable(); // 0=inactive, 1=active
            $table->integer('is_admin')->default(0);  // 0=no, 1=yes 
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
        Schema::dropIfExists('users');
    }
}
