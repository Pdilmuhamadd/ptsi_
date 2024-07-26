<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perencanaan Proyek</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .text-center {
            text-align: center;
        }
        .table {
            width: 100%;
            margin: 20px 0;
        }
        .table-bordered {
            border: 1px solid #ddd;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .header-table {
            margin-bottom: 20px;
        }
        .header-table th,
        .header-table td {
            padding: 5px;
            border: none;
        }
        .signature-table {
            margin-top: 50px;
            width: 100%;
            text-align: center;
        }
        .signature-table td {
            padding: 20px;
        }
    </style>
</head>
<body>
    <table class="table header-table">
        <tr>
            <td rowspan="3"><img src="{{ asset('logo.png') }}" alt="Logo" style="height: 50px;"></td>
            <td rowspan="3">
                <h4>Perencanaan Proyek Pengembangan Sistem Informasi</h4>
            </td>
            <td>No. Dokumen</td>
            <td>FP-DT103-0B</td>
        </tr>
        <tr>
            <td>No. Revisi</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Tanggal Revisi</td>
            <td>2024</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td>Halaman</td>
            <td>1</td>
        </tr>
        <tr>
            <td colspan="4" class="text-center">NO: 0001</td>
        </tr>
    </table>

    <table class="table table-bordered">
        <tr>
            <th>Nomor Proyek</th>
            <td>xxxxxxxxxxxxxxxxx (Nomor Proyek Perlu disepakati)</td>
        </tr>
        <tr>
            <th>Nama Proyek</th>
            <td>{{ $trx_perencanaan_proyek->nama_proyek }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $trx_perencanaan_proyek->deskripsi }}</td>
        </tr>
        <tr>
            <th>Pemilik Proyek</th>
            <td>{{ $trx_perencanaan_proyek->pemilik_proyek }}</td>
        </tr>
        <tr>
            <th>Manajer Proyek</th>
            <td>{{ $trx_perencanaan_proyek->manajer_proyek }}</td>
        </tr>
        <tr>
            <th>Ruang Lingkup</th>
            <td>{{ $trx_perencanaan_proyek->ruang_lingkup }}</td>
        </tr>
        <tr>
            <th>Tanggal Mulai</th>
            <td>{{ $trx_perencanaan_proyek->tanggal_mulai }}</td>
        </tr>
        <tr>
            <th>Target Selesai</th>
            <td>{{ $trx_perencanaan_proyek->target_selesai }}</td>
        </tr>
        <tr>
            <th>Estimasi Biaya</th>
            <td>{{ $trx_perencanaan_proyek->estimasi_biaya }}</td>
        </tr>
    </table>

    <table class="table signature-table">
        <tr>
            <td>Disetujui oleh</td>
            <td>Disetujui oleh</td>
        </tr>
        <tr>
            <td>{{ $trx_perencanaan_proyek->nama_pemohon }}<br>{{ $trx_perencanaan_proyek->jabatan_pemohon }}</td>
            <td>{{ $trx_perencanaan_proyek->nama }}<br>{{ $trx_perencanaan_proyek->jabatan }}</td>
        </tr>
        <tr>
            <td>{{ $trx_perencanaan_proyek->tanggal_disiapkan }}</td>
            <td>{{ $trx_perencanaan_proyek->tanggal_disetujui }}</td>
        </tr>
    </table>
</body>
</html>
