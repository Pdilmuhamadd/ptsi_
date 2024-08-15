<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QATesting extends Model
{
    use HasFactory;

    protected $table = 'trx_qat';
    protected $primaryKey = 'id_qat';
    protected $fillable = [
        'nomor_proyek','nama_aplikasi','jenis_aplikasi','unit_pemilik','kebutuhan_nonfungsional', 'lokasi_pengujian', 'tanggal_pengujian', 'manual_book', 'eksp_wakturesp', 'eksp_throughput', 'eksp_efisiensi',
        'eksp_otentikasi','eksp_manajemen_pass','eksp_log_aktivitas','eksp_validasi_input','eksp_error_handling','eksp_perlindungan_data', 'eksp_load', 'eksp_responsive','hasil_wakturesp','hasil_throughput', 'hasil_efisiensi','notes_wakturesp',
        'hasil_otentikasi', 'hasil_manajemen_pass','hasil_log_aktivitas','hasil_validasi_input','hasil_error_handling','hasil_perlindungan_data','hasil_load','hasil_responsive',
        'notes_throughput','notes_efisiensi','nama_mengetahui','jabatan_mengetahui','tanggal_diketahui','nama_penyetuju','jabatan_penyetuju','tanggal_disetujui'
    ];
}
