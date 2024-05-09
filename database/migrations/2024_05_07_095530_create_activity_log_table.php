<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogTable extends Migration
{
    /**
     * Jalankan migrasi database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_log', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('subject_id', 255)->nullable();
            $table->string('causer_id', 255)->nullable();
            $table->string('created_at', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('device', 255)->nullable();
            $table->string('fullname', 255)->nullable();
            $table->string('ip_address', 255)->nullable();
            $table->string('updated_at', 255)->nullable();
            $table->string('url', 255)->nullable();
            $table->string('username', 255)->nullable();
        });
    }

    /**
     * Balikkan migrasi database.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_log');
    }
}
