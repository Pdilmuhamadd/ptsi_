@php
use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permintaan Pengembangan Sistem Informasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .page-break {
            page-break-after: always;
        }
        .text-center {
            text-align: center;
        }
        .text-left {
            text-align: left;
        }
        .text-right{
            text-align: right;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid black;
        }
        .table th, .table td {
            padding: 5px;
        }
        .header-table, .header-table td {
            padding: 5px;
        }
        .header-table {
            width: 100%;
        }
        .logo {
            width: 100px;
        }
        .doc-info {
            text-align: right;
            width: 250px;
            font-size: 12px;
        }
        .doc-info p {
            margin: 2px 0;
        }
    </style>
</head>
<body>
    <!-- Page 1 -->
    <table class="header-table">
        <tr>
            <td>
                <img src="{{ asset('img/logo_ptsi.png') }}" alt="Logo" class="logo">
            </td>
            <td class="text-center">
                <h3>Permintaan Pengembangan Sistem Informasi</h3>
            </td>
            <td class="doc-info">
                <p>No. Dokumen: FP-DTI03-04</p>
                <p>No. Revisi: 04</p>
                <p>Tanggal Revisi: 2024</p>
                <p>Halaman: 1</p>
            </td>
        </tr>
    </table>

    <br>
    <h3 class="text-center bold">INFO KEBUTUHAN SISTEM INFORMASI</h3>
    <h3 class="text-right"><strong>NO: {{ $datapermintaan->first()->nomor_proyek }}</strong></h3>
    <table class="table">
        @foreach ($datapermintaan as $permintaan)
        <tr>
            <td class="text-left" width="30%">Latar Belakang</td>
            <td class="text-left">{{ $permintaan->latar_belakang }}</td>
        </tr>
        <tr>
            <td class="text-left">Tujuan</td>
            <td class="text-left">{{ $permintaan->tujuan }}</td>
        </tr>
        <tr>
            <td class="text-left">Target Implementasi Sistem</td>
            <td class="text-left">{{ $permintaan->target_implementasi_sistem }}</td>
        </tr>
        <tr>
            <td class="text-left">Fungsi-fungsi Sistem Informasi</td>
            <td class="text-left">{{ $permintaan->fungsi_sistem_informasi }}</td>
        </tr>
        <tr>
            <td class="text-left">Jenis Aplikasi</td>
            <td class="text-left">{{ $permintaan->jenis_aplikasi }}</td>
        </tr>
        <tr>
            <td class="text-left">Pengguna</td>
            <td class="text-left">{{ $permintaan->pengguna }}</td>
        </tr>
        <tr>
            <td class="text-left">Uraian Permintaan Tambahan/Khusus</td>
            <td class="text-left">{{ $permintaan->uraian_permintaan_tambahan }}</td>
        </tr>
        <tr>
            <td class="text-left">Lampiran</td>
            <td class="text-left">{{ $permintaan->lampiran }}</td>
        </tr>
        @endforeach
    </table>

    <!-- Page Break -->
    <div class="page-break"></div>

    <!-- Page 2 -->
    <table class="header-table">
        <tr>
            <td>
                <img src="{{ asset('img/logo_ptsi.png') }}" alt="Logo" class="logo">
            </td>
            <td class="text-center">
                <h3>Permintaan Pengembangan Sistem Informasi</h3>
            </td>
            <td class="doc-info">
                <p>No. Dokumen: FP-DTI03-04</p>
                <p>No. Revisi: 04</p>
                <p>Tanggal Revisi: 2024</p>
                <p>Halaman: 2</p>
            </td>
        </tr>
    </table>

    <br>

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
            <td class="text-center" colspan="2">{{ $permintaan->nama_pemohon }}<br>{{$permintaan->jabatan_pemohon}}</td>
            <td class="text-center" colspan="2">{{ $permintaan->nama }}<br>{{$permintaan->jabatan}}</td>
        </tr>
        <tr>
            <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($permintaan->tanggal_disiapkan)->format('d-m-Y') }}</td>
            <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($permintaan->tanggal_disetujui)->format('d-m-Y') }}</td>
        </tr>
    </table>
</body>
</html>
