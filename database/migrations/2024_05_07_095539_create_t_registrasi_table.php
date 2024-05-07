<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTRegistrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_registrasi', function (Blueprint $table) {
            $table->id();
            $table->integer('instansi_id');
            $table->string('no_registrasi', 255);
            $table->dateTime('tgl_registrasi');
            $table->string('nama', 255);
            $table->string('nip', 255);
            $table->string('jabatan', 255);
            $table->string('email', 255);
            $table->string('no_telp', 255);
            $table->dateTime('tgl_kehadiran');
            $table->integer('status_kehadiran');
            $table->text('catatan')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_registrasi');
    }
}


