<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{ route('serah_terima_aplikasi.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                        <label for="hari" class="col-lg-2 col-lg-offset-1 control-label">Hari</label>
                        <div class="col-lg-6">
                            <input type="text" name="hari" id="hari" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-lg-2 col-lg-offset-1 control-label">Tanggal</label>
                        <div class="col-lg-6">
                            <input type="date" name="tanggal" id="tanggal" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-lg-2 col-lg-offset-1 control-label">Deskripsi</label>
                        <div class="col-lg-6">
                            <textarea name="deskripsi" id="deskripsi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="lokasi" class="col-lg-2 col-lg-offset-1 control-label">Lokasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="lokasi" id="lokasi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_aplikasi" class="col-lg-2 col-lg-offset-1 control-label">Nama Aplikasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_aplikasi" id="nama_aplikasi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_permintaan" class="col-lg-2 col-lg-offset-1 control-label">Nomor Permintaan</label>
                        <div class="col-lg-6">
                            <input type="text" name="no_permintaan" id="no_permintaan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-lg-2 col-lg-offset-1 control-label">Keterangan</label>
                        <div class="col-lg-6">
                            <input type="text" name="keterangan" id="keterangan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pemberi" class="col-lg-2 col-lg-offset-1 control-label">Nama Pemberi</label>
                        <div class="col-lg-6">
                            <input type="text" name="pemberi" id="pemberi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penerima" class="col-lg-2 col-lg-offset-1 control-label">Nama Penerima</label>
                        <div class="col-lg-6">
                            <input type="text" name="penerima" id="penerima" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nik_pemberi" class="col-lg-2 col-lg-offset-1 control-label">NIK Pemberi</label>
                        <div class="col-lg-6">
                            <input type="text" name="nik_pemberi" id="nik_pemberi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nik_penerima" class="col-lg-2 col-lg-offset-1 control-label">NIK Penerima</label>
                        <div class="col-lg-6">
                            <input type="text" name="nik_penerima" id="nik_penerima" class="form-control">
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
