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
    <div class="header">
        <h1>perencanaan Permintaan Pengembangan Sistem Informasi</h1>
        <p>No. Dokumen: FP-DTI03-0A</p>
        <p>No. Revisi: 0</p>
        <p>Tanggal Revisi: 2024</p>
        <p>Halaman: 1</p>
    </div>

    @foreach ($dataperencanaan as $perencanaan)
        <div class="bordered">
            <table class="table-container">
                <tr>
                    <th>Latar Belakang</th>
                    <td>{{ $perencanaan->latar_belakang }}</td>
                </tr>
                <tr>
                    <th>Tujuan</th>
                    <td>{{ $perencanaan->tujuan }}</td>
                </tr>
                <tr>
                    <th>Target Implementasi Sistem</th>
                    <td>{{ $perencanaan->target_implementasi }}</td>
                </tr>
                <tr>
                    <th>Fungsi-fungsi Sistem Informasi</th>
                    <td>{{ $perencanaan->fungsi_sistem }}</td>
                </tr>
                <tr>
                    <th>Jenis Aplikasi</th>
                    <td>{{ $perencanaan->jenis_aplikasi }}</td>
                </tr>
                <tr>
                    <th>Pengguna</th>
                    <td>{{ $perencanaan->pengguna }}</td>
                </tr>
                <tr>
                    <th>Uraian Permintaan Tambahan/Khusus</th>
                    <td>{{ $perencanaan->uraian_tambahan }}</td>
                </tr>
            </table>

            <div class="section-title">Lampiran</div>
            <table class="table-container">
                <tr>
                    <th>Proposal Teknis</th>
                    <td>{{ $perencanaan->proposal_teknis }}</td>
                </tr>
                <tr>
                    <th>Alur Proses Bisnis yang Existing</th>
                    <td>{{ $perencanaan->alur_proses_existing }}</td>
                </tr>
                <tr>
                    <th>Alur Proses Bisnis untuk Perbaikan atau Otomasi</th>
                    <td>{{ $perencanaan->alur_proses_perbaikan }}</td>
                </tr>
                <tr>
                    <th>Prosedur & Instruksi Kerja</th>
                    <td>{{ $perencanaan->prosedur_instruksi }}</td>
                </tr>
            </table>

            <div class="section-title">Status perencanaan</div>
            <table class="table-container">
                <tr>
                    <th>Alasan</th>
                    <td>{{ $perencanaan->alasan_perencanaan }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $perencanaan->status_perencanaan }}</td>
                </tr>
            </table>

            <div class="section-title">perencanaan oleh</div>
            <table class="table-container">
                <tr>
                    <th>Nama Pemohon</th>
                    <td>{{ $perencanaan->nama_pemohon }}</td>
                </tr>
                <tr>
                    <th>Nama Peninjau</th>
                    <td>{{ $perencanaan->nama_peninjau }}</td>
                </tr>
                <tr>
                    <th>Jabatan Peninjau</th>
                    <td>{{ $perencanaan->jabatan_peninjau }}</td>
                </tr>
                <tr>
                    <th>Nama Penyetuju</th>
                    <td>{{ $perencanaan->nama_penyetuju }}</td>
                </tr>
            </table>
            <div class="text-right"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($perencanaan->created_at)->format('d M Y') }}</div>
        </div>

        @if ($loop->iteration % 3 == 0)
            <div class="page-break"></div>
        @endif
    @endforeach
</body>
</html>
