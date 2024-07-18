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
                        <label for="NamaProyek" class="col-lg-2 col-lg-offset-1 control-label">Nama Proyek</label>
                        <div class="col-lg-6">
                            <input type="text" name="NamaProyek" id="NamaProyek" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="TujuandanDeskripsi" class="col-lg-2 col-lg-offset-1 control-label">Tujuan dan Deskripsi Proyek</label>
                        <div class="col-lg-6">
                            <input type="text-area" name="TujuandanDeskripsi" id="TujuandanDeskripsi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fungsiproyekproduk" class="col-lg-2 col-lg-offset-1 control-label">Fungsi Proyek atau Produk</label>
                        <div class="col-lg-6">
                            <input type="textarea" name="fungsiproyekproduk" id="fungsiproyekproduk" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="KebutuhanFungsional" class="col-lg-2 col-lg-offset-1 control-label">Kebutuhan</label>
                        <div class="col-lg-6">
                            <input type="textarea" name="KebutuhanFungsional" id="KebutuhanFungsional" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="acc" class="col-lg-2 col-lg-offset-1 control-label">Persetujuan</label>
                        <div class="col-lg-6">
                            <select name="acc" id="acc" class="form-control" required>
                                <option value="">-- Pilih Persetujuan --</option>
                                <option value="ya">Disetujui</option>
                                <option value="tidak">Tidak Disetujui</option>
                                <option value="ditunda">Ditunda</option>
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
