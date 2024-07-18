@extends('layouts.master')

@section('title')
    Daftar Post Implementation Review
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Post Implementation Review</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="addForm('{{ route('post_implementation_review.store') }}')" class="btn btn-success btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Tambah</button>
            </div>
            <div class="box-body table-responsive">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">No</th>
                            <th>ID</th>
                            <th>Nama Proyek</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Manajer Proyek</th>
                            <th>Tujuan PIR</th>
                            <th>Deskripsi</th>
                            <th>Tujuan Proyek</th>
                            <th>Ruang Lingkup Proyek</th>
                            <th>Waktu</th>
                            <th>Biaya</th>
                            <th>Ruang Lingkup Pencapaian</th>
                            <th>Fungsionalitas</th>
                            <th>Kinerja</th>
                            <th>Keandalan</th>
                            <th>Pengguna</th>
                            <th>Feedback Positif</th>
                            <th>Feedback Negatif</th>
                            <th>Efisiensi</th>
                            <th>Akurasi</th>
                            <th>Kepuasan Pengguna</th>
                            <th>Masalah</th>
                            <th>solusi</th>
                            <th>Pelajaran Yang Dipetik</th>
                            <th>Kesimpulan</th>
                            <th>Rekomendasi</th>
                            <th>Pemangku Kepentingan</th>
                            <th>Tanggal Persetujuan</th>
                            <th width="15%"><i class="fa fa-cog"></i>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('post_implementation_review.form')
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
                url: '{{ route('post_implementation_review.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'id'},
                {data: 'nama_proyek'},
                {data: 'tgl_mulai'},
                {data: 'tgl_selesai'},
                {data: 'manajer_proyek'},
                {data: 'tujuan_pir'},
                {data: 'deskripsi'},
                {data: 'tujuan_proyek'},
                {data: 'ruang_lingkup_proyek'},
                {data: 'waktu'},
                {data: 'biaya'},
                {data: 'ruang_lingkup_pencapaian'},
                {data: 'fungsionalitas'},
                {data: 'kinerja'},
                {data: 'keandalan'},
                {data: 'pengguna'},
                {data: 'feedback_positif'},
                {data: 'feedback_negatif'},
                {data: 'efisiensi'},
                {data: 'akurasi'},
                {data: 'kepuasan_pengguna'},
                {data: 'masalah'},
                {data: 'solusi'},
                {data: 'pelajaran_yang_dipetik'},
                {data: 'kesimpulan'},
                {data: 'rekomendasi'},
                {data: 'pemangku_kepentingan'},
                {data: 'tanggal_persetujuan'},
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
        $('#modal-form .modal-title').text('Tambah Post Implementation Review');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=nama_proyek]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Post Implementation Review');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_proyek]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nama_proyek]').val(response.nama_proyek);
                $('#modal-form [name=tanggal_mulai]').val(response.tanggal_mulai);
                $('#modal-form [name=tanggal_selesai]').val(response.tanggal_selesai);
                $('#modal-form [name=manajer_proyek]').val(response.manajer_proyek);
                $('#modal-form [name=tujuan_pir]').val(response.tujuan_pir);
                $('#modal-form [name=deskripsi]').val(response.deskripsi);
                $('#modal-form [name=tujuan_proyek]').val(response.tujuan_proyek);
                $('#modal-form [name=ruang_lingkup_proyek]').val(response.ruang_lingkup_proyek);
                $('#modal-form [name=waktu]').val(response.waktu);
                $('#modal-form [name=biaya]').val(response.biaya);
                $('#modal-form [name=ruang_lingkup_pencapaian]').val(response.ruang_lingkup_pencapaian);
                $('#modal-form [name=fungsionalitas]').val(response.fungsionalitas);
                $('#modal-form [name=kinerja]').val(response.kinerja);
                $('#modal-form [name=keandalan]').val(response.keandalan);
                $('#modal-form [name=pengguna]').val(response.pengguna);
                $('#modal-form [name=feedback_positif]').val(response.feedback_positif);
                $('#modal-form [name=feedback_negatif]').val(response.feedback_negatif);
                $('#modal-form [name=efisiensi]').val(response.efisiensi);
                $('#modal-form [name=akurasi]').val(response.akurasi);
                $('#modal-form [name=kepuasan_pengguna]').val(response.kepuasan_pengguna);
                $('#modal-form [name=masalah]').val(response.masalah);
                $('#modal-form [name=solusi]').val(response.solusi);
                $('#modal-form [name=pelajaran_yang_dipetik]').val(response.pelajaran_yang_dipetik);
                $('#modal-form [name=kesimpulan]').val(response.kesimpulan);
                $('#modal-form [name=rekomendasi]').val(response.rekomendasi);
                $('#modal-form [name=pemangku_kepentingan]').val(response.pemangku_kepentingan);
                $('#modal-form [name=tanggal_persetujuan]').val(response.tanggal_persetujuan);
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
