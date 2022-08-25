<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("category_id");
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string("title");
            $table->string("title_ar");
            $table->string("slug")->unique();
            $table->text("description")->nullable();
            $table->text("description_ar")->nullable();
            $table->string("photo");
            $table->boolean("is_featured")->default(0);
            $table->enum("status", ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('jobs');
    }
}
