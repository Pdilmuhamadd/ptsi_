<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{ route('user_acceptance_testing.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                        <label for="nama_aplikasi" class="col-lg-2 col-lg-offset-1 control-label">Nama Aplikasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_aplikasi" id="nama_aplikasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_aplikasi" class="col-lg-2 col-lg-offset-1 control-label">Jenis Aplikasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="jenis_aplikasi" id="jenis_aplikasi" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="kebutuhan_fungsional" class="col-lg-2 col-lg-offset-1 control-label">Kebutuhan Fungsional</label>
                        <div class="col-lg-6">
                            <input type="textarea" name="kebutuhan_fungsional" id="kebutuhan_fungsional" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unit_pemilik_proses_bisnis" class="col-lg-2 col-lg-offset-1 control-label">Unit Pemilik Proses Bisnis</label>
                        <div class="col-lg-6">
                            <input type="text" name="unit_pemilik_proses_bisnis" id="unit_pemilik_proses_bisnis" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi_pengujian" class="col-lg-2 col-lg-offset-1 control-label">Lokasi Pengujian</label>
                        <div class="col-lg-6">
                            <input type="text" name="lokasi_pengujian" id="lokasi_pengujian" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_pengujian" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Pengujian</label>
                        <div class="col-lg-6">
                            <input type="text" name="tgl_pengujian" id="tgl_pengujian" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="manual_book" class="col-lg-2 col-lg-offset-1 control-label">Manual Book</label>
                        <div class="col-lg-6">
                            <input type="text" name="manual_book" id="manual_book" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_penyusun" class="col-lg-2 col-lg-offset-1 control-label">Nama Penyusun</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_penyusun" id="nama_penyusun" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan_penyusun" class="col-lg-2 col-lg-offset-1 control-label">Jabatan Penyusun</label>
                        <div class="col-lg-6">
                            <input type="text" name="jabatan_penyusun" id="jabatan_penyusun" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_disusun" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Disusun</label>
                        <div class="col-lg-6">
                            <input type="date" name="tgl_disusun" id="tgl_disusun" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_penyetuju" class="col-lg-2 col-lg-offset-1 control-label">Nama Penyetuju</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_penyetuju" id="nama_penyetuju" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan_penyetuju" class="col-lg-2 col-lg-offset-1 control-label">Jabatan Penyetuju</label>
                        <div class="col-lg-6">
                            <input type="text" name="jabatan_penyetuju" id="jabatan_penyetuju" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_disetujui" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Disetujui</label>
                        <div class="col-lg-6">
                            <input type="date" name="tgl_disetujui" id="tgl_disetujui" class="form-control" required autofocus></input>
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