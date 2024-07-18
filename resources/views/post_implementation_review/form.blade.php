<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_proyek" class="col-lg-2 col-lg-offset-1 control-label">Nama Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_proyek" id="nama_proyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_mulai" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Mulai</label>
                        <div class="col-lg-6">
                            <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_selesai" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Selesai</label>
                        <div class="col-lg-6">
                            <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="manajer_proyek" class="col-lg-2 col-lg-offset-1 control-label">Manajer Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="manajer_proyek" id="manajer_proyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tujuan_pir" class="col-lg-2 col-lg-offset-1 control-label">Tujuan PIR</label>
                        <div class="col-lg-6">
                            <input type="text" name="tujuan_pir" id="tujuan_pir" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-lg-2 col-lg-offset-1 control-label">Deskripsi</label>
                        <div class="col-lg-6">
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tujuan_proyek" class="col-lg-2 col-lg-offset-1 control-label">Tujuan Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="tujuan_proyek" id="tujuan_proyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ruang_lingkup_proyek" class="col-lg-2 col-lg-offset-1 control-label">Ruang Lingkup Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="ruang_lingkup_proyek" id="ruang_lingkup_proyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="waktu" class="col-lg-2 col-lg-offset-1 control-label">Waktu</label>
                        <div class="col-lg-6">
                            <input type="text" name="waktu" id="waktu" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya" class="col-lg-2 col-lg-offset-1 control-label">Biaya</label>
                        <div class="col-lg-6">
                            <input type="text" name="biaya" id="biaya" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ruang_lingkup_pencapaian" class="col-lg-2 col-lg-offset-1 control-label">Ruang Lingkup Pencapaian</label>
                        <div class="col-lg-6">
                            <input type="text" name="ruang_lingkup_pencapaian" id="ruang_lingkup_pencapaian" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fungsionalitas" class="col-lg-2 col-lg-offset-1 control-label">Fungsionalitas</label>
                        <div class="col-lg-6">
                            <input type="text" name="fungsionalitas" id="fungsionalitas" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kinerja" class="col-lg-2 col-lg-offset-1 control-label">Kinerja</label>
                        <div class="col-lg-6">
                            <input type="text" name="kinerja" id="kinerja" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keandalan" class="col-lg-2 col-lg-offset-1 control-label">Keandalan</label>
                        <div class="col-lg-6">
                            <input type="text" name="keandalan" id="keandalan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengguna" class="col-lg-2 col-lg-offset-1 control-label">Pengguna</label>
                        <div class="col-lg-6">
                            <input type="text" name="pengguna" id="pengguna" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feedback_positif" class="col-lg-2 col-lg-offset-1 control-label">Feedback Positif</label>
                        <div class="col-lg-6">
                            <input type="text" name="feedback_positif" id="feedback_positif" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feedback_negatif" class="col-lg-2 col-lg-offset-1 control-label">Feedback Negatif</label>
                        <div class="col-lg-6">
                            <input type="text" name="feedback_negatif" id="feedback_negatif" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="efisiensi" class="col-lg-2 col-lg-offset-1 control-label">Efisiensi</label>
                        <div class="col-lg-6">
                            <input type="text" name="efisiensi" id="efisiensi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Akurasi" class="col-lg-2 col-lg-offset-1 control-label">Akurasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="akurasi" id="akurasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kepuasan_pengguna" class="col-lg-2 col-lg-offset-1 control-label">Kepuasan Pengguna</label>
                        <div class="col-lg-6">
                            <input type="text" name="kepuasan_pengguna" id="kepuasan_pengguna" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="masalah" class="col-lg-2 col-lg-offset-1 control-label">Masalah</label>
                        <div class="col-lg-6">
                            <input type="text" name="masalah" id="masalah" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="solusi" class="col-lg-2 col-lg-offset-1 control-label">Solusi</label>
                        <div class="col-lg-6">
                            <input type="text" name="solusi" id="solusi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pelajaran_yang_dipetik" class="col-lg-2 col-lg-offset-1 control-label">Pelajaran Yang Dipetik</label>
                        <div class="col-lg-6">
                            <input type="text" name="pelajaran_yang_dipetik" id="pelajaran_yang_dipetik" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kesimpulan" class="col-lg-2 col-lg-offset-1 control-label">Kesimpulan</label>
                        <div class="col-lg-6">
                            <input type="text" name="kesimpulan" id="kesimpulan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rekomendasi" class="col-lg-2 col-lg-offset-1 control-label">Rekomendasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="rekomendasi" id="rekomendasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pemangku_kepentingan" class="col-lg-2 col-lg-offset-1 control-label">Pemangku Kepentingan</label>
                        <div class="col-lg-6">
                            <input type="text" name="pemangku_kepentingan" id="pemangku_kepentingan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_persetujuan" class="col-lg-2 col-lg-offset-1 control-label">Tangal Persetujuan</label>
                        <div class="col-lg-6">
                            <input type="date" name="tanggal_persetujuan" id="tanggal_persetujuan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>
