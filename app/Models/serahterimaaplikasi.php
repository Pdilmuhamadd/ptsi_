<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serahterimaaplikasi extends Model
{
    use HasFactory;

    protected $table = 'trx_serah_terima_aplikasi';
    protected $primaryKey = 'id_serah_terima_aplikasi';
    protected $fillable = [
        'hari', 'tanggal', 'deskripsi', 'lokasi', 'nama_aplikasi', 'no_permintaan', 'keterangan', 'yang_menyerahkan', 'penerima'
    ];
}
