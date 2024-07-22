@extends('layouts.master')

@section('title')
    Daftar Analisis dan Desain
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Analisis dan Desain</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
        <div class="box-header with-border">
            <button onclick="addForm('{{ route('analisis_desain.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
        </div>
            <div class="box-body table-responsive">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>ID Analisis dan Desain</th>
                            <th>Nama Proyek</th>
                            <th>Deskripsi Proyek</th>
                            <th>Manajer Proyek</th>
                            <th>Kebutuhan Fungsional</th>
                            <th>Gambaran Arsitektur Sistem</th>
                            <th>Detail Arsitektur Sistem</th>
                            <th>Lampiran Mockup Sistem (Link canva, Figma, atau lainnya)</th>
                            <th>Nama Pemohon</th>
                            <th>Jabatan Pemohon</th>
                            <th>Tanggal Disiapkan</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Tanggal Disetujui</th>
                            <th>Status</th>
                            <th width="15%"><i class="fa fa-cog"></i></th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('analisis_desain.form')
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
            url: '{{ route('analisis_desain.data') }}',
        },
        columns: [
            {data: 'DT_RowIndex', searchable: false, sortable: false},
            {data: 'id_analisis_desain'},
            {data: 'nama_proyek'},
            {data: 'deskripsi_proyek'},
            {data: 'manajer_proyek'},
            {data: 'kebutuhan_fungsi'},
            {data: 'gambaran_arsitektur'},
            {data: 'detil_arsitektur'},
            {data: 'lampiran_mockup'},
            {data: 'nama_pemohon'},
            {data: 'jabatan_pemohon'},
            {data: 'tanggal_disiapkan'},
            {data: 'nama'},
            {data: 'jabatan'},
            {data: 'tanggal_disetujui'},
            {data: 'status'},
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
                    // Log errors for debugging
                    console.error(errors);
                    alert('Tidak dapat menyimpan data. Periksa kembali input Anda.');
                });
        }
    });
    });

    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Analisis dan Desain');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=nama_proyek]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Analisis dan Desain');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_proyek]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_proyek]').val(response.nama_proyek);
                $('#modal-form [name=deskripsi_proyek]').val(response.deskripsi_proyek);
                $('#modal-form [name=manajer_proyek]').val(response.manajer_proyek);
                $('#modal-form [name=kebutuhan_fungsi]').val(response.kebutuhan_fungsi);
                $('#modal-form [name=gambaran_arsitektur]').val(response.gambaran_arsitektur);
                $('#modal-form [name=detil_arsitektur]').val(response.detil_arsitektur);
                $('#modal-form [name=lampiran_mockup]').val(response.lampiran_mockup);
                $('#modal-form [name=nama_pemohon]').val(response.nama_pemohon);
                $('#modal-form [name=jabatan_pemohon]').val(response.jabatan_pemohon);
                $('#modal-form [name=tanggal_disiapkan]').val(response.tanggal_disiapkan);
                $('#modal-form [name=nama]').val(response.nama);
                $('#modal-form [name=jabatan]').val(response.jabatan);
                $('#modal-form [name=tanggal_disetujui]').val(response.tanggal_disetujui);
                $('#modal-form [name=status]').val(response.acc);
            })
            .fail((errors) => {
                console.error(errors);
                alert('Tidak dapat menampilkan data');
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
                    console.error(errors);
                    alert('Tidak dapat menghapus data');
                });
        }
    }
</script>
@endpush
