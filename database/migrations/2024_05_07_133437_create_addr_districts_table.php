<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddrDistrictsTable extends Migration
{
    /**
     * Jalankan migrasi database.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addr_districts', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('regency_id', 255)->nullable();
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
        Schema::dropIfExists('addr_districts');
    }
}
