<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('task_id')->nullable();
            $table->integer('elder_id')->nullable();
            $table->string('elder_name')->nullable();
            $table->integer('medicine_id')->nullable();
            $table->string('medicine_description')->nullable();
            $table->integer('qty')->nullable();
            $table->string('time')->nullable();
            $table->string('date')->nullable();
            $table->string('status')->nullable();
            $table->string('task_description')->nullable();
            $table->string('staff_name')->nullable();
            $table->integer('staff_id')->nullable();
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
        Schema::dropIfExists('task_reports');
    }
}
