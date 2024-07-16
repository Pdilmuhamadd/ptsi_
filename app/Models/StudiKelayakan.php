<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudiKelayakan extends Model
{
    use HasFactory;

    protected $table = 'trx_studi_kelayakan';

    protected $fillable = [
        'tujuan_dokumen', 'ikhtisar', 'latar_belakang', 'konteks_bisnis', 'tujuan',
        'sasaran', 'analisis_opsi', 'lingkup_fungsional', 'lingkup_nonfungsional',
        'manfaat_finansial', 'manfaat_nonfinansial', 'biaya_pengembangan', 'biaya_operasional',
        'identifikasi_risiko', 'analisis_dampak_risiko', 'strategi_mitigasi_risiko',
        'tgl_awal', 'tgl_akhir', 'kriteria_keberhasilan', 'persetujuan'
    ];
}
