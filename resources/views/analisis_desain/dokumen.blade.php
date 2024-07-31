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
        .header h1 {
            margin: 0;
        }
        .header p {
            margin: 5px 0;
        }
        .table-container {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table-container, .table-container th, .table-container td {
            border: 1px solid black;
        }
        .table-container th, .table-container td {
            padding: 8px;
            text-align: left;
        }
        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }
        .bordered {
            border: 1px solid #333;
            padding: 10px;
            margin-bottom: 20px;
        }
        .text-right {
            text-align: right;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>

@foreach($dataanalisis as $analisis)
<div class="header">
    <table>
        <tr>
            <td rowspan="4">
                <img src="{{ asset('path_to_logo_image.png') }}" alt="Logo" width="100">
            </td>
            <td rowspan="4" class="text-center">
                <h2>ANALISIS & DESAIN SISTEM INFORMASI</h2>
            </td>
            <td>No. Dokumen</td>
            <td>FP-DTI03-08</td>
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
            <td>Halaman</td>
            <td>1</td>
        </tr>
    </table>
</div>

<table>
    <tr>
        <th>Nomor Proyek</th>
        <td>xxxxxxxxxxxxx (Nomor Proyek Perlu disepakati)</td>
    </tr>
    <tr>
        <th>Nama Proyek</th>
        <td>{{ $analisis->nama_proyek }}</td>
    </tr>
    <tr>
        <th>Deskripsi</th>
        <td>{{ $analisis->deskripsi_proyek }}</td>
    </tr>
    <tr>
        <th>Manajer Proyek</th>
        <td>{{ $analisis->manajer_proyek }}</td>
    </tr>
    <tr>
        <th>Kebutuhan Fungsional dan Deskripsi</th>
        <td>{{ $analisis->kebutuhan_fungsi }}</td>
    </tr>
    <tr>
        <th>Arsitektur Sistem Informasi</th>
        <td>{{ $analisis->gambaran_arsitektur }}</td>
    </tr>
    <tr>
        <th>Desain Detil</th>
        <td>{{ $analisis->detil_arsitektur }}</td>
    </tr>
    <tr>
        <th>Lampiran</th>
        <td>{{ $analisis->lampiran_mockup }}</td>
    </tr>
</table>

<table class="table">
    <tr>
        <th class="text-center" colspan="2">Disiapkan oleh</th>
        <th class="text-center" colspan="2">Disetujui oleh</th>
    </tr>
    <tr>
        <td colspan="2" style="height: 100px;"></td>
        <td colspan="2" style="height: 100px;"></td>
    </tr>
    <tr>
        <td class="text-center" colspan="2">{{ $analisis->nama_pemohon }}<br>{{ $analisis->jabatan_pemohon }}</td>
        <td class="text-center" colspan="2">{{ $analisis->nama }}<br>{{ $analisis->jabatan }}</td>
    </tr>
    <tr>
        <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($analisis->tanggal_disiapkan)->format('d-m-Y') }}</td>
        <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($analisis->tanggal_disetujui)->format('d-m-Y') }}</td>
    </tr>
</table>

@if (!$loop->last)
<div class="page-break"></div>
@endif
@endforeach

</body>
</html>
