<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_menu', function (Blueprint $table) {
            $table->id();
            $table->string('menu', 255);
            $table->integer('parent_id')->nullable();
            $table->integer('posisi');
            $table->string('jenis_menu');
            $table->integer('is_active');
            $table->string('url', 255)->nullable();
            $table->string('icon', 255)->nullable();
            $table->string('type', 64)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->integer('created_id')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->integer('updated_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_menu');
    }
}

