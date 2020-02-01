<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('guest_name');
            $table->string('contact_no')->nullable();
            $table->string('address')->nullable();
            $table->integer('relationship_id')->nullable();
            $table->string('relationship_description')->nullable();
            $table->integer('elder_id')->nullable();
            $table->datetime('time_in')->nullable();
            $table->datetime('time_out')->nullable();
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
        Schema::dropIfExists('guests');
    }
}
