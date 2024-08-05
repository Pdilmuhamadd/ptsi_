
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
                <button onclick="deleteSelected('{{ route('persetujuan_pengembangan.delete_selected') }}')" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i> Hapus</button>
                <button onclick="cetakDokumen('{{ route('persetujuan_pengembangan.cetakDokumen') }}')" class="btn btn-info btn-xs btn-flat"><i class="fa fa-barcode"></i> Cetak Dokumen</button>
            </div>
            <div class="box-body table-responsive">
                @csrf
                <table class="table table-stiped table-bordered">
                    <thead>
                    <th width="5%">
                        <input type="checkbox" name="select_all" id="select_all">
                    </th>
                    <th width="5%">No</th>
                    <th>Nomor Proyek</th>
                    <th>Nama Proyek</th>
                    <th>Deskripsi Proyek</th>
                    <th>Status Persetujuan</th>
                    <th>Alasan Persetujuan</th>
                    <th>Nama Pemohon</th>
                    <th>Nama Penyetuju</th>
                    <th>Jabatan Pemohon</th>
                    <th>Jabatan Penyetuju</th>
                    <th width="15%"><i class="fa fa-cog"></i></th>
                    </thead>
                </table>
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
                {data: 'select_all', searchable: false, sortable: false},
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nomor_proyek'},
                {data: 'nama_proyek'},
                {data: 'deskripsi'},
                {data: 'nama_persetujuan'},
                {data: 'nama_alasan'},
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

        $('[name=select_all]').on('click', function () {
            $(':checkbox').prop('checked', this.checked);
        });

        $('#id_mst_persetujuan').change(function () {
            var id = $(this).val();
            $.get('/get-alasan-persetujuan/' + id, function (data) {
                var alasanSelect = $('#id_mst_persetujuanalasan');
                alasanSelect.empty();
                alasanSelect.append('<option value="">Pilih Alasan</option>');
                $.each(data, function (key, value) {
                    alasanSelect.append('<option value="' + key + '">' + value + '</option>');
                });
            });
        });
    });

    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Persetujuan Pengembangan');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=id_permintaan_pengembangan]').prop('disabled', false);
        $('#modal-form [name=nama_proyek]').focus();
    }

    function editForm(url) {
    $('#modal-form').modal('show');
    $('#modal-form .modal-title').text('Edit Persetujuan Pengembangan');

    $('#modal-form form')[0].reset();
    $('#modal-form form').attr('action', url);
    $('#modal-form [name=_method]').val('put');
    $('#modal-form [name=nama_proyek]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=id_permintaan_pengembangan]').val(response.id_permintaan_pengembangan).prop('disabled', true);
                $('#modal-form [name=nama_proyek]').val(response.nama_proyek);
                $('#modal-form [name=deskripsi]').val(response.deskripsi);
                $('#modal-form [name=id_mst_persetujuan]').val(response.id_mst_persetujuan);
                $('#modal-form [name=id_mst_persetujuanalasan]').val(response.id_mst_persetujuanalasan);
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

    function deleteSelected(url) {
        var ids = [];
        $('[name="id_persetujuan_pengembangan[]"]:checked').each(function () {
            ids.push($(this).val());
        });

        if (ids.length > 0) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete',
                    'id_persetujuan_pengembangan': ids
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
        var ids = [];
        $('[name="id_persetujuan_pengembangan[]"]:checked').each(function () {
            ids.push($(this).val());
        });

        if (ids.length < 1) {
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

            $.each(ids, function(index, id) {
                form.append($('<input>', {
                    'type': 'hidden',
                    'name': 'id_persetujuan_pengembangan[]',
                    'value': id
                }));
            });

            $('body').append(form);
            form.submit();
        }
    }

</script>
@endpush
