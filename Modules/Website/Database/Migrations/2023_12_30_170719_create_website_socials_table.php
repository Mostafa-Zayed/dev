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
        Schema::create('website_socials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_name');
            $table->string('image');
            $table->string('link');
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
        Schema::dropIfExists('website_socials');
    }
};
