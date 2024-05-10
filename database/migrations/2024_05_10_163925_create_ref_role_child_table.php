<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ref_role_child', function (Blueprint $table) {
            $table->bigIncrements('id'); // int8, auto-increment, primary key
            $table->integer('menu_id'); // int4
            $table->integer('role_id'); // int4
            $table->smallInteger('view')->default(0); // int2
            $table->smallInteger('create')->default(0); // int2
            $table->smallInteger('update')->default(0); // int2
            $table->smallInteger('delete')->default(0); // int2
            $table->smallInteger('print')->default(0); // int2
            $table->smallInteger('export')->default(0); // int2
            $table->smallInteger('is_active')->default(1);
            $table->smallInteger('is_delete')->default(0);
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_role_child');
    }
};
