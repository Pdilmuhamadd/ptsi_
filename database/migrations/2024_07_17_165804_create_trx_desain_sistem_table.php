<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxDesainSistemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_desain_sistem', function (Blueprint $table) {
            $table->id();
            $table->text('tujuan');
            $table->text('ruang_lingkup');
            $table->text('definisi_akronim_singkatan');
            $table->text('referensi');
            $table->text('gambaran_dokumen');
            $table->string('deskripsi_sistem');
            $table->string('lingkungan_operasional');
            $table->text('diagram_arsitektur');
            $table->string('komponen_sistem');
            $table->text('hubungan_antar_komponen');
            $table->decimal('desain_modul');
            $table->text('diagram_kelas');
            $table->text('diagram_urutan');
            $table->string('model_data');
            $table->string('skema_basis_data');
            $table->string('aturan_integritas');
            $table->text('prototipe_antarmuka');
            $table->text('navigasi_antarmuka');
            $table->string('elemen_ui');
            $table->text('mekanisme_keamanan');
            $table->text('protokol_keamanan');
            $table->text('persyaratan_kinerja');
            $table->text('strategi_kinerja');
            $table->text('persyaratan_hardware');
            $table->text('persyaratan_software');
            $table->text('strategi_implementasi');
            $table->text('step_implementasi');
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
        Schema::dropIfExists('trx_desain_sistem');
    }
}
