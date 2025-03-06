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
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id_service', 12);
            $table->integer('id_kendaraan');
            $table->text('keluhan');
            $table->integer('id_mekanik');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->integer('id_jns_service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
