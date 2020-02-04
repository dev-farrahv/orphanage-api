<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEmploymentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_employment_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->string('duties', 255)->nullable();
            $table->string('date_from')->nullable();
            $table->string('date_to')->nullable();
            $table->string('reference', 255)->nullable();
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
        Schema::dropIfExists('user_employment_histories');
    }
}
