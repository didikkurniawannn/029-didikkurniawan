<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddrVillagesTable extends Migration
{
    /**
     * Jalankan migrasi database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addr_villages', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('district_id', 255)->nullable();
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
        Schema::dropIfExists('addr_villages');
    }
}
