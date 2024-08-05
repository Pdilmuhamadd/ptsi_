<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerencanaanProyek extends Model
{
    use HasFactory;
    protected $table = 'trx_perencanaan_proyek';
    protected $primaryKey = 'id_perencanaan_proyek';
    protected $guarded = [];
}
