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
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>ID</th>
                            <th>Latar Belakang Proyek</th>
                            <th>Tujuan Proyek</th>
                            <th>Ruang Lingkup Proyek</th>
                            <th>Struktur Tim</th>
                            <th>Tanggung Jawab Anggota Tim</th>
                            <th>Identifikasi Risiko</th>
                            <th>Analisis Risiko</th>
                            <th>Strategi Mitigasi Risiko</th>
                            <th>Fase Proyek</th>
                            <th>Kegiatan Utama</th>
                            <th>Milestones</th>
                            <th>Sumber Pendanaan</th>
                            <th>Pengendalian Biaya</th>
                            <th>Standar Kualitas</th>
                            <th>Metriks Kualitas</th>
                            <th>Audit Review Kualitas</th>
                            <th>Rencana Komunikasi</th>
                            <th>Laporan Status</th>
                            <th>Pertemuan Tim</th>
                            <th>Kebutuhan SDM</th>
                            <th>Kebutuhan Teknologi Komunikasi</th>
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
                {data: 'id'},
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
                {data: 'estimasi_biaya'},
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
                $('#modal-form [name=estimasi_biaya]').val(response.estimasi_biaya);
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
