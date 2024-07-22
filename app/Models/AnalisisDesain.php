<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisDesain extends Model
{
    use HasFactory;

    protected $table = 'trx_analisis_desain';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_proyek', 'deskripsi_proyek', 'manajer_proyek',  'kebutuhan_fungsi',  'gambaran_arsitektur', 'detil_arsitektur', 'lampiran_mockup', 'nama_pemohon', 'jabatan_pemohon', 'tanggal_disiapkan', 'nama', 'jabatan', 'tanggal_disetujui', 'status'
    ];
}
