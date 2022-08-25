<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('title');
            $table->string('title_ar');
            $table->string('slug')->unique();
            $table->longText('short_descr');
            $table->longText('short_descr_ar');
            $table->longText('descr');
            $table->longText('descr_ar');
            $table->integer('salary_from')->nullable();
            $table->integer('salary_to')->nullable();
            $table->integer('experience')->nullable();
            $table->integer('duration')->nullable();
            $table->enum('job_type', ['fulltime', 'remote', 'parttime', 'temporary', 'internship', 'freelancer'])->default('fulltime');
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->boolean('is_featured')->default(0);
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
        Schema::dropIfExists('job_posts');
    }
}
