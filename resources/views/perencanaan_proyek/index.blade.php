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
                <button onclick="cetakDokumen('{{ route('perencanaan_proyek.cetakDokumen') }}')" class="btn btn-info btn-xs btn-flat"><i class="fa fa-download"></i> Cetak Dokumen</button>
            </div>
            <div class="box-body table-responsive">
                    @csrf
                    <table class="table table-stiped table-bordered" style="font-size: 12px;">
                            <thead>
                            <th style="width: 60px; padding: 4px;">
                                <input type="checkbox" name="select_all" id="select_all">
                            </th>
                            <th style="width: 15px; padding: 4px;">No</th>
                            <th style="width: 80px; padding: 4px;">Nomor Proyek</th>
                            <th>Nama Proyek</th>
                            <th style="padding: 4px;">Deskripsi</th>
                            <th>Pemilik Proyek</th>
                            <th>Manajer Proyek</th>
                            <th style="padding: 4px;">Ruang Lingkup</th>
                            <th style="width: 130px; padding: 4px;">Tanggal Mulai</th>
                            <th style="width: 130px; padding: 4px;">Target Selesai</th>
                            <th style="width: 130px; padding: 4px;">Estimasi Biaya</th>
                            <th>File PDF</th>
                            <th style="width: 80px; padding: 4px;"><i class="fa fa-cog"></i>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('perencanaan_proyek.upload')
@include('perencanaan_proyek.viewform')
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
                {data: 'nomor_proyek'},
                {data: 'nama_proyek'},
                {data: 'deskripsi'},
                {data: 'pemilik_proyek'},
                {data: 'manajer_proyek'},
                {data: 'ruang_lingkup'},
                {data: 'tanggal_mulai'},
                {data: 'target_selesai'},
                {data: 'estimasi_biaya'},
                {data: 'file_pdf'},
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
        $('#modal-form [name=nomor_proyek]').focus();
    }


    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Perencanaan Proyek');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=nomor_proyek]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=nomor_proyek]').val(response.nomor_proyek);
                $('#modal-form [name=id_persetujuan_pengembangan]').val(response.id_persetujuan_pengembangan).prop('disabled', true);
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
    function UploadPDF(url) {
        $('#modal-upload').modal('show');
        $('#modal-upload form').attr('action', url);

        $('#modal-upload form').off('submit').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData($(this)[0]);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#modal-upload').modal('hide');
                    table.ajax.reload();
                    alert(response);
                },
                error: function(errors) {
                    alert('Tidak dapat mengupload PDF');
                }
            });
        });
    }

    function viewForm(url) {
        $('#modal-view').modal('show');

        $.get(url)
            .done((response) => {
                console.log(response);

                $('#modal-view [name=nomor_proyek]').val(response.nomor_proyek);
                $('#modal-view [name=id_persetujuan_pengembangan]').val(response.id_persetujuan_pengembangan).prop('disabled', true);
                $('#modal-view [name=pemilik_proyek]').val(response.pemilik_proyek);
                $('#modal-view [name=manajer_proyek]').val(response.manajer_proyek);
                $('#modal-view [name=ruang_lingkup]').val(response.ruang_lingkup);
                $('#modal-view [name=tanggal_mulai]').val(response.tanggal_mulai);
                $('#modal-view [name=target_selesai]').val(response.target_selesai);
                $('#modal-view [name=estimasi_biaya]').val(response.estimasi_biaya);
                $('#modal-view [name=nama_pemohon]').val(response.nama_pemohon);
                $('#modal-view [name=jabatan_pemohon]').val(response.jabatan_pemohon);
                $('#modal-view [name=tanggal_disiapkan]').val(response.tanggal_disiapkan);
                $('#modal-view [name=nama]').val(response.nama);
                $('#modal-view [name=jabatan]').val(response.jabatan);
                $('#modal-view [name=tanggal_disetujui]').val(response.tanggal_disetujui);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }


</script>
@endpush
