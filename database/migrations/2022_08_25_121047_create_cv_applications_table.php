<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCVApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('cv_category_id');
            $table->foreign('cv_category_id')->references('id')->on('cv_categories');
            $table->integer('candidate_id')->nullable();
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('cv')->nullable();
            $table->date('payment_time')->nullable();
            $table->enum('payment_method', ['bank', 'telr'])->nullable();
            $table->double('paid_amount')->nullable();
            $table->enum('paid_currency', ['sdg', 'dollar'])->nullable();
            $table->enum('type', ['cv', 'job', 'workshop'])->default('job');
            $table->boolean('is_replied_to')->default(0);
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
        Schema::dropIfExists('job_applications');
    }
}
