@extends('layouts.master')

@section('title')
    Daftar Permintaan Pengembangan
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Permintaan Pengembangan</li>
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
                {data: 'id'},
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
        $('#modal-form .modal-title').text('Tambah Permintaan Pengembangan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=latar_belakang]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Permintaan Pengembangan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=latar_belakang]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=latar_belakang]').val(response.latar_belakang);
                $('#modal-form [name=tujuan]').val(response.tujuan);
                $('#modal-form [name=target_implementasi_sistem]').val(response.target_implementasi_sistem);
                $('#modal-form [name=fungsi_sistem_informasi]').val(response.fungsi_sistem_informasi);
                $('#modal-form [name=jenis_aplikasi]').val(response.jenis_aplikasi);
                $('#modal-form [name=pengguna]').val(response.pengguna);
                $('#modal-form [name=uraian_permintaan_tambahan]').val(response.uraian_permintaan_tambahan);
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
