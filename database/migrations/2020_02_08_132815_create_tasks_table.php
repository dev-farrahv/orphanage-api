<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('elder_id')->nullable();
            $table->string('elder_name')->nullable();
            $table->string('medicine_id')->nullable();
            $table->string('medicine_description')->nullable();
            $table->string('qty')->nullable();
            $table->string('time')->nullable();
            $table->string('date')->nullable();
            $table->json('date_repeats')->nullable();
            $table->string('status')->nullable();
            $table->string('task_description')->nullable();
            $table->string('task_owner_id')->nullable();
            $table->string('task_owner_role')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
