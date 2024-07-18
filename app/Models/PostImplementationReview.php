<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImplementationReview extends Model
{
    use HasFactory;

    protected $table = 'trx_post_implementation_review';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_proyek','tgl_mulai','tgl_selesai','manajer_proyek','tujuan_pir',
        'deskripsi','tujuan_proyek','ruang_lingkup_proyek','waktu','biaya','ruang_lingkup_pencapaian',
        'fungsionalitas','kinerja','keandalan','pengguna','feedback_positif','feedback_negatif','efisiensi',
        'akurasi','kepuasan_pengguna','masalah','solusi','pelajaran_yang_dipetik','kesimpulan',
        'rekomendasi','pemangku_kepentingan','tanggal_persetujuan'
    ];
}
