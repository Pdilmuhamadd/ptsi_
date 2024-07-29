<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersetujuanPengembangan extends Model
{
    use HasFactory;

    protected $table = 'trx_persetujuan_pengembangan';
    protected $primaryKey = 'id_persetujuan_pengembangan';
    protected $guarded = [];
}
