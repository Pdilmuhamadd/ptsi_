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

@foreach($datapersetujuan as $persetujuan)
<div class="header">
    <table>
        <tr>
            <td rowspan="4">
                <img src="{{ asset('path_to_logo_image.png') }}" alt="Logo" width="100">
            </td>
            <td rowspan="4" class="text-center">
                <h2>Persetujuan Permintaan</h2>
                <h2>Pengembangan Sistem Informasi</h2>
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

<h3 class="text-center bold">INFO KEBUTUHAN SISTEM INFORMASI</h3>
<table>
    <tr>
        <td>Latar Belakang</td>
        <td>{{ $persetujuan->latar_belakang }}</td>
    </tr>
    <tr>
        <td>Tujuan</td>
        <td>{{ $persetujuan->tujuan }}</td>
    </tr>
    <tr>
        <td>Target Implementasi Sistem</td>
        <td>{{ $persetujuan->target_implementasi }}</td>
    </tr>
    <tr>
        <td>Fungsi-fungsi Sistem Informasi</td>
        <td>{{ $persetujuan->fungsi_sistem }}</td>
    </tr>
    <tr>
        <td>Jenis Aplikasi</td>
        <td>{{ $persetujuan->jenis_aplikasi }}</td>
    </tr>
    <tr>
        <td>Pengguna</td>
        <td>{{ $persetujuan->pengguna }}</td>
    </tr>
    <tr>
        <td>Uraian Permintaan Tambahan/Khusus</td>
        <td>{{ $persetujuan->uraian_tambahan }}</td>
    </tr>
    <tr>
        <td>Lampiran</td>
        <td>{{ $persetujuan->lampiran}}</td>
    </tr>
</table>

<h3 class="text-center bold">PERSETUJUAN KEBUTUHAN SISTEM INFORMASI</h3>
<table>
    <tr>
        <td>Status Persetujuan</td>
        <td>{{ $persetujuan->status_persetujuan}}</td>
    </tr>
    <tr>
        <td>Alasan</td>
        <td>{{ $persetujuan->alasan_persetujuan}}</td>
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
        <td class="text-center" colspan="2">{{ $persetujuan->namapemohon }}<br>{{$persetujuan->jabatanpeninjau}}</td>
        <td class="text-center" colspan="2">{{ $persetujuan->namapeninjau }}<br>{{$persetujuan->namapenyetuju}}</td>
    </tr>
    <tr>
        <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($persetujuan->tanggal_disiapkan)->format('d-m-Y') }}</td>
        <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($persetujuan->tanggal_disetujui)->format('d-m-Y') }}</td>
    </tr>
</table>

@if (!$loop->last)
<div class="page-break"></div>
@endif

@endforeach

</body>
</html>
