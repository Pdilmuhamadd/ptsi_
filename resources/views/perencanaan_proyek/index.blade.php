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
                <button onclick="deleteSelected('{{ route('perencanaan_proyek.delete_selected') }}')" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i> Hapus</button>
                <button onclick="cetakDokumen('{{ route('perencanaan_proyek.cetakDokumen') }}')" class="btn btn-info btn-xs btn-flat"><i class="fa fa-barcode"></i> Cetak Dokumen</button>
            </div>
            <div class="box-body table-responsive">
                    @csrf
                    <table class="table table-stiped table-bordered">
                            <thead>
                            <th width="5%">
                                <input type="checkbox" name="select_all" id="select_all">
                            </th>
                            <th width="5%">No</th>
                            <th>Nama Proyek</th>
                            <th>Deskripsi</th>
                            <th>Pemilik Proyek</th>
                            <th>Manajer Proyek</th>
                            <th>Ruang Lingkup</th>
                            <th>Tanggal Mulai</th>
                            <th>Target Selesai</th>
                            <th>Estimasi Biaya</th>
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
                {data: 'select_all', searchable: false, sortable: false},
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nama_proyek'},
                {data: 'deskripsi'},
                {data: 'pemilik_proyek'},
                {data: 'manajer_proyek'},
                {data: 'ruang_lingkup'},
                {data: 'tanggal_mulai'},
                {data: 'target_selesai'},
                {data: 'estimasi_biaya'},
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

        $('[name=select_all]').on('click', function () {
            $(':checkbox').prop('checked', this.checked);
        });
    });


    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Perencanaan Proyek');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=id_persetujuan_pengembangan]').prop('disabled', false);
        $('#modal-form [name=nama_proyek]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Perencanaan Proyek');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nama_proyek]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=id_persetujuan_pengembangan]').val(response.id_persetujuan_pengembangan).prop('disabled', true);
                $('#modal-form [name=deskripsi]').val(response.deskripsi);
                $('#modal-form [name=pemilik_proyek]').val(response.pemilik_proyek);
                $('#modal-form [name=manajer_proyek]').val(response.manajer_proyek);
                $('#modal-form [name=ruang_lingkup]').val(response.ruang_lingkup);
                $('#modal-form [name=tanggal_mulai]').val(response.tanggal_mulai);
                $('#modal-form [name=target_selesai]').val(response.target_selesai);
                $('#modal-form [name=estimasi_biaya]').val(response.estimasi_biaya);
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

    function deleteSelected(url) {
        var ids = [];
        $('[name="id_perencanaan_proyek[]"]:checked').each(function () {
            ids.push($(this).val());
        });

        if (ids.length > 0) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete',
                    'id_perencanaan_proyek': ids
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
            }
        } else {
            alert('Pilih data yang akan dihapus');
        }
    }

    function cetakDokumen(url) {
        if ($('input:checked').length < 1) {
            alert('Pilih data yang akan dicetak');
            return;
        } else {
            var form = $('<form>', {
                'method': 'POST',
                'action': url,
                'target': '_blank'
            });

            form.append($('<input>', {
                'type': 'hidden',
                'name': '_token',
                'value': '{{ csrf_token() }}'
            }));

            $('input:checked').each(function() {
                form.append($('<input>', {
                    'type': 'hidden',
                    'name': 'id_perencanaan_proyek[]',
                    'value': $(this).val()
                }));
            });

            $('body').append(form);
            form.submit();
        }
    }
</script>
@endpush
