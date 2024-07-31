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
    @foreach($dataanalisis as $analisis)
        <div class="header">
            <table>
                <tr>
                    <td rowspan="4">
                        <img src="{{ asset('path_to_logo_image.png') }}" alt="Logo" width="100">
                    </td>
                    <td rowspan="4" class="text-center">
                        <h2>Perencanaan Proyek</h2>
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
                    <td>{{ $analisis->latar_belakang }}</td>
                </tr>
                <tr>
                    <th>Tujuan</th>
                    <td>{{ $analisis->tujuan }}</td>
                </tr>
                <tr>
                    <th>Target Implementasi Sistem</th>
                    <td>{{ $analisis->target_implementasi }}</td>
                </tr>
                <tr>
                    <th>Fungsi-fungsi Sistem Informasi</th>
                    <td>{{ $analisis->fungsi_sistem }}</td>
                </tr>
                <tr>
                    <th>Jenis Aplikasi</th>
                    <td>{{ $analisis->jenis_aplikasi }}</td>
                </tr>
                <tr>
                    <th>Pengguna</th>
                    <td>{{ $analisis->pengguna }}</td>
                </tr>
                <tr>
                    <th>Uraian Permintaan Tambahan/Khusus</th>
                    <td>{{ $analisis->uraian_tambahan }}</td>
                </tr>
            </table>

            <div class="section-title">Lampiran</div>
            <table class="table-container">
                <tr>
                    <th>Proposal Teknis</th>
                    <td>{{ $analisis->proposal_teknis }}</td>
                </tr>
                <tr>
                    <th>Alur Proses Bisnis yang Existing</th>
                    <td>{{ $analisis->alur_proses_existing }}</td>
                </tr>
                <tr>
                    <th>Alur Proses Bisnis untuk Perbaikan atau Otomasi</th>
                    <td>{{ $analisis->alur_proses_perbaikan }}</td>
                </tr>
                <tr>
                    <th>Prosedur & Instruksi Kerja</th>
                    <td>{{ $analisis->prosedur_instruksi }}</td>
                </tr>
            </table>

            <div class="section-title">Status Persetujuan</div>
            <table class="table-container">
                <tr>
                    <th>Alasan</th>
                    <td>{{ $analisis->alasan_persetujuan }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $analisis->status_persetujuan }}</td>
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
                    <td class="text-center" colspan="2">{{ $alasan->nama_pemohon }}<br>{{$alasan->jabatan_pemohon}}</td>
                    <td class="text-center" colspan="2">{{ $alasan->nama }}<br>{{$alasan->jabatan}}</td>
                </tr>
                <tr>
                    <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($alasan->tanggal_disiapkan)->format('d-m-Y') }}</td>
                    <td class="text-center" colspan="2">Tanggal: {{ \Carbon\Carbon::parse($alasan->tanggal_disetujui)->format('d-m-Y') }}</td>
                </tr>
            </table>
        </div>

        @if ($loop->iteration % 3 == 0)
            <div class="page-break"></div>
        @endif
    @endforeach
</body>
</html>
