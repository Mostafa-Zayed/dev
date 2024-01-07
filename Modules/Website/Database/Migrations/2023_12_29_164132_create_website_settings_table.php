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
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->text('section_features_title')->nullable();
            $table->text('section_features_description')->nullable();
            $table->string('section_features_image')->nullable();
            $table->text('section_work_title')->nullable();
            $table->text('section_work_description')->nullable();
            $table->string('section_work_image')->nullable();
            $table->text('section_screenshot_title')->nullable();
            $table->text('section_screenshot_description')->nullable();
            $table->string('section_packages_title')->nullable();
            $table->text('section_packages_description')->nullable();
            $table->text('section_reviews_title')->nullable();
            $table->text('section_reviews_description')->nullable();
            $table->text('section_questions_title')->nullable();
            $table->text('section_questions_description')->nullable();
            $table->string('section_questions_image')->nullable();
            $table->text('section_posts_title')->nullable();
            $table->text('section_posts_description')->nullable();
            $table->text('newsletter_description')->nullable();
            $table->string('footer_logo')->nullable();
            $table->text('footer_description')->nullable();
            $table->string('support_email')->nullable();
            $table->string('sales_email')->nullable();
            $table->string('location_address')->nullable();
            $table->string('location_country')->nullable();
            $table->string('office_days')->nullable();
            $table->string('office_hours')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('support_phone')->nullable();
            $table->string('location_icon')->nullable();
            $table->string('office_icon')->nullable();
            $table->string('phone_icon')->nullable();
            $table->string('email_icon')->nullable();
            $table->text('find_us_description')->nullable();

            $table->string('google_store_link')->nullable();
            $table->string('apple_store_link')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('map_location_address')->nullable();
            $table->string('section_download_app_title')->nullable();
            $table->string('download_app_external_link1')->nullable();
            $table->string('download_app_external_link2')->nullable();
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
        Schema::dropIfExists('website_settings');
    }
};
