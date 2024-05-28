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
            $table->integer('rapat_id');
            $table->string('instansi', 255)->nullable();
            $table->string('no_registrasi', 255);
            $table->dateTime('tgl_registrasi')->nullable();
            $table->integer('jenis_peserta')->nullable();
            $table->string('nama', 255)->nullable();
            $table->string('nip', 255)->nullable();
            $table->string('jabatan', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('no_telp', 255)->nullable();
            $table->dateTime('tgl_kehadiran')->nullable();
            $table->integer('status_kehadiran')->nullable();
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


