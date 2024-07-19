<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxPengujian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_analisis_kebutuhan', function (Blueprint $table) {
            $table->id();
            $table->string('NamaProyek');
            $table->string('TujuandanDeskripsi');
            $table->string('fungsiproyekproduk');
            $table->string('KebutuhanFungsional');
            $table->string ('acc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trx_analisis_kebutuhan');
    }
}
