<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_resume', function (Blueprint $table) {
            $table->id();
            $table->integer('rapat_id');
            $table->integer('jumlah_hadir');
            $table->text('rengkuman_diskusi');
            $table->text('kesimpulan');
            $table->text('tindak_lanjut');
            $table->string('dokumen', 255)->nullable();
            $table->string('catatan_tambahan', 255)->nullable();
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
        Schema::dropIfExists('t_resume');
    }
}

