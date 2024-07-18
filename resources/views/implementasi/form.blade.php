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
                        <label for="manajer_proyek" class="col-lg-2 col-lg-offset-1 control-label">Manajer Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="manajer_proyek" id="manajer_proyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tim_implementasi" class="col-lg-2 col-lg-offset-1 control-label">Tim Implementasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="tim_implementasi" id="tim_implementasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_laporan_implementasi" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Laporan Implementasi</label>
                        <div class="col-lg-6">
                            <input type="date" name="tgl_laporan_implementasi" id="tgl_laporan_implementasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tujuan_implementasi" class="col-lg-2 col-lg-offset-1 control-label">Tujuan Implementasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="tujuan_implementasi" id="tujuan_implementasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lingkup_implementasi" class="col-lg-2 col-lg-offset-1 control-label">Lingkup Implementasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="lingkup_implementasi" id="lingkup_implementasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="aktivitas_implementasi" class="col-lg-2 col-lg-offset-1 control-label">Aktivitas Implementasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="aktivitas_implementasi" id="aktivitas_implementasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_aktivitas_implementasi" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Aktivitas Implementasi</label>
                        <div class="col-lg-6">
                            <input type="date" name="tgl_aktivitas_implementasi" id="tgl_aktivitas_implementasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi_aktivitas_implementasi" class="col-lg-2 col-lg-offset-1 control-label">Deskripsi Aktivitas Implementasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="deskripsi_aktivitas_implementasi" id="deskripsi_aktivitas_implementasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status_aktivitas" class="col-lg-2 col-lg-offset-1 control-label">Status Aktivitas</label>
                        <div class="col-lg-6">
                            <input type="text" name="status_aktivitas" id="status_aktivitas" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="risiko" class="col-lg-2 col-lg-offset-1 control-label">Risiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="risiko" id="risiko" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi_risiko" class="col-lg-2 col-lg-offset-1 control-label">DeskripsiRisiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="deskripsi_risiko" id="deskripsi_risiko" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mitigasi" class="col-lg-2 col-lg-offset-1 control-label">Mitigasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="mitigasi" id="mitigasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status_risiko" class="col-lg-2 col-lg-offset-1 control-label">Status Risiko</label>
                        <div class="col-lg-6">
                            <input type="text" name="status_risiko" id="status_risiko" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="masalah_ditemui" class="col-lg-2 col-lg-offset-1 control-label">Masalah Ditemui</label>
                        <div class="col-lg-6">
                            <input type="text" name="masalah_ditemui" id="masalah_ditemui" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi_masalah" class="col-lg-2 col-lg-offset-1 control-label">Deskripsi Masalah</label>
                        <div class="col-lg-6">
                            <input type="text" name="deskripsi_masalah" id="deskripsi_masalah" class="form-control" required autofocus>
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
                        <label for="status_masalah" class="col-lg-2 col-lg-offset-1 control-label">Status Masalah</label>
                        <div class="col-lg-6">
                            <input type="text" name="status_masalah" id="status_masalah" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rencana_tindak_lanjut" class="col-lg-2 col-lg-offset-1 control-label">Rencana Tindak Lanjut</label>
                        <div class="col-lg-6">
                            <input type="text" name="rencana_tindak_lanjut" id="rencana_tindak_lanjut" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dokumentasi" class="col-lg-2 col-lg-offset-1 control-label">Dokumentasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="dokumentasi" id="dokumentasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rencana_dukungan" class="col-lg-2 col-lg-offset-1 control-label">Rencana Dukungan</label>
                        <div class="col-lg-6">
                            <input type="text" name="rencana_dukungan" id="rencana_dukungan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kriteria_kesuksesan" class="col-lg-2 col-lg-offset-1 control-label">Kriteria Kesuksesan</label>
                        <div class="col-lg-6">
                            <input type="text" name="kriteria_kesuksesan" id="kriteria_kesuksesan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="persetujuan" class="col-lg-2 col-lg-offset-1 control-label">Persetujuan</label>
                        <div class="col-lg-6">
                            <input type="text" name="persetujuan" id="persetujuan" class="form-control" required autofocus>
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
