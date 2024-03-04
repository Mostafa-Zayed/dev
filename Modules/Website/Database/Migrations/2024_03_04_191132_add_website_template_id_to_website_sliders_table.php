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
        Schema::table('website_sliders', function (Blueprint $table) {
            $table->unsignedBigInteger('website_template_id')->nullable();
            $table->foreign('website_template_id')->references('id')->on('website_templates')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('website_sliders', function (Blueprint $table) {

        });
    }
};
