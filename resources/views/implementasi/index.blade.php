@extends('layouts.master')

@section('title')
    Daftar Pengujian
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Pengujian</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="addForm('{{ route('pengujian.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
            </div>
            <div class="box-body table-responsive">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>ID</th>
                            <th>nama Proyek</th>
                            <th>Manajer Proyek</th>
                            <th>Tim Implementasi</th>
                            <th>Tanggal Laporan Implementasi</th>
                            <th>Tujuan Implementasi</th>
                            <th>Lingkup Implementasi</th>
                            <th>Aktivitas Implementasi</th>
                            <th>Tanggal Aktivitas Implementasi</th>
                            <th>Deskripsi Aktivitas Implementasi</th>
                            <th>Status Aktivitas</th>
                            <th>Risiko</th>
                            <th>Deskripsi Risiko</th>
                            <th>Mitigasi</th>
                            <th>Status Risiko',
                            <th>Masalah Ditemui</th>
                            <th>Deskripsi Masalah</th>
                            <th>Solusi</th>
                            <th>Status Masalah</th>
                            <th>Rencana Tindak Lanjut</th>
                            <th>Dokumentasi</th>
                            <th>Rencana Dukungan</th>
                            <th>Kriteria Kesuksesan</th>
                            <th>Persetujuan</th>
                            <th width="15%"><i class="fa fa-cog"></i>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('pengujian.form')
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
                url: '{{ route('pengujian.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'id'},
                {data: 'nama_proyek'},
                {data: 'manajer_proyek'},
                {data: 'tim_implementasi'},
                {data: 'tgl_laporan_implementasi'},
                {data: 'tujuan_implementasi'},
                {data: 'lingkup_implementasi'},
                {data: 'aktivitas_implementasi'},
                {data: 'tgl_aktivitas_implementasi'},
                {data: 'deskripsi_aktivitas_implementasi'},
                {data: 'status_aktivitas'},
                {data: 'risiko'},
                {data: 'deskripsi_risiko'},
                {data: 'mitigasi'},
                {data: 'status_risiko'},
                {data: 'masalah_ditemui'},
                {data: 'deskripsi_masalah'},
                {data: 'solusi'},
                {data: 'status_masalah'},
                {data: 'rencana_tindak_lanjut'},
                {data: 'dokumentasi'},
                {data: 'rencana_dukungan'},
                {data: 'kriteria_kesuksesan'},
                {data: 'persetujuan'},
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
        $('#modal-form .modal-title').text('Tambah Pengujian');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=latar_belakang_proyek]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Pengujian');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=latar_belakang_proyek]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_proyek]').val(response.nama_proyek);
                $('#modal-form [name=manajer_proyek]').val(response.manajer_proyek);
                $('#modal-form [name=tim_implementasi]').val(response.tim_implementasi);
                $('#modal-form [name=tgl_laporan_implementasi]').val(response.tgl_laporan_implementasi);
                $('#modal-form [name=tujuan_implementasi]').val(response.tujuan_implementasi);
                $('#modal-form [name=lingkup_implementasi]').val(response.lingkup_implementasi);
                $('#modal-form [name=aktivitas_implementasi]').val(response.aktivitas_implementasi);
                $('#modal-form [name=tgl_aktivitas_implementasi]').val(response.tgl_aktivitas_implementasi);
                $('#modal-form [name=deskripsi_aktivitas_implementasi]').val(response.deskripsi_aktivitas_implementasi);
                $('#modal-form [name=status_aktivitas]').val(response.status_aktivitas);
                $('#modal-form [name=risiko]').val(response.risiko);
                $('#modal-form [name=deskripsi_risiko]').val(response.deskripsi_risiko);
                $('#modal-form [name=mitigasi]').val(response.mitigasi);
                $('#modal-form [name=status_risiko]').val(response.status_risiko);
                $('#modal-form [name=masalah_ditemui]').val(response.masalah_ditemui);
                $('#modal-form [name=deskripsi_masalah]').val(response.deskripsi_masalah);
                $('#modal-form [name=solusi]').val(response.solusi);
                $('#modal-form [name=status_masalah]').val(response.status_masalah);
                $('#modal-form [name=rencana_tindak_lanjut]').val(response.rencana_tindak_lanjut);
                $('#modal-form [name=dokumentasi]').val(response.dokumentasi);
                $('#modal-form [name=rencana_dukungan]').val(response.rencana_dukungan);
                $('#modal-form [name=kriteria_kesuksesan]').val(response.kriteria_kesuksesan);
                $('#modal-form [name=persetujuan]').val(response.persetujuan);
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
