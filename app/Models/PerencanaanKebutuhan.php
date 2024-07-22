<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerencanaanKebutuhan extends Model
{
    use HasFactory;

    protected $table = 'trx_perencanaan_kebutuhan';
    protected $primaryKey = 'id_perencanaan_kebutuhan';
    protected $fillable = [
        'nama_proyek','deskripsi','pemilik_proyek','manajer_proyek','stakeholders','kebutuhan_fungsional'
        ,'kebutuhan_nonfungsional','lampiran','nama_pemohon','jabatan_pemohon','tanggal_disiapkan'
        ,'nama','jabatan','tanggal_disetujui'
    ];
}
