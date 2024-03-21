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
        Schema::create('website_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',100)->nullable();
            $table->unsignedSmallInteger('phone');
            $table->text('message');
            $table->enum('status',['not-read','read','procced'])->default('not-read');
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
        Schema::dropIfExists('website_contacts');
    }
};
