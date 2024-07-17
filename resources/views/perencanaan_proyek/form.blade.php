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
                        <label for="latar_belakang_proyek" class="col-lg-2 col-lg-offset-1 control-label">Latar Belakang Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="latar_belakang_proyek" id="latar_belakang_proyek" class="form-control" required autofocus>
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
                        <label for="tanggung_jawab_tim" class="col-lg-2 col-lg-offset-1 control-label">Tanggung Jawab Anggota Tim</label>
                        <div class="col-lg-6">
                            <input type="text" name="tanggung_jawab_tim" id="tanggung_jawab_tim" class="form-control" required autofocus></input>
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
                        <label for="analisis_risiko" class="col-lg-2 col-lg-offset-1 control-label">Analisis Risiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="analisis_risiko" id="analisis_risiko" class="form-control" required autofocus></input>
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
                        <label for="fase_proyek" class="col-lg-2 col-lg-offset-1 control-label">Fase Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="fase_proyek" id="fase_proyek" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kegiatan_utama" class="col-lg-2 col-lg-offset-1 control-label">Kegiatan Utama</label>
                        <div class="col-lg-6">
                            <input type="text" name="kegiatan_utama" id="kegiatan_utama" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="milestones" class="col-lg-2 col-lg-offset-1 control-label">milestones</label>
                        <div class="col-lg-6">
                            <input type="text" name="milestones" id="milestones" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sumber_pendanaan" class="col-lg-2 col-lg-offset-1 control-label">Sumber Pendanaan</label>
                        <div class="col-lg-6">
                            <input type="text" name="sumber_pendanaan" id="sumber_pendanaan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengendalian_biaya" class="col-lg-2 col-lg-offset-1 control-label">Pengendalian Biaya</label>
                        <div class="col-lg-6">
                            <input type="text" name="pengendalian_biaya" id="pengendalian_biaya" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="standar_kualitas" class="col-lg-2 col-lg-offset-1 control-label">Standar Kualitas</label>
                        <div class="col-lg-6">
                            <input type="text" name="standar_kualitas" id="standar_kualitas" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="metriks_kualitas" class="col-lg-2 col-lg-offset-1 control-label">Metriks Kualitas</label>
                        <div class="col-lg-6">
                            <input type="text" name="metriks_kualitas" id="metriks_kualitas" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="audit_review_kualitas" class="col-lg-2 col-lg-offset-1 control-label">Audit Review Kualitas</label>
                        <div class="col-lg-6">
                            <input type="text" name="audit_review_kualitas" id="audit_review_kualitas" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rencana_komunikasi" class="col-lg-2 col-lg-offset-1 control-label">Rencana Komunikasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="rencana_komunikasi" id="rencana_komunikasi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="laporan_status" class="col-lg-2 col-lg-offset-1 control-label">Laporan Status</label>
                        <div class="col-lg-6">
                            <input type="text" name="laporan_status" id="laporan_status" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pertemuan_tim" class="col-lg-2 col-lg-offset-1 control-label">Pertemuan Tim</label>
                        <div class="col-lg-6">
                            <input type="text" name="pertemuan_tim" id="pertemuan_tim" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kebutuhan_sdm" class="col-lg-2 col-lg-offset-1 control-label">Kebutuhan SDM</label>
                        <div class="col-lg-6">
                            <input type="text" name="kebutuhan_sdm" id="kebutuhan_sdm" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kebutuhan_teknologi_komunikasi" class="col-lg-2 col-lg-offset-1 control-label">Kebutuhan Teknologi & Komunikasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="kebutuhan_teknologi_komunikasi" id="kebutuhan_teknologi_komunikasi" class="form-control" required autofocus></input>
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
