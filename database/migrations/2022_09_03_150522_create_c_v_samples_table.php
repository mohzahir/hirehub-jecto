<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCVSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_samples', function (Blueprint $table) {
            $table->id();
            $table->integer('cv_category_id');
            $table->foreign('cv_category_id')->references('id')->on('cv_categories');
            $table->string('title');
            $table->string('title_ar');
            $table->string('photo');
            $table->string('pdf');
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
        Schema::dropIfExists('cv_samples');
    }
}
