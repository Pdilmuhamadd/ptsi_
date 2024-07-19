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
        'Nama_Proyek', 'Deskripsi_Proyek', 'ManajerProyek',  'Kebutuhan_Fungsi',  'gambaran_arsitektur', 'detil_arsitektur', 'lampiran_mockup', 'nama_pemohon', 'jabatan_pemohon', 'Tanggal_disiapkan', 'nama', 'jabatan', 'tanggal_disetujui', 'status'
    ];
}
