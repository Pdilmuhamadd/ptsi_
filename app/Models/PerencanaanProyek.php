<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerencanaanProyek extends Model
{
    use HasFactory;

    protected $table = 'trx_perencanaan_proyek';
    protected $primaryKey = 'id';
    protected $fillable = [
        'latar_belakang_proyek','tujuan_proyek','ruang_lingkup_proyek','struktur_tim',
        'tanggung_jawab_anggota_tim','identifikasi_risiko','analisis_risiko','strategi_mitigasi_risiko','fase_proyek','kegiatan_utama',
        'milestones','estimasi_biaya','sumber_pendanaan','pengendalian_biaya','standar_kualitas','metriks_kualitas',
        'audit_review_kualitas','rencana_komunikasi','laporan_status','pertemuan_tim','kebutuhan_sdm', 'kebutuhan_teknologi_komunikasi'
    ];
}
