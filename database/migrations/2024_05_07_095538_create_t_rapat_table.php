<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTRapatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_rapat', function (Blueprint $table) {
            $table->id();
            $table->text('peserta_id')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->time('jam_mulai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->string('nama_rapat', 255)->nullable();
            $table->text('agenda')->nullable();
            $table->text('tujuan')->nullable();
            $table->text('catatan')->nullable();
            $table->integer('status')->nullable();
            $table->string('tempat', 255)->nullable();
            $table->text('dress_code')->nullable();
            $table->text('document')->nullable();
            $table->text('keterangan_peserta')->nullable();
            $table->text('alamat')->nullable();
            $table->text('lat')->nullable();
            $table->text('lng')->nullable();
            $table->integer('provinsi_id')->nullable();
            $table->integer('kabupaten_id')->nullable();
            $table->integer('kecamatan_id')->nullable();
            $table->integer('desa_id')->nullable();
            $table->integer('step')->nullable();
            $table->integer('finish')->nullable();
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
        Schema::dropIfExists('t_rapat');
    }
}

