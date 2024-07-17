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
                        <label for="ruang_lingkup_proyek_proyek" class="col-lg-2 col-lg-offset-1 control-label">Latar Belakang Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="ruang_lingkup_proyek_proyek" id="ruang_lingkup_proyek_proyek" class="form-control" required autofocus>
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
                            <input type="text" name="ruang_lingkup_proyek" id="ruang_lingkup_proyek" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="struktur_tim" class="col-lg-2 col-lg-offset-1 control-label">Struktur Tim</label>
                        <div class="col-lg-6">
                            <input type="text" name="struktur_tim" id="struktur_tim" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tujuan" class="col-lg-2 col-lg-offset-1 control-label">Tanggung Jawab Anggota Tim</label>
                        <div class="col-lg-6">
                            <input type="text" name="tujuan" id="tujuan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sasaran" class="col-lg-2 col-lg-offset-1 control-label">Identifikasi Risiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="sasaran" id="sasaran" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="analisis_opsi" class="col-lg-2 col-lg-offset-1 control-label">Analisis Risiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="analisis_opsi" id="analisis_opsi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lingkup_fungsional" class="col-lg-2 col-lg-offset-1 control-label">Strategi Mitigasi Risiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="lingkup_fungsional" id="lingkup_fungsional" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lingkup_nonfungsional" class="col-lg-2 col-lg-offset-1 control-label">Fase Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="lingkup_nonfungsional" id="lingkup_nonfungsional" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="manfaat_finansial" class="col-lg-2 col-lg-offset-1 control-label">Kegiatan Utama</label>
                        <div class="col-lg-6">
                            <input type="text" name="manfaat_finansial" id="manfaat_finansial" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="manfaat_nonfinansial" class="col-lg-2 col-lg-offset-1 control-label">milestones</label>
                        <div class="col-lg-6">
                            <input type="text" name="manfaat_nonfinansial" id="manfaat_nonfinansial" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_pengembangan" class="col-lg-2 col-lg-offset-1 control-label">Sumber Pendanaan</label>
                        <div class="col-lg-6">
                            <input type="text" name="biaya_pengembangan" id="biaya_pengembangan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_operasional" class="col-lg-2 col-lg-offset-1 control-label">Pengendalian Biaya</label>
                        <div class="col-lg-6">
                            <input type="text" name="biaya_operasional" id="biaya_operasional" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="identifikasi_risiko" class="col-lg-2 col-lg-offset-1 control-label">Standar Kualitas</label>
                        <div class="col-lg-6">
                            <input type="text" name="identifikasi_risiko" id="identifikasi_risiko" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="analisis_dampak_risiko" class="col-lg-2 col-lg-offset-1 control-label">Metriks Kualitas</label>
                        <div class="col-lg-6">
                            <input type="text" name="analisis_dampak_risiko" id="analisis_dampak_risiko" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="strategi_mitigasi_risiko" class="col-lg-2 col-lg-offset-1 control-label">Audit Review Kualitas</label>
                        <div class="col-lg-6">
                            <input type="text" name="strategi_mitigasi_risiko" id="strategi_mitigasi_risiko" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="timeline_proyek" class="col-lg-2 col-lg-offset-1 control-label">Rencana Komunikasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="timeline_proyek" id="timeline_proyek" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_awal" class="col-lg-2 col-lg-offset-1 control-label">Laporan Status</label>
                        <div class="col-lg-6">
                            <input type="text" name="tgl_awal" id="tgl_awal" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_akhir" class="col-lg-2 col-lg-offset-1 control-label">Pertemuan Tim</label>
                        <div class="col-lg-6">
                            <input type="text" name="tgl_akhir" id="tgl_akhir" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kriteria_keberhasilan" class="col-lg-2 col-lg-offset-1 control-label">Kebutuhan SDM</label>
                        <div class="col-lg-6">
                            <input type="text" name="kriteria_keberhasilan" id="kriteria_keberhasilan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="persetujuan" class="col-lg-2 col-lg-offset-1 control-label">Kebutuhan Teknologi & Komunikasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="persetujuan" id="persetujuan" class="form-control" required autofocus></input>
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
