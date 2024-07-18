<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesainSistem extends Model
{
    use HasFactory;

    protected $table = 'trx_desain_sistem';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tujuan','ruang_lingkup','definisi_akronim_singkatan','referensi',
        'tanggung_jawab_anggota_tim','gambaran_dokumen','deskripsi_sistem','lingkungan_operasional','diagram_arsitektur','komponen_sistem','hubungan_antar_komponen',
        'desain_modul','diagram_kelas','diagram_urutan','model_data','skema_basis_data','aturan_integritas',
        'prototipe_antarmuka','navigasi_antarmuka','elemen_ui','mekanisme_keamanan','protokol_keamanan',
        'persyaratan_kinerja','strategi_kinerja','persyaratan_hardware','persyaratan_software','strategi_implementasi','step_implementasi',
    ];
}
