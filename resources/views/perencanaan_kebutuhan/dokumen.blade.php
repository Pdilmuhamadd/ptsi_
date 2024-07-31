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

@foreach($datakebutuhan as $kebutuhan)
<div class="header">
    <table>
        <tr>
            <td rowspan="4">
                <img src="{{ asset('path_to_logo_image.png') }}" alt="Logo" width="100">
            </td>
            <td rowspan="4" class="text-center">
                <h2>Perencanaan Kebutuhan Proyek</h2>
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

<div class="bordered">
    <table class="table-container">
        <tr>
            <th>Latar Belakang</th>
            <td>{{ $kebutuhan->latar_belakang }}</td>
        </tr>
        <tr>
            <th>Tujuan</th>
            <td>{{ $kebutuhan->tujuan }}</td>
        </tr>
        <tr>
            <th>Target Implementasi Sistem</th>
            <td>{{ $kebutuhan->target_implementasi }}</td>
        </tr>
        <tr>
            <th>Fungsi-fungsi Sistem Informasi</th>
            <td>{{ $kebutuhan->fungsi_sistem }}</td>
        </tr>
        <tr>
            <th>Jenis Aplikasi</th>
            <td>{{ $kebutuhan->jenis_aplikasi }}</td>
        </tr>
        <tr>
            <th>Pengguna</th>
            <td>{{ $kebutuhan->pengguna }}</td>
        </tr>
        <tr>
            <th>Uraian Permintaan Tambahan/Khusus</th>
            <td>{{ $kebutuhan->uraian_tambahan }}</td>
        </tr>
    </table>

    <div class="section-title">Lampiran</div>
    <table class="table-container">
        <tr>
            <th>Proposal Teknis</th>
            <td>{{ $kebutuhan->proposal_teknis }}</td>
        </tr>
        <tr>
            <th>Alur Proses Bisnis yang Existing</th>
            <td>{{ $kebutuhan->alur_proses_existing }}</td>
        </tr>
        <tr>
            <th>Alur Proses Bisnis untuk Perbaikan atau Otomasi</th>
            <td>{{ $kebutuhan->alur_proses_perbaikan }}</td>
        </tr>
        <tr>
            <th>Prosedur & Instruksi Kerja</th>
            <td>{{ $kebutuhan->prosedur_instruksi }}</td>
        </tr>
    </table>

    <div class="section-title">Status kebutuhan</div>
    <table class="table-container">
        <tr>
            <th>Alasan</th>
            <td>{{ $kebutuhan->alasan_kebutuhan }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $kebutuhan->status_kebutuhan }}</td>
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
            <td class="text-center" colspan="2">{{ $kebutuhan->nama_pemohon }}<br>{{$kebutuhan->jabatan_pemohon}}</td>
            <td class="text-center" colspan="2">{{ $kebutuhan->nama }}<br>{{$kebutuhan->jabatan}}</td>
        </tr>
        <tr>
            <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($kebutuhan->tanggal_disiapkan)->format('d-m-Y') }}</td>
            <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($kebutuhan->tanggal_disetujui)->format('d-m-Y') }}</td>
        </tr>
    </table>

    @if (!$loop->last)
    <div class="page-break"></div>
    @endif

@endforeach

</body>
</html>
