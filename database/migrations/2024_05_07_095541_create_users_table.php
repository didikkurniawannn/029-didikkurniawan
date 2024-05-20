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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('instansi_id')->nullable();
            $table->integer('role_id')->nullable();
            $table->string('nama', 255);
            $table->string('nip', 255);
            $table->integer('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('phone', 255);
            $table->text('alamat');
            $table->string('username', 255);
            $table->string('password', 255);
            $table->string('email', 255);
            $table->string('email_verified_at', 255)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('avatar_url', 255)->nullable();
            $table->string('avatar_size', 255)->nullable();
            $table->string('avatar_path', 255)->nullable();
            $table->string('remember_token')->nullable();
            $table->boolean('is_active');
            $table->dateTime('last_login_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->integer('created_id')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->integer('updated_id')->nullable();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_0900_ai_ci';
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
