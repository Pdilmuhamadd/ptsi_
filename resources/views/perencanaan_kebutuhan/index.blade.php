@extends('layouts.master')

@section('title')
    Daftar Perencanaan Kebutuhan
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Perencanaan Kebutuhan</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="addForm('{{ route('perencanaan_kebutuhan.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
            </div>
            <div class="box-body table-responsive">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>Nomor Proyek</th>
                            <th>Nama P`royek</th>
                            <th>Deskripsi</th>
                            <th>Pemilik Proyek</th>
                            <th>Manajer Proyek</th>
                            <th>Stakeholders</th>
                            <th>Kebutuhan Fungsional</th>
                            <th>Kebutuhan Non-fungsiona</th>
                            <th>Lampiran</th>
                            <th>Nama Pemohon</th>
                            <th>Jabatan Pemohon</th>
                            <th>Tanggal Disiapkan</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Tanggal Disetujui</th>
                            <th width="15%"><i class="fa fa-cog"></i>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('perencanaan_kebutuhan.form')
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
                url: '{{ route('perencanaan_kebutuhan.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'id'},
                {data: 'nama_proyek'},
                {data: 'deskripsi'},
                {data: 'pemilik_proyek'},
                {data: 'manajer_proyek'},
                {data: 'stakeholders'},
                {data: 'kebutuhan_fungsional'},
                {data: 'kebutuhan_nonfungsional'},
                {data: 'lampiran'},
                {data: 'nama_pemohon'},
                {data: 'jabatan_pemohon'},
                {data: 'tanggal_disiapkan'},
                {data: 'nama'},
                {data: 'jabatan'},
                {data: 'tanggal_disetujui'},
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
        $('#modal-form .modal-title').text('Tambah Perencanaan Kebutuhan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=nama_proyek]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Perencanaan Kebutuhan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_proyek]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_proyek]').val(response.nama_proyek);
                $('#modal-form [name=deskripsi]').val(response.deskripsi);
                $('#modal-form [name=pemilik_proyek]').val(response.pemilik_proyek);
                $('#modal-form [name=manajer_proyek]').val(response.manajer_proyek);
                $('#modal-form [name=stakeholders]').val(response.stakeholders);
                $('#modal-form [name=kebutuhan_fungsional]').val(response.kebutuhan_fungsional);
                $('#modal-form [name=kebutuhan_nonfungsional]').val(response.kebutuhan_nonfungsional);
                $('#modal-form [name=lampiran]').val(response.lampiran);
                $('#modal-form [name=nama_pemohon]').val(response.nama_pemohon);
                $('#modal-form [name=jabatan_pemohon]').val(response.jabatan_pemohon);
                $('#modal-form [name=tanggal_disiapkan]').val(response.tanggal_disiapkan);
                $('#modal-form [name=nama]').val(response.nama);
                $('#modal-form [name=jabatan]').val(response.jabatan);
                $('#modal-form [name=tanggal_disetujui]').val(response.tanggal_disetujui);
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
