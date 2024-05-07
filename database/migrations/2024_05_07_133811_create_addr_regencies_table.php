<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddrRegenciesTable extends Migration
{
    /**
     * Jalankan migrasi database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addr_regencies', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('province_id', 255)->nullable();
            $table->string('name', 255)->nullable();
        });
    }

    /**
     * Balikkan migrasi database.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addr_regencies');
    }
}
