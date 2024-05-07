<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddrProvincesTable extends Migration
{
    /**
     * Jalankan migrasi database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addr_provinces', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
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
        Schema::dropIfExists('addr_provinces');
    }
}
