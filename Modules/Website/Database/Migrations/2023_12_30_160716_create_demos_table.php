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
        Schema::create('demos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('website_slider_id')->nullable();
            $table->unsignedBigInteger('website_feature_id')->nullable();
            $table->unsignedBigInteger('website_banner_block_id')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('website_slider_id')->references('id')->on('website_sliders')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('website_feature_id')->references('id')->on('website_features')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('website_banner_block_id')->references('id')->on('website_banner_blocks')->onUpdate('cascade')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demos');
    }
};
