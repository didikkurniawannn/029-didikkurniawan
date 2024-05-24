<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefInstansiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_instansi', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('leader', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('no_telp', 255)->nullable();
            $table->integer('status')->nullable();
            $table->integer('type')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->integer('created_id')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->integer('updated_id')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->integer('deleted_id')->nullable();
            $table->integer('is_delete')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_instansi');
    }
}

