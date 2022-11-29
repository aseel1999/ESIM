<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->text('hide_text');
            $table->text('hide_description');
            $table->text('about_text');
            $table->text('about_title');
            $table->text('about_first');
            $table->text('about_last');
            $table->string('file_image');
            $table->text('yearsofexperience');
            $table->string('experience');
            $table->text('available_text');
            $table->text('available_lorem');
            $table->text('activate');
            $table->string('image');
            $table->text('customer_say');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('location');
            $table->string('file_path');
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
        Schema::dropIfExists('landing_pages');
    }
};
