<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxQualityAssuranceTestingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_quality_assurance_testing', function (Blueprint $table) {
            $table->id('id_qat');
            $table->text('nomor_proyek');
            $table->text('nama_aplikasi');
            $table->text('jenis_aplikasi');
            $table->text('unit_pemilik');
            $table->text('kebutuhan_nonfungsional');
            $table->text('lokasi_pengujian');
            $table->date('tanggal_pengujian');
            $table->text('manual_book');
            $table->text('eksp_wakturesp');
            $table->text('eksp_throughput');
            $table->text('eksp_efisiensi');
            $table->text('eksp_otentikasi');
            $table->text('eksp_manajemen_pass');
            $table->text('eksp_log_aktivitas');
            $table->text('eksp_validasi_input');
            $table->text('eksp_error_handling');
            $table->text('eksp_perlindungan_data' );
            $table->text('eksp_load' );
            $table->text('eksp_responsive');
            $table->text('hasil_wakturesp');
            $table->text('hasil_throughput' );
            $table->text('hasil_efisiensi');
            $table->text('notes_wakturesp');
            $table->text('hasil_otentikasi' );
            $table->text('hasil_manajemen_pass');
            $table->text('hasil_log_aktivitas');
            $table->text('hasil_validasi_input');
            $table->text('hasil_error_handling');
            $table->text('hasil_perlindungan_data');
            $table->text('hasil_load');
            $table->text('hasil_responsive');
            $table->text('notes_throughput');
            $table->text('notes_efisiensi');
            $table->text('nama_mengetahui');
            $table->text('jabatan_mengetahui');
            $table->date('tanggal_diketahui');
            $table->text('nama_penyetuju');
            $table->text('jabatan_penyetuju');
            $table->date('tanggal_disetujui');
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
        Schema::dropIfExists('trx_quality_assurance_testing');
    }
}
