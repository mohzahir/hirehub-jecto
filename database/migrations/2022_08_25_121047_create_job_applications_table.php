<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('job_post_id');
            $table->foreign('job_post_id')->references('id')->on('job_posts');
            $table->integer('candidate_id')->nullable();
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('cv')->nullable();
            $table->date('payment_time')->nullable();
            $table->enum('payment_method', ['bank', 'telr'])->nullable();
            $table->string('payment_photo')->nullable();
            $table->boolean('payment_confirmed')->default(0);
            $table->double('paid_amount')->nullable();
            $table->enum('paid_currency', ['sdg', 'dollar'])->nullable();
            $table->text('cover_letter')->nullable();
            $table->text('notes')->nullable();
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
