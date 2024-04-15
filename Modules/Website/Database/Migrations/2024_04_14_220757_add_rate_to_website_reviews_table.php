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
        Schema::table('website_reviews', function (Blueprint $table) {
            $table->text('job')->nullable();
            $table->unsignedTinyInteger('rate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('website_reviews', function (Blueprint $table) {
            $table->dropColumn('job');
            $table->dropColumn('rate');
        });
    }
};
