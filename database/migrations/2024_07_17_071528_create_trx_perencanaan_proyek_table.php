<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatetrxPerencanaanProyekTable extends Migration
{
    public function up()
    {
        Schema::create('trx_perencanaan_proyek', function (Blueprint $table) {
            $table->id();
            $table->text('latar_belakang_proyek');
            $table->text('tujuan_proyek');
            $table->text('ruang_lingkup_proyek');
            $table->text('struktur_tim');
            $table->text('tanggung_jawab_anggota_tim');
            $table->text('identifikasi_risiko');
            $table->string('analisis_risiko');
            $table->string('strategi_mitigasi_risiko');
            $table->text('fase_proyek');
            $table->string('kegiatan_utama');
            $table->text('milestones');
            $table->decimal('estimasi_biaya', 15, 2);
            $table->text('sumber_pendanaan');
            $table->text('pengendalian_biaya');
            $table->string('standar_kualitas');
            $table->string('metriks_kualitas');
            $table->string('audit_review_kualitas');
            $table->text('rencana_komunikasi');
            $table->text('laporan_status');
            $table->string('pertemuan_tim');
            $table->text('kebutuhan_sdm');
            $table->text('kebutuhan_teknologi_komunikasi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trx_perencanaan_proyek');
    }
}
