<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone1');
            $table->string('email1');
            $table->string('address1');
            $table->string('address1_ar');
            $table->string('phone2');
            $table->string('email2');
            $table->string('address2');
            $table->string('address2_ar');
            $table->string('phone3');
            $table->string('email3');
            $table->string('address3');
            $table->string('address3_ar');
            $table->enum('opining_week_day', ['sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri']);
            $table->enum('closing_week_day', ['sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri']);
            $table->time('opining_hour');
            $table->time('closing_hour');
            $table->string('feature1_title');
            $table->text('feature1_descr');
            $table->string('feature1_title_ar');
            $table->text('feature1_descr_ar');
            $table->string('feature2_title');
            $table->text('feature2_descr');
            $table->string('feature2_title_ar');
            $table->text('feature2_descr_ar');
            $table->string('feature3_title');
            $table->text('feature3_descr');
            $table->string('feature3_title_ar');
            $table->text('feature3_descr_ar');
            $table->string('feature4_title');
            $table->text('feature4_descr');
            $table->string('feature4_title_ar');
            $table->text('feature4_descr_ar');
            $table->string('feature5_title');
            $table->text('feature5_descr');
            $table->string('feature5_title_ar');
            $table->text('feature5_descr_ar');
            $table->string('feature6_title');
            $table->string('feature6_descr');
            $table->string('feature6_title_ar');
            $table->string('feature6_descr_ar');
            $table->text('google_map_link');
            $table->text('ceo_video_link');
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('logo1');
            $table->string('logo2');
            $table->string('account_number');
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
        Schema::dropIfExists('settings');
    }
}
