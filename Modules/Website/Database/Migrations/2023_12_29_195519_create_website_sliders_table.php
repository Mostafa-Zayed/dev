<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->string('heading');
            $table->text('description');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('app_store_link')->nullable();
            $table->string('google_play_link')->nullable();
            $table->string('external_link')->nullable();
            $table->string('video_link')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('is_home')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_sliders');
    }
};
