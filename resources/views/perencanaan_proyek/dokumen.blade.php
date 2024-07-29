<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Dokumen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .no-border {
            border: none;
        }
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
        .text-left {
            text-align: left;
        }
        .bold {
            font-weight: bold;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>

@foreach($dataperencanaan as $perencanaan)
<div class="header">
    <table>
        <tr>
            <td rowspan="2">
                <img src="{{ asset('path_to_logo_image.png') }}" alt="Logo" width="100">
            </td>
            <td class="text-center">
                <h2>Perencanaan Proyek</h2>
                <h2>Pengembangan Sistem Informasi</h2>
            </td>
            <td class="no-border"></td>
        </tr>
        <tr>
            <td class="text-center no-border">
                <p>No. Dokumen: FP-DTI03-08</p>
                <p>No. Revisi: 0</p>
                <p>Tanggal Revisi: 2024</p>
                <p>Halaman: 1</p>
            </td>
            <td class="no-border"></td>
        </tr>
    </table>
</div>

<table>
    <tr>
        <th colspan="2" class="text-left bold">PERENCANAAN PROYEK</th>
    </tr>
    <tr>
        <td>Nomor Proyek</td>
        <td>xxxxxxxxxxxxxx (Nomor Proyek Perlu disepakati)</td>
    </tr>
    <tr>
        <td>Nama Proyek</td>
        <td>{{ $perencanaan->nama_proyek }}</td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td>{{ $perencanaan->deskripsi }}</td>
    </tr>
    <tr>
        <td>Pemilik Proyek</td>
        <td>{{ $perencanaan->pemilik_proyek }}</td>
    </tr>
    <tr>
        <td>Manajer Proyek</td>
        <td>{{ $perencanaan->manajer_proyek }}</td>
    </tr>
    <tr>
        <td>Ruang Lingkup</td>
        <td>{{ $perencanaan->ruang_lingkup }}</td>
    </tr>
    <tr>
        <td>Tanggal Mulai</td>
        <td>{{ \Carbon\Carbon::parse($perencanaan->tanggal_mulai)->format('d M Y') }}</td>
    </tr>
    <tr>
        <td>Target Selesai</td>
        <td>{{ \Carbon\Carbon::parse($perencanaan->target_selesai)->format('d M Y') }}</td>
    </tr>
    <tr>
        <td>Estimasi Biaya</td>
        <td>{{ $perencanaan->estimasi_biaya }}</td>
    </tr>
</table>

<table>
    <tr>
        <th class="text-center" colspan="2">Disiapkan oleh</th>
        <th class="text-center" colspan="2">Disetujui oleh</th>
    </tr>
    <tr>
        <td class="text-center">Nama Pemohon</td>
        <td class="text-center">Jabatan Pemohon</td>
        <td class="text-center">Nama</td>
        <td class="text-center">Jabatan</td>
    </tr>
    <tr>
        <td class="text-center">{{ $perencanaan->nama_pemohon }}</td>
        <td class="text-center">{{ $perencanaan->jabatan_pemohon }}</td>
        <td class="text-center">{{ $perencanaan->nama }}</td>
        <td class="text-center">{{ $perencanaan->jabatan }}</td>
    </tr>
    <tr>
        <td class="text-center">{{ \Carbon\Carbon::parse($perencanaan->tanggal_disiapkan)->format('d M Y') }}</td>
        <td></td>
        <td class="text-center">{{ \Carbon\Carbon::parse($perencanaan->tanggal_disetujui)->format('d M Y') }}</td>
        <td></td>
    </tr>
</table>

@if (!$loop->last)
<div class="page-break"></div>
@endif

@endforeach

</body>
</html>
