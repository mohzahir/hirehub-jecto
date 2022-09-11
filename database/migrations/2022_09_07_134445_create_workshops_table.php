<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("category_id");
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('title');
            $table->string('title_ar');
            $table->longText('description');
            $table->longText('description_ar');
            $table->string('slug')->unique();
            $table->string('img')->nullable();
            $table->string('video')->nullable();
            $table->string('trainer_name')->nullable();
            $table->string('trainer_name_ar')->nullable();
            $table->string('trainer_job_title')->nullable();
            $table->string('trainer_job_title_ar')->nullable();
            $table->string('trainer_img')->nullable();
            $table->text('trainer_descr')->nullable();
            $table->text('trainer_descr_ar')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('workshops');
    }
}
