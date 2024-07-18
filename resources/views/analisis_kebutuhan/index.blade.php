@extends('layouts.master')

@section('title')
    Daftar Analisis Kebutuhan
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Analisis Kebutuhan</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
        <div class="box-header with-border">
            <button onclick="addForm('{{ route('analisis_kebutuhan.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
        </div>
            <div class="box-body table-responsive">
                <form action="" method="post" class="form-analisis-kebutuhan">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>ID Analisis Kebutuhan</th>
                            <th>Nama Proyek</th>
                            <th>Tujuan dan Deskripsi Proyek</th>
                            <th>Fungsi Proyek</th>
                            <th>Kebutuhan</th>
                            <th>Persetujuan</th>
                            <th width="15%"><i class="fa fa-cog"></i>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('analisis_kebutuhan.form')
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
                url: '{{ route('analisis_kebutuhan.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'id'},
                {data: 'NamaProyek'},
                {data: 'TujuandanDeskripsi'},
                {data: 'fungsiproyekproduk'},
                {data: 'KebutuhanFungsional'},
                {data: 'acc'},
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
        $('#modal-form .modal-title').text('Tambah Analisis Kebutuhan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=NamaProyek]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Analisis Kebutuhan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=NamaProyek]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=NamaProyek]').val(response.NamaProyek);
                $('#modal-form [name=TujuandanDeskripsi]').val(response.TujuandanDeskripsi);
                $('#modal-form [name=fungsiproyekproduk]').val(response.fungsiproyekproduk);
                $('#modal-form [name=KebutuhanFungsional]').val(response.KebutuhanFungsional);
                $('#modal-form [name=acc]').val(response.acc);
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
