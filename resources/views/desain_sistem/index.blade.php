@extends('layouts.master')

@section('title')
    Daftar Desain Sistem
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Desain Sistem</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="addForm('{{ route('desain_sistem.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
            </div>
            <div class="box-body table-responsive">
                <form action="" method="post" class="form-desain-sistem">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>id</th>
                            <th>Tujuan</th>
                            <th>Ruang Lingkup</th>
                            <th>Definisi, Akronim, & Singkatan</th>
                            <th>Referensi</th>
                            <th>Gambaran Dokumen</th>
                            <th>Deskripsi Sistem</th>
                            <th>Lingkungan Operasional</th>
                            <th>Diagram Arsitektur</th>
                            <th>Komponen Sistem</th>
                            <th>Hubungan Antar Komponen</th>
                            <th>Desain Modul</th>
                            <th>Diagram Kelas</th>
                            <th>Diagram Urutan</th>
                            <th>Model Data</th>
                            <th>Skema Basis Data</th>
                            <th>Aturan Integritas</th>
                            <th>Prototipe Antarmuka</th>
                            <th>Navigasi Antarmuka</th>
                            <th>Elemen UI</th>
                            <th>Mekanisme Keamanan</th>
                            <th>Protokol Keamanan</th>
                            <th>Persyaratan Kinerja</th>
                            <th>Strategi Kinerja</th>
                            <th>Persyaratan Perangkat Keras</th>
                            <th>Persyaratan Perangkat Lunak</th>
                            <th>Strategi Implementasi</th>
                            <th>Langkah-Langkah Implementasi</th>
                            <th width="15%"><i class="fa fa-cog"></i>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('desain_sistem.form')
@endsection

@push('scripts')
<script>
    let table;

    $(function () {
        table = $('.table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('desain_sistem.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'id'},
                {data: 'tujuan'},
                {data: 'ruang_lingkup'},
                {data: 'definisi_akronim_singkatan'},
                {data: 'referensi'},
                {data: 'gambaran_dokumen'},
                {data: 'deskripsi_sistem'},
                {data: 'lingkungan_operasional'},
                {data: 'diagram_arsitektur'},
                {data: 'komponen_sistem'},
                {data: 'hubungan_antar_komponen'},
                {data: 'desain_modul'},
                {data: 'diagram_kelas'},
                {data: 'diagram_urutan'},
                {data: 'model_data'},
                {data: 'skema_basis_data'},
                {data: 'aturan_integritas'},
                {data: 'prototipe_antarmuka'},
                {data: 'navigasi_antarmuka'},
                {data: 'elemen_ui'},
                {data: 'mekanisme_keamanan'},
                {data: 'protokol_keamanan'},
                {data: 'persyaratan_kinerja'},
                {data: 'strategi_kinerja'},
                {data: 'persyaratan_hardware'},
                {data: 'persyaratan_software'},
                {data: 'strategi_implementasi'},
                {data: 'step_implementasi'},
                {data: 'aksi', searchable: false, sortable: false},
            ],
        });

        $('#modal-form').validator().on('submit', function (e) {
            if (!e.preventDefault()) {
                $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                    .done((response) => {
                        $('#modal-form').modal('hide');
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menyimpan data');
                        return;
                    });
            }
        });
    });


    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Desain Sistem');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=tujuan]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Desain Sistem');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=tujuan]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=tujuan]').val(response.tujuan);
                $('#modal-form [name=ruang_lingkup]').val(response.ruang_lingkup);
                $('#modal-form [name=definisi_akronim_singkatan]').val(response.definisi_akronim_singkatan);
                $('#modal-form [name=referensi]').val(response.referensi);
                $('#modal-form [name=gambaran_dokumen]').val(response.gambaran_dokumen);
                $('#modal-form [name=deskripsi_sistem]').val(response.deskripsi_sistem);
                $('#modal-form [name=lingkungan_operasional]').val(response.lingkungan_operasional);
                $('#modal-form [name=diagram_arsitektur]').val(response.diagram_arsitektur);
                $('#modal-form [name=komponen_sistem]').val(response.komponen_sistem);
                $('#modal-form [name=hubungan_antar_komponen]').val(response.hubungan_antar_komponen);
                $('#modal-form [name=desain_modul]').val(response.desain_modul);
                $('#modal-form [name=diagram_kelas]').val(response.diagram_kelas);
                $('#modal-form [name=diagram_urutan]').val(response.diagram_urutan);
                $('#modal-form [name=model_data]').val(response.model_data);
                $('#modal-form [name=skema_basis_data]').val(response.skema_basis_data);
                $('#modal-form [name=aturan_integritas]').val(response.aturan_integritas);
                $('#modal-form [name=prototipe_antarmuka]').val(response.prototipe_antarmuka);
                $('#modal-form [name=navigasi_antarmuka]').val(response.navigasi_antarmuka);
                $('#modal-form [name=elemen_ui]').val(response.elemen_ui);
                $('#modal-form [name=mekanisme_keamanan]').val(response.mekanisme_keamanan);
                $('#modal-form [name=protokol_keamanan]').val(response.protokol_keamanan);
                $('#modal-form [name=persyaratan_kinerja]').val(response.persyaratan_kinerja);
                $('#modal-form [name=strategi_kinerja]').val(response.strategi_kinerja);
                $('#modal-form [name=persyaratan_hardware]').val(response.persyaratan_hardware);
                $('#modal-form [name=persyaratan_software]').val(response.persyaratan_software);
                $('#modal-form [name=strategi_implementasi]').val(response.strategi_implementasi);
                $('#modal-form [name=step_implementasi]').val(response.step_implementasi);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }

    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
        }
    }
</script>
@endpush
