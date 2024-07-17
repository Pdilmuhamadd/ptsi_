@extends('layouts.master')

@section('title')
    Daftar Perencanaan Proyek
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Perencanaan Proyek</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="addForm('{{ route('perencanaan_proyek.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
            </div>
            <div class="box-body table-responsive">
                <form action="" method="post" class="form-perencanaan-proyek">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>ID</th>
                            <th>latar_belakang_proyek</th>
                            <th>tujuan_proyek</th>
                            <th>ruang_lingkup_proyek</th>
                            <th>struktur_tim</th>
                            <th>tanggung_jawab_anggota_tim</th>
                            <th>identifikasi_risiko</th>
                            <th>analisis_risiko</th>
                            <th>strategi_mitigasi_risiko</th>
                            <th>fase_proyek</th>
                            <th>kegiatan_utama</th>
                            <th>milestones</th>
                            <th>sumber_pendanaan</th>
                            <th>pengendalian_biaya</th>
                            <th>standar_kualitas</th>
                            <th>metriks_kualitas</th>
                            <th>audit_review_kualitas</th>
                            <th>rencana_komunikasi</th>
                            <th>laporan_status</th>
                            <th>pertemuan_tim</th>
                            <th>kebutuhan_sdm</th>
                            <th>kebutuhan_teknologi_komunikasi</th>
                            <th width="15%"><i class="fa fa-cog"></i>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('perencanaan_proyek.form')
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
                url: '{{ route('perencanaan_proyek.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'ID'},
                {data: 'latar_belakang_proyek'},
                {data: 'tujuan_proyek'},
                {data: 'ruang_lingkup_proyek'},
                {data: 'struktur_tim'},
                {data: 'tanggung_jawab_anggota_tim'},
                {data: 'identifikasi_risiko'},
                {data: 'analisis_risiko'},
                {data: 'strategi_mitigasi_risiko'},
                {data: 'fase_proyek'},
                {data: 'kegiatan_utama'},
                {data: 'milestones'},
                {data: 'sumber_pendanaan'},
                {data: 'pengendalian_biaya'},
                {data: 'standar_kualitas'},
                {data: 'metriks_kualitas'},
                {data: 'audit_review_kualitas'},
                {data: 'rencana_komunikasi'},
                {data: 'laporan_status'},
                {data: 'pertemuan_tim'},
                {data: 'kebutuhan_sdm'},
                {data: 'kebutuhan_teknologi_komunikasi'},
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
        $('#modal-form .modal-title').text('Tambah Perencanaan Proyek');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=latar_belakang_proyek]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Perencanaan Proyek');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=latar_belakang_proyek]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=latar_belakang_proyek]').val(response.latar_belakang_proyek);
                $('#modal-form [name=tujuan_proyek]').val(response.tujuan_proyek);
                $('#modal-form [name=ruang_lingkup_proyek]').val(response.ruang_lingkup_proyek);
                $('#modal-form [name=struktur_tim]').val(response.struktur_tim);
                $('#modal-form [name=tanggung_jawab_anggota_tim]').val(response.tanggung_jawab_anggota_tim);
                $('#modal-form [name=identifikasi_risiko]').val(response.identifikasi_risiko);
                $('#modal-form [name=analisis_risiko]').val(response.analisis_risiko);
                $('#modal-form [name=strategi_mitigasi_risiko]').val(response.strategi_mitigasi_risiko);
                $('#modal-form [name=fase_proyek]').val(response.fase_proyek);
                $('#modal-form [name=kegiatan_utama]').val(response.kegiatan_utama);
                $('#modal-form [name=milestones]').val(response.milestones);
                $('#modal-form [name=sumber_pendanaan]').val(response.sumber_pendanaan);
                $('#modal-form [name=pengendalian_biaya]').val(response.pengendalian_biaya);
                $('#modal-form [name=standar_kualitas]').val(response.standar_kualitas);
                $('#modal-form [name=metriks_kualitas]').val(response.metriks_kualitas);
                $('#modal-form [name=audit_review_kualitas]').val(response.audit_review_kualitas);
                $('#modal-form [name=rencana_komunikasi]').val(response.rencana_komunikasi);
                $('#modal-form [name=laporan_status]').val(response.laporan_status);
                $('#modal-form [name=pertemuan_tim]').val(response.pertemuan_tim);
                $('#modal-form [name=kebutuhan_sdm]').val(response.kebutuhan_sdm);
                $('#modal-form [name=kebutuhan_teknologi_komunikasi]').val(response.kebutuhan_teknologi_komunikasi);
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
