<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog modal-lg" role="document">
        <form class="form-horizontal">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nomor_dokumen" class="col-lg-2 col-lg-offset-1 control-label">Nomor Dokumen</label>
                        <div class="col-lg-6">
                            <input type="text" name="nomor_dokumen" id="nomor_dokumen" class="form-control" value="{{ $data->nomor_dokumen }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="latar_belakang" class="col-lg-2 col-lg-offset-1 control-label">Latar Belakang</label>
                        <div class="col-lg-6">
                            <textarea name="latar_belakang" id="latar_belakang" class="form-control" disabled>{{ $data->latar_belakang }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tujuan" class="col-lg-2 col-lg-offset-1 control-label">Tujuan</label>
                        <div class="col-lg-6">
                            <textarea name="tujuan" id="tujuan" class="form-control" disabled>{{ $data->tujuan }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="target_implementasi_sistem" class="col-lg-2 col-lg-offset-1 control-label">Target Implementasi Sistem</label>
                        <div class="col-lg-6">
                            <textarea name="target_implementasi_sistem" id="target_implementasi_sistem" class="form-control" rows="4" cols="50" disabled>{{ $data->target_implementasi_sistem }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fungsi_sistem_informasi" class="col-lg-2 col-lg-offset-1 control-label">Fungsi-fungsi Sistem Informasi</label>
                        <div class="col-lg-6">
                            <textarea name="fungsi_sistem_informasi" id="fungsi_sistem_informasi" class="form-control" disabled>{{ $data->fungsi_sistem_informasi }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_aplikasi" class="col-lg-2 col-lg-offset-1 control-label">Jenis Aplikasi</label>
                        <div class="col-lg-6">
                            <select name="jenis_aplikasi" id="jenis_aplikasi" class="form-control" disabled>
                                <option value="mobile" {{ $data->jenis_aplikasi == 'mobile' ? 'selected' : '' }}>Mobile</option>
                                <option value="dekstop" {{ $data->jenis_aplikasi == 'dekstop' ? 'selected' : '' }}>Dekstop</option>
                                <option value="web" {{ $data->jenis_aplikasi == 'web' ? 'selected' : '' }}>Web</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengguna" class="col-lg-2 col-lg-offset-1 control-label">Pengguna</label>
                        <div class="col-lg-6">
                            <select name="pengguna" id="pengguna" class="form-control" disabled>
                                <option value="internal" {{ $data->pengguna == 'internal' ? 'selected' : '' }}>Internal</option>
                                <option value="eksternal" {{ $data->pengguna == 'eksternal' ? 'selected' : '' }}>Eksternal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uraian_permintaan_tambahan" class="col-lg-2 col-lg-offset-1 control-label">Uraian Permintaan Tambahan/Khusus</label>
                        <div class="col-lg-6">
                            <textarea name="uraian_permintaan_tambahan" id="uraian_permintaan_tambahan" class="form-control" disabled>{{ $data->uraian_permintaan_tambahan }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lampiran" class="col-lg-2 col-lg-offset-1 control-label">Lampiran</label>
                        <div class="col-lg-6">
                            <a href="{{ $data->lampiran_url }}" class="form-control" disabled>Download Lampiran</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_pemohon" class="col-lg-2 col-lg-offset-1 control-label">Nama Pemohon</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_pemohon" id="nama_pemohon" class="form-control" value="{{ $data->nama_pemohon }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan_pemohon" class="col-lg-2 col-lg-offset-1 control-label">Jabatan Pemohon</label>
                        <div class="col-lg-6">
                            <input type="text" name="jabatan_pemohon" id="jabatan_pemohon" class="form-control" value="{{ $data->jabatan_pemohon }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_disiapkan" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Disiapkan</label>
                        <div class="col-lg-6">
                            <input type="date" name="tanggal_disiapkan" id="tanggal_disiapkan" class="form-control" value="{{ $data->tanggal_disiapkan }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-lg-2 col-lg-offset-1 control-label">Nama</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-lg-2 col-lg-offset-1 control-label">Jabatan Penyetuju</label>
                        <div class="col-lg-6">
                            <select name="jabatan" id="jabatan" class="form-control" disabled>
                                <option value="kepala_sp" {{ $data->jabatan == 'kepala_sp' ? 'selected' : '' }}>Kepala SP</option>
                                <option value="vp" {{ $data->jabatan == 'vp' ? 'selected' : '' }}>VP</option>
                                <option value="kepala_divisi" {{ $data->jabatan == 'kepala_divisi' ? 'selected' : '' }}>Kepala Divisi</option>
                                <option value="kepala_cabang" {{ $data->jabatan == 'kepala_cabang' ? 'selected' : '' }}>Kepala Cabang</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_disetujui" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Disetujui</label>
                        <div class="col-lg-6">
                            <input type="date" name="tanggal_disetujui" id="tanggal_disetujui" class="form-control" value="{{ $data->tanggal_disetujui }}" disabled>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Tutup</button>
                </div>
            </div>
        </form>
    </div>
</div>
