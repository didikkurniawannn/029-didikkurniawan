<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ref_setting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('favicon', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->text('address')->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('sandbox_status', 255)->nullable();
            $table->string('sandbox_wa', 255)->nullable();
            $table->string('tte', 255)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->string('logo_url', 255)->nullable();
            $table->string('logo_size', 255)->nullable();
            $table->string('logo_path', 255)->nullable();
            $table->string('logo_human_size', 255)->nullable();
            $table->string('favicon_url', 255)->nullable();
            $table->string('favicon_size', 255)->nullable();
            $table->string('favicon_path', 255)->nullable();
            $table->string('favicon_human_size', 255)->nullable();
            $table->string('splashscreen', 255)->nullable();
            $table->string('splashscreen_url', 255)->nullable();
            $table->string('splashscreen_size', 255)->nullable();
            $table->string('splashscreen_path', 255)->nullable();
            $table->string('splashscreen_human_size', 255)->nullable();
            $table->string('logo_text_url', 255)->nullable();
            $table->string('logo_text_size', 255)->nullable();
            $table->string('logo_text_path', 255)->nullable();
            $table->string('logo_text_human_size', 255)->nullable();
            $table->string('logo_text', 255)->nullable();
            $table->string('storage_url', 255)->nullable();
            $table->smallInteger('is_sso')->nullable();
            $table->string('prov', 16)->nullable();
            $table->string('kab', 16)->nullable();
            $table->text('token_silinda')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_setting');
    }
};
