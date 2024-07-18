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
                        <label for="tujuan" class="col-lg-2 col-lg-offset-1 control-label">Tujuan</label>
                        <div class="col-lg-6">
                            <input type="text" name="tujuan" id="tujuan" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ruang_lingkup" class="col-lg-2 col-lg-offset-1 control-label">Ruang Lingkup</label>
                        <div class="col-lg-6">
                            <input type="text" name="ruang_lingkup" id="ruang_lingkup" class="form-control" required autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="definisi_akronim_singkatan" class="col-lg-2 col-lg-offset-1 control-label">Definisi, Akronim, & Singkatan</label>
                        <div class="col-lg-6">
                            <input type="text" name="definisi_akronim_singkatan" id="definisi_akronim_singkatan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="referensi" class="col-lg-2 col-lg-offset-1 control-label">Referensi</label>
                        <div class="col-lg-6">
                            <input type="text" name="referensi" id="referensi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambaran_dokumen" class="col-lg-2 col-lg-offset-1 control-label">Gambaran Dokumen</label>
                        <div class="col-lg-6">
                            <input type="text" name="gambaran_dokumen" id="gambaran_dokumen" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi_sistem" class="col-lg-2 col-lg-offset-1 control-label">Deskripsi Sistem</label>
                        <div class="col-lg-6">
                            <input type="text" name="deskripsi_sistem" id="deskripsi_sistem" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lingkungan_operasional" class="col-lg-2 col-lg-offset-1 control-label">Lingkungan Operasional</label>
                        <div class="col-lg-6">
                            <input type="text" name="lingkungan_operasional" id="lingkungan_operasional" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="diagram_arsitektur" class="col-lg-2 col-lg-offset-1 control-label">Diagram Arsitektur</label>
                        <div class="col-lg-6">
                            <input type="text" name="diagram_arsitektur" id="diagram_arsitektur" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="komponen_sistem" class="col-lg-2 col-lg-offset-1 control-label">Komponen Sistem</label>
                        <div class="col-lg-6">
                            <input type="text" name="komponen_sistem" id="komponen_sistem" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hubungan_antar_komponen" class="col-lg-2 col-lg-offset-1 control-label">Hubungan Antar Komponen</label>
                        <div class="col-lg-6">
                            <input type="text" name="hubungan_antar_komponen" id="hubungan_antar_komponen" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desain_modul" class="col-lg-2 col-lg-offset-1 control-label">Desain Modul</label>
                        <div class="col-lg-6">
                            <input type="text" name="desain_modul" id="desain_modul" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="diagram_kelas" class="col-lg-2 col-lg-offset-1 control-label">Diagram Kelas</label>
                        <div class="col-lg-6">
                            <input type="text" name="diagram_kelas" id="diagram_kelas" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="diagram_urutan" class="col-lg-2 col-lg-offset-1 control-label">Diagram Urutan</label>
                        <div class="col-lg-6">
                            <input type="text" name="diagram_urutan" id="diagram_urutan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="model_data" class="col-lg-2 col-lg-offset-1 control-label">Model Data</label>
                        <div class="col-lg-6">
                            <input type="text" name="model_data" id="model_data" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="skema_basis_data" class="col-lg-2 col-lg-offset-1 control-label">Skema Basis Data</label>
                        <div class="col-lg-6">
                            <input type="text" name="skema_basis_data" id="skema_basis_data" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="aturan_integritas" class="col-lg-2 col-lg-offset-1 control-label">Aturan Integritas</label>
                        <div class="col-lg-6">
                            <input type="text" name="aturan_integritas" id="aturan_integritas" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prototipe_antarmuka" class="col-lg-2 col-lg-offset-1 control-label">Prototipe Antarmuka</label>
                        <div class="col-lg-6">
                            <input type="text" name="prototipe_antarmuka" id="prototipe_antarmuka" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="navigasi_antarmuka" class="col-lg-2 col-lg-offset-1 control-label">Navigasi Antarmuka</label>
                        <div class="col-lg-6">
                            <input type="text" name="navigasi_antarmuka" id="navigasi_antarmuka" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="elemen_ui" class="col-lg-2 col-lg-offset-1 control-label">Elemen UI</label>
                        <div class="col-lg-6">
                            <input type="text" name="elemen_ui" id="elemen_ui" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mekanisme_keamanan" class="col-lg-2 col-lg-offset-1 control-label">Mekanisme Keamanan</label>
                        <div class="col-lg-6">
                            <input type="text" name="mekanisme_keamanan" id="mekanisme_keamanan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="protokol_keamanan" class="col-lg-2 col-lg-offset-1 control-label">Protokol Keamanan</label>
                        <div class="col-lg-6">
                            <input type="text" name="protokol_keamanan" id="protokol_keamanan" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="persyaratan_kinerja" class="col-lg-2 col-lg-offset-1 control-label">Persyaratan Kinerja</label>
                        <div class="col-lg-6">
                            <input type="text" name="persyaratan_kinerja" id="persyaratan_kinerja" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="strategi_kinerja" class="col-lg-2 col-lg-offset-1 control-label">Strategi Kinerja</label>
                        <div class="col-lg-6">
                            <input type="text" name="strategi_kinerja" id="strategi_kinerja" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="persyaratan_hardware" class="col-lg-2 col-lg-offset-1 control-label">Persyaratan Hardware</label>
                        <div class="col-lg-6">
                            <input type="text" name="persyaratan_hardware" id="persyaratan_hardware" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="persyaratan_software" class="col-lg-2 col-lg-offset-1 control-label">Persyaratan Software</label>
                        <div class="col-lg-6">
                            <input type="text" name="persyaratan_software" id="persyaratan_software" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="strategi_implementasi" class="col-lg-2 col-lg-offset-1 control-label">Strategi Implementasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="strategi_implementasi" id="strategi_implementasi" class="form-control" required autofocus></input>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="step_implementasi" class="col-lg-2 col-lg-offset-1 control-label">Step Implementasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="step_implementasi" id="step_implementasi" class="form-control" required autofocus></input>
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
