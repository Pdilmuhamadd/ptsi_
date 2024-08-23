<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Dokumen QAT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .header {
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

@foreach($dataQAT as $qualityassurancetesting)
<div class="header">
    <table>
        <tr>
            <td rowspan="4">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logo_ptsi.png'))) }}" alt="Logo" width="100">
            </td>
            <td rowspan="4" class="text-center">
                <h2>Quality Assurance Testing (QAT)</h2>
            </td>
            <td>No. Dokumen</td>
            <td>FP-DTI03-G</td>
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

<h3 class="text-center bold">QUALITY ASSURANCE TESTING</h3>
<h4 class="text-right"><strong>NO: {{ $qualityassurancetesting->first()->nomor_proyek }}</strong></h4>
<table>
    <tr>
        <td>Nama Aplikasi</td>
        <td>{{ $qualityassurancetesting->nama_aplikasi }}</td>
    </tr>
    <tr>
        <td>Jenis Aplikasi</td>
        <td>{{ $qualityassurancetesting->jenis_aplikasi }}</td>
    </tr>
    <tr>
        <td>Kebutuhan Fungsional</td>
        <td>{{ $qualityassurancetesting->kebutuhan_nonfungsional }}</td>
    </tr>
    <tr>
        <td>Unit Pemilik Proses Bisnis</td>
        <td>{{ $qualityassurancetesting->unit_pemilik_proses_bisnis }}</td>
    </tr>
    <tr>
        <td>Lokasi Pengujian</td>
        <td>{{ $qualityassurancetesting->lokasi_pengujian }}</td>
    </tr>
    <tr>
        <td>Tanggal Pengujian</td>
        <td>{{ \Carbon\Carbon::parse($qualityassurancetesting->tgl_pengujian)->format('d M Y') }}</td>
    </tr>
    <tr>
        <td>Manual Book</td>
        <td>{{$qualityassurancetesting->manual_book}}</td>
    </tr>
</table>

<table class="table">
    <tr>
        <th class="text-center" colspan="2">Diketahui oleh</th>
        <th class="text-center" colspan="2">Disetujui oleh</th>
    </tr>
    <tr>
        <td colspan="2" style="height: 100px;"></td>
        <td colspan="2" style="height: 100px;"></td>
    </tr>
    <tr>
        <td class="text-center" colspan="2">{{ $qualityassurancetesting->nama_penyusun }}<br>{{$qualityassurancetesting->jabatan_penyusun}}</td>
        <td class="text-center" colspan="2">{{ $qualityassurancetesting->nama_penyetuju }}<br>{{$qualityassurancetesting->jabatan_penyetuju}}</td>
    </tr>
    <tr>
        <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($qualityassurancetesting->tgl_disusun)->format('d-m-Y') }}</td>
        <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($qualityassurancetesting->tanggal_disetujui)->format('d-m-Y') }}</td>
    </tr>
</table>

@if (!$loop->last)
<div class="page-break"></div>
@endif

@endforeach

</body>
</html>
