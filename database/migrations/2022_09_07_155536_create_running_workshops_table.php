<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunningWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('running_workshops', function (Blueprint $table) {
            $table->id();
            $table->integer('workshop_id');
            $table->double('price_dollar');
            $table->double('price_sdg');
            $table->timestamp('start_date');
            $table->timestamp('finish_date');
            $table->boolean('shown')->default(1);
            $table->integer('lecture_hours')->nullable();
            $table->integer('total_hours')->nullable();
            $table->string('location');
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
        Schema::dropIfExists('running_workshops');
    }
}
