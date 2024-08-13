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
        'nomor_proyek','nama_aplikasi','jenis_aplikasi','unit_pemilik','kebutuhan_nonfungsi','lokasi_pengujian','tanggal_pengujian','manual_book', ''
        'lampiran','nama_pemohon','jabatan_pemohon','tanggal_disiapkan','nama_penyetuju','jabatan','tanggal_disetujui'
    ];
}
