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
        Schema::table('categories', function (Blueprint $table) {
            $table->boolean('digital')->default(false);
            $table->boolean('top')->default(false);
            $table->boolean('featured')->default(false);
            $table->unsignedTinyInteger('order_level')->default(0);
            $table->double('commision_rate',8,2)->default(0.00);
            $table->string('banner')->nullable();
            $table->string('icon')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('resource',100)->nullable();
            $table->unsignedBigInteger('resource_id')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('digital');
            $table->dropColumn('top');
            $table->dropColumn('featured');
            $table->dropColumn('order_level');
            $table->dropColumn('commision_rate');
            $table->dropColumn('banner');
            $table->dropColumn('icon');
            $table->dropColumn('cover_image');
            $table->dropColumn('resource_id');
            $table->dropColumn('resource');
        });
    }
};
