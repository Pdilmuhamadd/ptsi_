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
        <h1>Daftar Analisis dan Desain Sistem Informasi</h1>
        <p>No. Dokumen: FP-DTI03-0D</p>
        <p>No. Revisi: 0</p>
        <p>Tanggal Revisi: 2024</p>
        <p>Halaman: 1</p>
    </div>

    @foreach ($dataanalisis as $analisis)
        <div class="bordered">
            <table class="table-container">
                <tr>
                    <th>Nama Proyek</th>
                    <td>{{ $analisis->nama_proyek }}</td>
                </tr>
                <tr>
                    <th>Deskripsi Proyek</th>
                    <td>{{ $analisis->deskripsi_proyek }}</td>
                </tr>
                <tr>
                    <th>Manajer Proyek</th>
                    <td>{{ $analisis->manajer_proyek }}</td>
                </tr>
                <tr>
                    <th>Kebutuhan Fungsional</th>
                    <td>{{ $analisis->kebutuhan_fungsi }}</td>
                </tr>
                <tr>
                    <th>Lampiran Mockup</th>
                    <td>{{ $analisis->lampiran_mockup }}</td>
                </tr>
            </table>
            <div class="section-title">Persetujuan oleh</div>
            <table class="table-container">
                <tr>
                    <th>Nama Pemohon</th>
                    <td>{{ $analisis->nama_pemohon }}</td>
                </tr>
                <tr>
                    <th>Nama Peninjau</th>
                    <td>{{ $analisis->nama}}</td>
                </tr>
                <tr>
                    <th>Jabatan Peninjau</th>
                    <td>{{ $analisis->jabatan }}</td>
                </tr>
            </table>
            <div class="text-right"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($analisis->created_at)->format('d M Y') }}</div>
        </div>

        @if ($loop->iteration % 3 == 0)
            <div class="page-break"></div>
        @endif
    @endforeach
</body>
</html>
