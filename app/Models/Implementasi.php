<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Implementasi extends Model
{
    use HasFactory;

    protected $table = 'trx_Implementasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_proyek','manajer_proyek','tim_implementasi','tgl_laporan_implementasi','tujuan_implementasi','lingkup_implementasi','aktivitas_implementasi','tgl_aktivitas_implementasi',
        'deskripsi_aktivitas_implementasi','status_aktivitas','risiko','deskripsi_risiko','mitigasi','status_risiko','masalah_ditemui','deskripsi_masalah','solusi',
        'status_masalah','rencana_tindak_lanjut','dokumentasi','rencana_dukungan','kriteria_kesuksesan','persetujuan',
    ];
}
