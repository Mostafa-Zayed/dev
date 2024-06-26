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
        Schema::create('website_features', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->string('external_link')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('is_home')->default(true);
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('website_features');
    }
};
