<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisKebutuhan extends Model
{
    use HasFactory;

    
    protected $table = 'trx_analisis_kebutuhan';

    protected $fillable = [
        'NamaProyek', 'TujuandanDeskripsi', 'fungsiproyekproduk',  'KebutuhanFungsional',  'acc'
    ];
}
