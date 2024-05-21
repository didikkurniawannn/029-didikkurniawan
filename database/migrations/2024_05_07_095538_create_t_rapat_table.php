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
            $table->text('peserta_id');
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_selesai');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('nama_rapat', 255);
            $table->text('agenda');
            $table->text('tujuan');
            $table->text('catatan');
            $table->integer('status');
            $table->string('tempat', 255);
            $table->text('dress_code');
            $table->text('documen');
            $table->text('alamat');
            $table->integer('provinsi_id')->nullable();
            $table->integer('kabupaten_id')->nullable();
            $table->integer('kecamatan_id')->nullable();
            $table->integer('desa_id')->nullable();
            $table->integer('step');
            $table->integer('finish');
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

