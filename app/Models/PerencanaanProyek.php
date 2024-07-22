<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerencanaanProyek extends Model
{
    use HasFactory;
    protected $table = 'trx_perencanaan_proyek';
    protected $primaryKey = 'id_perencanaan_proyek';
    protected $fillable = [
        'nama_proyek','deskripsi','pemilik_proyek','manajer_proyek','ruang_lingkup'
        ,'tanggal_mulai','target_selesai','estimasi_biaya'
        ,'nama_pemohon','jabatan_pemohon','tanggal_disiapkan'
        ,'nama','jabatan','tanggal_disetujui'
    ];
}
