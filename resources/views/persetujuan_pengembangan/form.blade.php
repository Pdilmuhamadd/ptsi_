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
                        <label for="nomor_proyek" class="col-lg-2 col-lg-offset-1 control-label">Nomor Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="nomor_proyek" id="nomor_proyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_proyek" class="col-lg-2 col-lg-offset-1 control-label">Nama Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_proyek" id="nama_proyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="deskripsi" class="col-lg-2 col-lg-offset-1 control-label">Deskripsi Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status_persetujuan" class="col-lg-2 col-lg-offset-1 control-label">Status Persetujuan</label>
                        <div class="col-lg-6">
                            <select name="status" id="status" class="form-control" required>
                                <option selected>-- Pilih Persetujuan --</option>
                                <option value="disetujui">Disetujui</option>
                                <option value="tidak_disetujui">Ditolak</option>
                                <option value="ditunda">Direvisi</option>
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alasan_persetujuan" class="col-lg-2 col-lg-offset-1 control-label">Alasan Persetujuan</label>
                        <div class="col-lg-6">
                            <input type="text" name="alasan_persetujuan" id="alasan_persetujuan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namapemohon" class="col-lg-2 col-lg-offset-1 control-label">Nama Pemohon</label>
                        <div class="col-lg-6">
                            <input type="text" name="namapemohon" id="namapemohon" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namapeninjau" class="col-lg-2 col-lg-offset-1 control-label">Nama Peninjau</label>
                        <div class="col-lg-6">
                            <input type="text" name="namapeninjau" id="namapeninjau" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatanpeninjau" class="col-lg-2 col-lg-offset-1 control-label">Jabatan Peninjau</label>
                        <div class="col-lg-6">
                            <input type="file" name="jabatanpeninjau" id="jabatanpeninjau" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namapenyetuju" class="col-lg-2 col-lg-offset-1 control-label">Disetujui Oleh</label>
                        <div class="col-lg-6">
                            <input type="file" name="namapenyetuju" id="namapenyetuju" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
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
