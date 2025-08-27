<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .span_dashboard {
            font-size: 17px;
            font-weight: 600;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="nav-profile p-3 d-flex justify-content-between align-items-center bg-danger text-white">
        <div class="d-flex align-items-center">
            <span class="span_dashboard">Admin Laporan Harian Kinerja Distribusi</span>
        </div>
    </div>

    <!-- Content -->
    <div class="d-flex">
        <div class="flex-grow-1 p-4">
            <h3 class="mb-3">Dashboard</h3>
            <div class="alert alert-danger" role="alert">
                Selamat datang di dashboard Admin Laporan Harian Kinerja Distribusi! Di sini Anda dapat mengelola laporan terkait distribusi.
            </div>
            <a href="{{ route('laporan-harian.create') }}" class="btn btn-primary mb-3">Tambah</a>

            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tabel_data_laporan">
                    <thead class="table-danger text-center align-middle">
                        <tr>
                            <th>Cuaca</th>
                            <th>Total WO</th>
                            <th>Total VCC</th>
                            <th>Yantek Performance</th>
                            <th>Rating PLN Mobile</th>
                            <th>RCT / RPT</th>
                            <th>Kinerja PMT</th>
                            <th>Anomali WO</th>
                            <th>Safety Performance</th>
                            <th>Tidak Padam</th>
                            <th>Padam</th>
                            <th>Beban Sistem</th>
                            <th>Target P2TL</th>
                            <th>Realisasi P2TL</th>
                            <th>Top Performance</th>
                            <th>Bottom Performance</th>
                            <th>Ganti Meter Tua Prabayar</th>
                            <th>Ganti Meter Tua Pascabayar</th>
                            <th>Saldo Meter Tua</th>
                            <th>Pelanggan VVIP</th>
                            <th>Pelanggan VIP</th>
                            <th>Pelanggan Prioritas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporanharian as $laporan)
                            <tr>
                                <td>{{ $laporan->cuaca }}</td>
                                <td>{{ $laporan->total_wo }}</td>
                                <td>{{ $laporan->total_vcc }}</td>
                                <td>{{ $laporan->yantek_performance }}</td>
                                <td>{{ $laporan->rating_plnmobile }}</td>
                                <td>{{ $laporan->rpt_rct }}</td>
                                <td>{{ $laporan->kinerja_pmt }}</td>
                                <td>{{ $laporan->anomali_wo }}</td>
                                <td>{{ $laporan->safety_performance }}</td>
                                <td>{{ $laporan->tidak_padam }}</td>
                                <td>{{ $laporan->padam }}</td>
                                <td>{{ $laporan->beban_sistem }}</td>
                                <td>{{ $laporan->target_p2tl }}</td>
                                <td>{{ $laporan->realisasi_p2tl }}</td>
                                <td>{{ $laporan->top_performance }}</td>
                                <td>{{ $laporan->bottom_performance }}</td>
                                <td>{{ $laporan->ganti_meter_tua_prabayar }}</td>
                                <td>{{ $laporan->ganti_meter_tua_pascabayar }}</td>
                                <td>{{ $laporan->saldo_meter_tua }}</td>
                                <td>{{ $laporan->pelanggan_vvip }}</td>
                                <td>{{ $laporan->pelanggan_vip }}</td>
                                <td>{{ $laporan->pelanggan_prioritas }}</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JQuery & DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabel_data_laporan').DataTable({
                pageLength: 10,
                lengthMenu: [10, 25, 50, 100],
                ordering: true,
                searching: true,
                responsive: true
            });
        });
    </script>
</body>
</html>
