<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persetujuanpengembangan extends Model
{
    use HasFactory;

    protected $table = 'trx_persetujuan_pengembangan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nomer_proyek','nama_proyek','deskripsi','status_persetujuan', 'namapemohon', 'namapeninjau', 'jabatanpeninjau', 'namapenyetuju'
    ];
}
