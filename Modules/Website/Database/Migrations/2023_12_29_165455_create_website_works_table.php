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
        Schema::create('website_works', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description');
            $table->string('image');
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
        Schema::dropIfExists('website_works');
    }
};
