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
                        <label for="Nama_Proyek" class="col-lg-2 col-lg-offset-1 control-label">Nama Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="Nama_Proyek" id="Nama_Proyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Deskripsi_Proyek" class="col-lg-2 col-lg-offset-1 control-label">Deskripsi Proyek</label>
                        <div class="col-lg-6">
                            <input type="text-area" name="Deskripsi_Proyek" id="Deskripsi_Proyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ManajerProyek" class="col-lg-2 col-lg-offset-1 control-label">Manajer Proyek</label>
                        <div class="col-lg-6">
                            <input type="textarea" name="ManajerProyek" id="ManajerProyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Kebutuhan_Fungsi" class="col-lg-2 col-lg-offset-1 control-label">Kebutuhan Fungsional</label>
                        <div class="col-lg-6">
                            <input type="textarea" name="Kebutuhan_Fungsi" id="Kebutuhan_Fungsi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambaran_arsitektur" class="col-lg-2 col-lg-offset-1 control-label">Gambaran Arsitektur Sistem</label>
                        <div class="col-lg-6">
                            <input type="textarea" name="gambaran_arsitektur" id="gambaran_arsitektur" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="detil_arsitektur" class="col-lg-2 col-lg-offset-1 control-label">Detail Arsitektur Sistem</label>
                        <div class="col-lg-6">
                            <input type="textarea" name="detil_arsitektur" id="detil_arsitektur" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lampiran_mockup" class="col-lg-2 col-lg-offset-1 control-label">Lampiran Mockup (Link canva, figma, atau lainnya)</label>
                        <div class="col-lg-6">
                            <input type="textarea" name="lampiran_mockup" id="lampiran_mockup" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_pemohon" class="col-lg-2 col-lg-offset-1 control-label">Nama Pemohon</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_pemohon" id="nama_pemohon" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan_pemohon" class="col-lg-2 col-lg-offset-1 control-label">Jabatan Pemohon</label>
                        <div class="col-lg-6">
                            <input type="text" name="jabatan_pemohon" id="jabatan_pemohon" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Tanggal_disiapkan" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Disiapkan</label>
                        <div class="col-lg-6">
                            <input type="date" name="Tanggal_disiapkan" id="Tanggal_disiapkan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-lg-2 col-lg-offset-1 control-label">Nama</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-lg-2 col-lg-offset-1 control-label">Jabatan</label>
                        <div class="col-lg-6">
                            <input type="text" name="jabatan" id="jabatan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_disetujui" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Disetujui</label>
                        <div class="col-lg-6">
                            <input type="date" name="tanggal_disetujui" id="tanggal_disetujui" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-lg-2 col-lg-offset-1 control-label">Persetujuan</label>
                        <div class="col-lg-6">
                            <select name="status" id="status" class="form-control" required>
                                <option value="">-- Pilih Persetujuan --</option>
                                <option value="Disetujui">Disetujui</option>
                                <option value="Tidak Disetujui">Tidak Disetujui</option>
                                <option value="Ditunda">Ditunda</option>
                            </select>
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