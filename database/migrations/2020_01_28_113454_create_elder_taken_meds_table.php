<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElderTakenMedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elder_taken_meds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('elder_id');
            $table->integer('medicine_id')->nullable();
            $table->string('medicine_desc')->nullable();
            $table->string('qty')->nullable();
            $table->integer('assigned_staff_id')->nullable();
            $table->string('assigned_staff_name')->nullable();
            $table->string('status')->nullable(); // 1= done
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
        Schema::dropIfExists('elder_taken_meds');
    }
}
