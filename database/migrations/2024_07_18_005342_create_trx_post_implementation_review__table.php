<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxPostImplementationReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_post_implementation_review', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('manajer_proyek');
            $table->text('tujuan_pir');
            $table->text('deskripsi');
            $table->string('tujuan_proyek');
            $table->string('ruang_lingkup_proyek');
            $table->string('waktu');
            $table->string('biaya');
            $table->text('ruang_lingkup_pencapaian');
            $table->text('fungsionalitas');
            $table->text('kinerja');
            $table->text('keandalan');
            $table->text('pengguna');
            $table->text('feedback_positif');
            $table->text('feedback_negatif');
            $table->text('efisiensi');
            $table->text('akurasi');
            $table->text('kepuasan_pengguna');
            $table->text('masalah');
            $table->text('solusi');
            $table->text('pelajaran_yang_dipetik');
            $table->text('kesimpulan');
            $table->text('rekomendasi');
            $table->string('pemangku_kepentingan');
            $table->date('tanggal_persetujuan');
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
        Schema::dropIfExists('trx_post_implementation_review');
    }
}
