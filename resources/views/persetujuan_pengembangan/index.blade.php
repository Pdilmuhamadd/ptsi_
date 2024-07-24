@extends('layouts.master')

@section('title')
    Daftar Persetujuan Pengembangan
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Persetujuan Pengembangan</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="addForm('{{ route('persetujuan_pengembangan.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
            </div>
            <div class="box-body table-responsive">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>ID</th>
                            <th>Nomor Proyek</th>
                            <th>Nama Proyek</th>
                            <th>Deskripsi Proyek</th>
                            <th>Status Persetujuan</th>
                            <th>Alasan Persetujuan</th>
                            <th>Nama Pemohon</th>
                            <th>Nama Peninjau</th>
                            <th>Jabatan Peninjau</th>
                            <th>Nama Penyetuju</th>
                            <th width="15%"><i class="fa fa-cog"></i>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('persetujuan_pengembangan.form')
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
                url: '{{ route('persetujuan_pengembangan.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'id_persetujuan_pengembangan'},
                {data: 'nomor_proyek'},
                {data: 'nama_proyek'},
                {data: 'deskripsi'},
                {data: 'status_persetujuan'},
                {data: 'alasan_persetujuan'},
                {data: 'namapemohon'},
                {data: 'namapeninjau'},
                {data: 'jabatanpeninjau'},
                {data: 'namapenyetuju'},
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
        $('#modal-form .modal-title').text('Tambah Persetujuan Pengembangan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=latar_belakang]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Persetujuan Pengembangan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=latar_belakang]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nomor_proyek]').val(response.nomor_proyek);
                $('#modal-form [name=nama_proyek]').val(response.nama_proyek);
                $('#modal-form [name=deskripsi]').val(response.deksripsi);
                $('#modal-form [name=status_persetujuan]').val(response.status_persetujuan);
                $('#modal-form [name=alasan_persetujuan]').val(response.alasan_persetujuan);
                $('#modal-form [name=namapemohon]').val(response.namapemohon);
                $('#modal-form [name=namapeninjau]').val(response.namapeninjau);
                $('#modal-form [name=jabatanpeninjau]').val(response.jabatanpeninjau);
                $('#modal-form [name=namapenyetuju]').val(response.namapenyetuju);
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
