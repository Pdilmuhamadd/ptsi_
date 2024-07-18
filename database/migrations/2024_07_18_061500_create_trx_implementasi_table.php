<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxImplementasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_implementasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->string('manajer_proyek');
            $table->string('tim_implementasi');
            $table->date('tgl_laporan_implementasi');
            $table->text('tujuan_implementasi');
            $table->string('lingkup_implementasi');
            $table->string('aktivitas_implementasi');
            $table->date('tgl_aktivitas_implementasi');
            $table->text('deskripsi_aktivitas_implementasi');
            $table->string('status_aktivitas');
            $table->string('risiko');
            $table->text('deskripsi_risiko');
            $table->string('mitigasi');
            $table->string('status_risiko');
            $table->text('masalah_ditemui');
            $table->text('deskripsi_masalah');
            $table->text('solusi');
            $table->string('status_masalah');
            $table->text('rencana_tindak_lanjut');
            $table->text('dokumentasi');
            $table->text('rencana_dukungan');
            $table->text('kriteria_kesuksesan');
            $table->text('persetujuan');
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
        Schema::dropIfExists('trx_implementasi');
    }
}
