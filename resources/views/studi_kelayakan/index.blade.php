@extends('layouts.master')

@section('title')
    Daftar Studi Kelayakan
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Daftar Studi Kelayakan</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="addForm('{{ route('studi_kelayakan.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
            </div>
            <div class="box-body table-responsive">
                <form action="" method="post" class="form-studi-kelayakan">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>ID Studi Kelayakan</th>
                            <th>Tujuan Dokumen</th>
                            <th>Ikhtisar</th>
                            <th>Latar Belakang</th>
                            <th>Konteks Bisnis</th>
                            <th>Tujuan</th>
                            <th>Sasaran</th>
                            <th>Analisis Opsi</th>
                            <th>Lingkup Fungsional</th>
                            <th>Lingkup NonFungsional</th>
                            <th>Manfaat Finansial</th>
                            <th>Manfaat Nonfinansial</th>
                            <th>Biaya Pengembangan</th>
                            <th>Biaya Operasional</th>
                            <th>Identifikasi Risiko</th>
                            <th>Analisis Dampak Risiko</th>
                            <th>Strategi Mitigasi Risiko</th>
                            <th>Timeline Proyek</th>
                            <th>Tgl Awal</th>
                            <th>Tgl Akhir</th>
                            <th>Kriteria Keberhasilan</th>
                            <th>Persetujuan</th>
                            <th width="15%"><i class="fa fa-cog"></i>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('studi_kelayakan.form')
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
                url: '{{ route('studi_kelayakan.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'id_studi_kelayakan'},
                {data: 'tujuan_dok'},
                {data: 'ikhtisar'},
                {data: 'latar_belakang'},
                {data: 'konteks_bisnis'},
                {data: 'tujuan'},
                {data: 'sasaran'},
                {data: 'analisis_opsi'},
                {data: 'lingkup_fungsional'},
                {data: 'lingkup_nonfungsional'},
                {data: 'manfaat_finansial'},
                {data: 'manfaat_nonfinansial'},
                {data: 'biaya_pengembangan'},
                {data: 'biaya_operasional'},
                {data: 'identifikasi_risiko'},
                {data: 'analisis_dampak_risiko'},
                {data: 'strategi_mitigasi_risiko'},
                {data: 'timeline_proyek'},
                {data: 'tgl_awal'},
                {data: 'tgl_akhir'},
                {data: 'kriteria_keberhasilan'},
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
        $('#modal-form .modal-title').text('Tambah Studi Kelayakan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=tujuan_dok]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Studi Kelayakan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=tujuan_dok]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=tujuan_dok]').val(response.tujuan_dok);
                $('#modal-form [name=ikhtisar]').val(response.ikhtisar);
                $('#modal-form [name=latar_belakang]').val(response.latar_belakang);
                $('#modal-form [name=konteks_bisnis]').val(response.konteks_bisnis);
                $('#modal-form [name=tujuan]').val(response.tujuan);
                $('#modal-form [name=sasaran]').val(response.sasaran);
                $('#modal-form [name=analisis_opsi]').val(response.analisis_opsi);
                $('#modal-form [name=lingkup_fungsional]').val(response.lingkup_fungsional);
                $('#modal-form [name=lingkup_nonfungsional]').val(response.lingkup_nonfungsional);
                $('#modal-form [name=manfaat_finansial]').val(response.manfaat_finansial);
                $('#modal-form [name=manfaat_nonfinansial]').val(response.manfaat_nonfinansial);
                $('#modal-form [name=biaya_pengembangan]').val(response.biaya_pengembangan);
                $('#modal-form [name=biaya_operasional]').val(response.biaya_operasional);
                $('#modal-form [name=identifikasi_risiko]').val(response.identifikasi_risiko);
                $('#modal-form [name=analisis_dampak_risiko]').val(response.analisis_dampak_risiko);
                $('#modal-form [name=strategi_mitigasi_risiko]').val(response.strategi_mitigasi_risiko);
                $('#modal-form [name=timeline_proyek]').val(response.timeline_proyek);
                $('#modal-form [name=tgl_awal]').val(response.tgl_awal);
                $('#modal-form [name=tgl_akhir]').val(response.tgl_akhir);
                $('#modal-form [name=kriteria_keberhasilan]').val(response.kriteria_keberhasilan);
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
