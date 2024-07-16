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
                        <label for="tujuan_dok" class="col-lg-2 col-lg-offset-1 control-label">Tujuan dokumen</label>
                        <div class="col-lg-6">
                            <input type="text" name="tujuan_dok" id="tujuan_dok" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ikhtisar" class="col-lg-2 col-lg-offset-1 control-label">Ikhtisar</label>
                        <div class="col-lg-6">
                            <input type="text" name="ikhtisar" id="ikhtisar" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="latar_belakang" class="col-lg-2 col-lg-offset-1 control-label">Latar Belakang</label>
                        <div class="col-lg-6">
                            <input type="text" name="latar_belakang" id="latar_belakang" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="konteks_bisnis" class="col-lg-2 col-lg-offset-1 control-label">Konteks Bisnis</label>
                        <div class="col-lg-6">
                            <input type="text" name="konteks_bisnis" id="konteks_bisnis" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tujuan" class="col-lg-2 col-lg-offset-1 control-label">Tujuan</label>
                        <div class="col-lg-6">
                            <input type="text" name="tujuan" id="tujuan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sasaran" class="col-lg-2 col-lg-offset-1 control-label">Sasaran</label>
                        <div class="col-lg-6">
                            <input type="text" name="sasaran" id="sasaran" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="analisis_opsi" class="col-lg-2 col-lg-offset-1 control-label">Analisis Opsi</label>
                        <div class="col-lg-6">
                            <input type="text" name="analisis_opsi" id="analisis_opsi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lingkup_fungsional" class="col-lg-2 col-lg-offset-1 control-label">Lingkup Fungsional</label>
                        <div class="col-lg-6">
                            <input type="text" name="lingkup_fungsional" id="lingkup_fungsional" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lingkup_nonfungsional" class="col-lg-2 col-lg-offset-1 control-label">Lingkup Non-Fungsional</label>
                        <div class="col-lg-6">
                            <input type="text" name="lingkup_nonfungsional" id="lingkup_nonfungsional" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="manfaat_finansial" class="col-lg-2 col-lg-offset-1 control-label">Manfaat finansial</label>
                        <div class="col-lg-6">
                            <input type="text" name="manfaat_finansial" id="manfaat_finansial" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="manfaat_nonfinansial" class="col-lg-2 col-lg-offset-1 control-label">Manfaat Non-finansial</label>
                        <div class="col-lg-6">
                            <input type="text" name="manfaat_nonfinansial" id="manfaat_nonfinansial" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_pengembangan" class="col-lg-2 col-lg-offset-1 control-label">Biaya Pengembangan</label>
                        <div class="col-lg-6">
                            <input type="text" name="biaya_pengembangan" id="biaya_pengembangan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="biaya_operasional" class="col-lg-2 col-lg-offset-1 control-label">Biaya Operasional</label>
                        <div class="col-lg-6">
                            <input type="text" name="biaya_operasional" id="biaya_operasional" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="identifikasi_risiko" class="col-lg-2 col-lg-offset-1 control-label">Identifikasi Risiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="identifikasi_risiko" id="identifikasi_risiko" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="analisis_dampak_risiko" class="col-lg-2 col-lg-offset-1 control-label">Analisis Dampak Risiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="analisis_dampak_risiko" id="analisis_dampak_risiko" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="strategi_mitigasi_risiko" class="col-lg-2 col-lg-offset-1 control-label">Strategi Mitigasi Risiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="strategi_mitigasi_risiko" id="strategi_mitigasi_risiko" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="timeline_proyek" class="col-lg-2 col-lg-offset-1 control-label">Timeline Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="timeline_proyek" id="timeline_proyek" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_awal" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Awal</label>
                        <div class="col-lg-6">
                            <input type="date" name="tgl_awal" id="tgl_awal" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_akhir" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Akhir</label>
                        <div class="col-lg-6">
                            <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kriteria_keberhasilan" class="col-lg-2 col-lg-offset-1 control-label">Kriteria Keberhasilan</label>
                        <div class="col-lg-6">
                            <input type="text" name="kriteria_keberhasilan" id="kriteria_keberhasilan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="persetujuan" class="col-lg-2 col-lg-offset-1 control-label">Persetujuan</label>
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
