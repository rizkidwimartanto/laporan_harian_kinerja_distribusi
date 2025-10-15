<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="{{ asset('public/img/Logo_PLN.png') }}" type="image/png">
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
    <div class="container-fluid mt-3">
        <h3 class="mb-3">Dashboard</h3>
        <div class="alert alert-danger" role="alert">
            Selamat datang di dashboard Admin Laporan Harian Kinerja Distribusi! Di sini Anda dapat mengelola
            laporan terkait distribusi.
        </div>
        <div class="d-flex justify-content-start">
            <a href="{{ route('laporan-harian.create') }}" class="btn btn-primary mb-3 m-1">Tambah</a>
            <a href="{{ route('laporan-harian.index') }}" class="btn btn-secondary mb-3 m-1">Halaman Utama</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="tabel_data_laporan">
                <thead class="table-danger text-center align-middle">
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Cuaca</th>
                        <th>Total WO</th>
                        <th>Total P0</th>
                        <th>Total VCC Merah</th>
                        <th>Total VCC Hitam</th>
                        <th>Yantek Performance Underperformance</th>
                        <th>Yantek Performance Middle Performance</th>
                        <th>Yantek Performance Top Performance</th>
                        <th>Rating PLN Mobile</th>
                        <th>RPT</th>
                        <th>RCT</th>
                        <th>Kinerja PMT</th>
                        <th>Kinerja CBOG REC SSO</th>
                        <th>Anomali WO Lap Berulang</th>
                        <th>Anomali WO Skip Step</th>
                        <th>Anomali WO Rating Negatif</th>
                        <th>Safety Performance Unsafe Action</th>
                        <th>Safety Performance Unsafe Condition</th>
                        <th>Safety Performance Near Miss</th>
                        <th>Safety Performance Accident</th>
                        <th>Target P2TL</th>
                        <th>Realisasi P2TL</th>
                        <th>Top Performance</th>
                        <th>Jumlah kWh meter Top Performance</th>
                        <th>Bottom Performance</th>
                        <th>Jumlah kWh meter Bottom Performance</th>
                        <th>Ganti Meter Tua Prabayar</th>
                        <th>Ganti Meter Tua Pascabayar</th>
                        <th>Saldo Meter Tua</th>
                        <th>Tidak Padam PDKB</th>
                        <th>Tidak Padam Saving PDKB</th>
                        <th>Padam Non PDKB</th>
                        <th>Padam Ens</th>
                        <th>Beban Sistem Pagi</th>
                        <th>Beban Sistem Siang</th>
                        <th>Beban Sistem Malam</th>
                        <th>Pelanggan VVIP Jumlah Pelanggan</th>
                        <th>Pelanggan VVIP Padam</th>
                        <th>Pelanggan VIP Jumlah Pelanggan</th>
                        <th>Pelanggan VIP Padam</th>
                        <th>Pelanggan Prioritas Jumlah Pelanggan</th>
                        <th>Pelanggan Prioritas Padam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporanharian as $laporan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalEdit{{ $laporan->id }}">Edit</a>
                                <!-- Modal -->
                                <div class="modal fade" id="modalEdit{{ $laporan->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST"
                                                    action="{{ route('laporan-harian.update', $laporan->id) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="id" value="{{ $laporan->id }}">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="cuaca" class="form-label">Cuaca</label>
                                                                <select name="cuaca" id="cuaca"
                                                                    class="form-select" required>
                                                                    <option value="" disabled>Pilih Cuaca</option>
                                                                    <option value="Cerah"
                                                                        {{ old('cuaca', $laporan->cuaca) == 'Cerah' ? 'selected' : '' }}>
                                                                        Cerah</option>
                                                                    <option value="Mendung"
                                                                        {{ old('cuaca', $laporan->cuaca) == 'Mendung' ? 'selected' : '' }}>
                                                                        Mendung</option>
                                                                    <option value="Gerimis"
                                                                        {{ old('cuaca', $laporan->cuaca) == 'Gerimis' ? 'selected' : '' }}>
                                                                        Gerimis</option>
                                                                    <option value="Hujan"
                                                                        {{ old('cuaca', $laporan->cuaca) == 'Hujan' ? 'selected' : '' }}>
                                                                        Hujan</option>
                                                                    <option value="Hujan Petir"
                                                                        {{ old('cuaca', $laporan->cuaca) == 'Hujan Petir' ? 'selected' : '' }}>
                                                                        Hujan Petir</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="total_wo" class="form-label">Total
                                                                    WO</label>
                                                                <input type="text" class="form-control"
                                                                    id="total_wo" name="total_wo"
                                                                    value="{{ old('total_wo', $laporan->total_wo) }}"
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="total_p0" class="form-label">Total
                                                                    P0</label>
                                                                <input type="text" class="form-control"
                                                                    id="total_p0" name="total_p0"
                                                                    value="{{ old('total_p0', $laporan->total_p0) }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="total_vcc_merah" class="form-label">Total
                                                                    VCC Merah</label>
                                                                <input type="text" class="form-control"
                                                                    id="total_vcc_merah" name="total_vcc_merah" required
                                                                    value="{{ old('total_vcc_merah', $laporan->total_vcc_merah) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="total_vcc_hitam" class="form-label">Total
                                                                    VCC Hitam</label>
                                                                <input type="text" class="form-control"
                                                                    id="total_vcc_hitam" name="total_vcc_hitam"
                                                                    required
                                                                    value="{{ old('total_vcc_hitam', $laporan->total_vcc_hitam) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="yantek_performance_under_perf"
                                                                    class="form-label">Yantek Underperformance</label>
                                                                <input type="text" class="form-control"
                                                                    id="yantek_performance_under_perf"
                                                                    name="yantek_performance_under_perf" required
                                                                    value="{{ old('yantek_performance_under_perf', $laporan->yantek_performance_under_perf) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="yantek_performance_middle_perf"
                                                                    class="form-label">Yantek Middle
                                                                    Performance</label>
                                                                <input type="text" class="form-control"
                                                                    id="yantek_performance_middle_perf"
                                                                    name="yantek_performance_middle_perf" required
                                                                    value="{{ old('yantek_performance_middle_perf', $laporan->yantek_performance_middle_perf) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="yantek_performance_top_perf"
                                                                    class="form-label">Yantek Middle
                                                                    Performance</label>
                                                                <input type="text" class="form-control"
                                                                    id="yantek_performance_top_perf"
                                                                    name="yantek_performance_top_perf" required
                                                                    value="{{ old('yantek_performance_top_perf', $laporan->yantek_performance_top_perf) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="rating_plnmobile"
                                                                    class="form-label">Rating PLN Mobile</label>
                                                                <input type="text" class="form-control"
                                                                    id="rating_plnmobile" name="rating_plnmobile"
                                                                    required
                                                                    value="{{ old('rating_plnmobile', $laporan->rating_plnmobile) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="rpt" class="form-label">RPT</label>
                                                                <input type="text" class="form-control"
                                                                    id="rpt" name="rpt" required
                                                                    value="{{ old('rpt', $laporan->rpt) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="rct" class="form-label">RCT</label>
                                                                <input type="text" class="form-control"
                                                                    id="rct" name="rct" required
                                                                    value="{{ old('rct', $laporan->rct) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="kinerja_pmt" class="form-label">Kinerja
                                                                    PMT</label>
                                                                <input type="text" class="form-control"
                                                                    id="kinerja_pmt" name="kinerja_pmt" required
                                                                    value="{{ old('kinerja_pmt', $laporan->kinerja_pmt) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="cbog_rec_sso" class="form-label">Kinerja
                                                                    CBOG REC SSO</label>
                                                                <input type="text" class="form-control"
                                                                    id="cbog_rec_sso" name="cbog_rec_sso" required
                                                                    value="{{ old('cbog_rec_sso', $laporan->cbog_rec_sso) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="anomali_wo_lapberulang"
                                                                    class="form-label">Anomali WO Lap Berulang</label>
                                                                <input type="text" class="form-control"
                                                                    id="anomali_wo_lapberulang"
                                                                    name="anomali_wo_lapberulang" required
                                                                    value="{{ old('anomali_wo_lapberulang', $laporan->anomali_wo_lapberulang) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="anomali_wo_skipstep"
                                                                    class="form-label">Anomali WO Skip Step</label>
                                                                <input type="text" class="form-control"
                                                                    id="anomali_wo_skipstep"
                                                                    name="anomali_wo_skipstep" required
                                                                    value="{{ old('anomali_wo_skipstep', $laporan->anomali_wo_skipstep) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="anomali_wo_ratingnegatif"
                                                                    class="form-label">Anomali WO Rating
                                                                    Negatif</label>
                                                                <input type="text" class="form-control"
                                                                    id="anomali_wo_ratingnegatif"
                                                                    name="anomali_wo_ratingnegatif" required
                                                                    value="{{ old('anomali_wo_ratingnegatif', $laporan->anomali_wo_ratingnegatif) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="safety_performance_unsafeaction"
                                                                    class="form-label">Safety Performance
                                                                    UnsafeAction</label>
                                                                <input type="text" class="form-control"
                                                                    id="safety_performance_unsafeaction"
                                                                    name="safety_performance_unsafeaction" required
                                                                    value="{{ old('safety_performance_unsafeaction', $laporan->safety_performance_unsafeaction) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="safety_performance_unsafecondiction"
                                                                    class="form-label">Safety Performance
                                                                    UnsafeCondition</label>
                                                                <input type="text" class="form-control"
                                                                    id="safety_performance_unsafecondiction"
                                                                    name="safety_performance_unsafecondiction" required
                                                                    value="{{ old('safety_performance_unsafecondiction', $laporan->safety_performance_unsafecondiction) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="safety_performance_nearmiss"
                                                                    class="form-label">Safety Performance Near
                                                                    Miss</label>
                                                                <input type="text" class="form-control"
                                                                    id="safety_performance_nearmiss"
                                                                    name="safety_performance_nearmiss" required
                                                                    value="{{ old('safety_performance_nearmiss', $laporan->safety_performance_nearmiss) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="safety_performance_accident"
                                                                    class="form-label">Safety Performance
                                                                    Accident</label>
                                                                <input type="text" class="form-control"
                                                                    id="safety_performance_accident"
                                                                    name="safety_performance_accident" required
                                                                    value="{{ old('safety_performance_accident', $laporan->safety_performance_accident) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="tidak_padam_pdkb" class="form-label">Tidak
                                                                    Padam PDKB</label>
                                                                <input type="text" class="form-control"
                                                                    id="tidak_padam_pdkb" name="tidak_padam_pdkb"
                                                                    required
                                                                    value="{{ old('tidak_padam_pdkb', $laporan->tidak_padam_pdkb) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="tidak_padam_savingpdkb"
                                                                    class="form-label">Tidak Padam Saving PDKB</label>
                                                                <input type="text" class="form-control"
                                                                    id="tidak_padam_savingpdkb"
                                                                    name="tidak_padam_savingpdkb" required
                                                                    value="{{ old('tidak_padam_savingpdkb', $laporan->tidak_padam_savingpdkb) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="padam_nonpdkb" class="form-label">Padam
                                                                    Non PDKB</label>
                                                                <input type="text" class="form-control"
                                                                    id="padam_nonpdkb" name="padam_nonpdkb" required
                                                                    value="{{ old('padam_nonpdkb', $laporan->padam_nonpdkb) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="padam_ens" class="form-label">Padam
                                                                    Ens</label>
                                                                <input type="text" class="form-control"
                                                                    id="padam_ens" name="padam_ens" required
                                                                    value="{{ old('padam_ens', $laporan->padam_ens) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="beban_sistem_pagi"
                                                                    class="form-label">Beban Sistem Pagi</label>
                                                                <input type="text" class="form-control"
                                                                    id="beban_sistem_pagi" name="beban_sistem_pagi"
                                                                    required
                                                                    value="{{ old('beban_sistem_pagi', $laporan->beban_sistem_pagi) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="beban_sistem_siang"
                                                                    class="form-label">Beban Sistem Siang</label>
                                                                <input type="text" class="form-control"
                                                                    id="beban_sistem_siang" name="beban_sistem_siang"
                                                                    required
                                                                    value="{{ old('beban_sistem_siang', $laporan->beban_sistem_siang) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="beban_sistem_malam"
                                                                    class="form-label">Beban Sistem Malam</label>
                                                                <input type="text" class="form-control"
                                                                    id="beban_sistem_malam" name="beban_sistem_malam"
                                                                    required
                                                                    value="{{ old('beban_sistem_malam', $laporan->beban_sistem_malam) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="target_p2tl" class="form-label">Target
                                                                    P2TL</label>
                                                                <input type="text" class="form-control"
                                                                    id="target_p2tl" name="target_p2tl" required
                                                                    value="{{ old('target_p2tl', $laporan->target_p2tl) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="realisasi_p2tl"
                                                                    class="form-label">Realisasi P2TL</label>
                                                                <input type="text" class="form-control"
                                                                    id="realisasi_p2tl" name="realisasi_p2tl" required
                                                                    value="{{ old('realisasi_p2tl', $laporan->realisasi_p2tl) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="top_performance" class="form-label">Top
                                                                    Performance</label>
                                                                <select name="top_performance" id="top_performance"
                                                                    class="form-select" required>
                                                                    <option value="" selected disabled>Pilih Top
                                                                        Performance</option>
                                                                    <option value="ULP Demak"
                                                                        {{ old('top_performance', $laporan->top_performance) == 'ULP Demak' ? 'selected' : '' }}>
                                                                        ULP Demak</option>
                                                                    <option value="ULP Tegowanu"
                                                                        {{ old('top_performance', $laporan->top_performance) == 'ULP Tegowanu' ? 'selected' : '' }}>
                                                                        ULP Tegowanu
                                                                    </option>
                                                                    <option value="ULP Purwodadi"
                                                                        {{ old('top_performance', $laporan->top_performance) == 'ULP Purwodadi' ? 'selected' : '' }}>
                                                                        ULP Purwodadi
                                                                    </option>
                                                                    <option value="ULP Wirosari"
                                                                        {{ old('top_performance', $laporan->top_performance) == 'ULP Wirosari' ? 'selected' : '' }}>
                                                                        ULP Wirosari
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="jumlah_kwhmeter_top_performance"
                                                                    class="form-label">Jumlah kWhmeter Top
                                                                    Performance</label>
                                                                <input type="text" class="form-control"
                                                                    id="jumlah_kwhmeter_top_performance"
                                                                    name="jumlah_kwhmeter_top_performance" required
                                                                    value="{{ old('jumlah_kwhmeter_top_performance', $laporan->jumlah_kwhmeter_top_performance) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="bottom_performance"
                                                                    class="form-label">Bottom Performance</label>
                                                                <select name="bottom_performance"
                                                                    id="bottom_performance" class="form-select"
                                                                    required value="{{ old('total_wo') }}">
                                                                    <option value="" selected disabled>Pilih
                                                                        Bottom Performance</option>
                                                                    <option value="ULP Demak"
                                                                        {{ old('bottom_performance', $laporan->bottom_performance) == 'ULP Demak' ? 'selected' : '' }}>
                                                                        ULP Demak</option>
                                                                    <option value="ULP Tegowanu"
                                                                        {{ old('bottom_performance', $laporan->bottom_performance) == 'ULP Tegowanu' ? 'selected' : '' }}>
                                                                        ULP Tegowanu
                                                                    </option>
                                                                    <option value="ULP Purwodadi"
                                                                        {{ old('bottom_performance', $laporan->bottom_performance) == 'ULP Purwodadi' ? 'selected' : '' }}>
                                                                        ULP Purwodadi
                                                                    </option>
                                                                    <option value="ULP Wirosari"
                                                                        {{ old('bottom_performance', $laporan->bottom_performance) == 'ULP Wirosari' ? 'selected' : '' }}>
                                                                        ULP Wirosari
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="jumlah_kwhmeter_bottom_performance"
                                                                    class="form-label">Jumlah kWhmeter Bottom
                                                                    Performance</label>
                                                                <input type="text" class="form-control"
                                                                    id="jumlah_kwhmeter_bottom_performance"
                                                                    name="jumlah_kwhmeter_bottom_performance" required
                                                                    value="{{ old('jumlah_kwhmeter_bottom_performance', $laporan->jumlah_kwhmeter_bottom_performance) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="ganti_meter_tua_prabayar"
                                                                    class="form-label">Ganti Meter Tua Prabayar</label>
                                                                <input type="text" class="form-control"
                                                                    id="ganti_meter_tua_prabayar"
                                                                    name="ganti_meter_tua_prabayar" required
                                                                    value="{{ old('ganti_meter_tua_prabayar', $laporan->ganti_meter_tua_prabayar) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="ganti_meter_tua_pascabayar"
                                                                    class="form-label">Ganti Meter Tua
                                                                    Pascabayar</label>
                                                                <input type="text" class="form-control"
                                                                    id="ganti_meter_tua_pascabayar"
                                                                    name="ganti_meter_tua_pascabayar" required
                                                                    value="{{ old('ganti_meter_tua_pascabayar', $laporan->ganti_meter_tua_pascabayar) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="saldo_meter_tua" class="form-label">Saldo
                                                                    Meter Tua</label>
                                                                <input type="text" class="form-control"
                                                                    id="saldo_meter_tua" name="saldo_meter_tua"
                                                                    required
                                                                    value="{{ old('saldo_meter_tua', $laporan->saldo_meter_tua) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="pelanggan_vvip_jumlahpelanggan"
                                                                    class="form-label">Pelanggan VVIP Jumlah
                                                                    Pelanggan</label>
                                                                <input type="text" class="form-control"
                                                                    id="pelanggan_vvip_jumlahpelanggan"
                                                                    name="pelanggan_vvip_jumlahpelanggan" required
                                                                    value="{{ old('pelanggan_vvip_jumlahpelanggan', $laporan->pelanggan_vvip_jumlahpelanggan) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="pelanggan_vvip_padam"
                                                                    class="form-label">Pelanggan VVIP Padam</label>
                                                                <input type="text" class="form-control"
                                                                    id="pelanggan_vvip_padam"
                                                                    name="pelanggan_vvip_padam" required
                                                                    value="{{ old('pelanggan_vvip_padam', $laporan->pelanggan_vvip_padam) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="pelanggan_vip_jumlahpelanggan"
                                                                    class="form-label">Pelanggan VIP Jumlah
                                                                    Pelanggan</label>
                                                                <input type="text" class="form-control"
                                                                    id="pelanggan_vip_jumlahpelanggan"
                                                                    name="pelanggan_vip_jumlahpelanggan" required
                                                                    value="{{ old('pelanggan_vip_jumlahpelanggan', $laporan->pelanggan_vip_jumlahpelanggan) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="pelanggan_vip_padam"
                                                                    class="form-label">Pelanggan VIP Padam</label>
                                                                <input type="text" class="form-control"
                                                                    id="pelanggan_vip_padam"
                                                                    name="pelanggan_vip_padam" required
                                                                    value="{{ old('pelanggan_vip_padam', $laporan->pelanggan_vip_padam) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="pelanggan_prioritas_jumlahpelanggan"
                                                                    class="form-label">Pelanggan Prioritas
                                                                    Jumlah Pelanggan</label>
                                                                <input type="text" class="form-control"
                                                                    id="pelanggan_prioritas_jumlahpelanggan"
                                                                    name="pelanggan_prioritas_jumlahpelanggan" required
                                                                    value="{{ old('pelanggan_prioritas_jumlahpelanggan', $laporan->pelanggan_prioritas_jumlahpelanggan) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="mb-3">
                                                                <label for="pelanggan_prioritas_padam"
                                                                    class="form-label">Pelanggan Prioritas
                                                                    Padam</label>
                                                                <input type="text" class="form-control"
                                                                    id="pelanggan_prioritas_padam"
                                                                    name="pelanggan_prioritas_padam" required
                                                                    value="{{ old('pelanggan_prioritas_padam', $laporan->pelanggan_prioritas_padam) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('laporan-harian.destroy', $laporan->id) }}" method="POST"
                                    class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm btn-delete">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                            <td>{{ $laporan->cuaca }}</td>
                            <td>{{ $laporan->total_wo }}</td>
                            <td>{{ $laporan->total_p0 }}</td>
                            <td>{{ $laporan->total_vcc_merah }}</td>
                            <td>{{ $laporan->total_vcc_hitam }}</td>
                            <td>{{ $laporan->yantek_performance_under_perf }}</td>
                            <td>{{ $laporan->yantek_performance_middle_perf }}</td>
                            <td>{{ $laporan->yantek_performance_top_perf }}</td>
                            <td>{{ $laporan->rating_plnmobile }}</td>
                            <td>{{ $laporan->rpt }}</td>
                            <td>{{ $laporan->rct }}</td>
                            <td>{{ $laporan->kinerja_pmt }}</td>
                            <td>{{ $laporan->cbog_rec_sso }}</td>
                            <td>{{ $laporan->anomali_wo_lapberulang }}</td>
                            <td>{{ $laporan->anomali_wo_skipstep }}</td>
                            <td>{{ $laporan->anomali_wo_ratingnegatif }}</td>
                            <td>{{ $laporan->safety_performance_unsafeaction }}</td>
                            <td>{{ $laporan->safety_performance_unsafecondiction }}</td>
                            <td>{{ $laporan->safety_performance_nearmiss }}</td>
                            <td>{{ $laporan->safety_performance_accident }}</td>
                            <td>{{ $laporan->target_p2tl }}</td>
                            <td>{{ $laporan->realisasi_p2tl }}</td>
                            <td>{{ $laporan->top_performance }}</td>
                            <td>{{ $laporan->jumlah_kwhmeter_top_performance }}</td>
                            <td>{{ $laporan->bottom_performance }}</td>
                            <td>{{ $laporan->jumlah_kwhmeter_bottom_performance }}</td>
                            <td>{{ $laporan->ganti_meter_tua_prabayar }}</td>
                            <td>{{ $laporan->ganti_meter_tua_pascabayar }}</td>
                            <td>{{ $laporan->saldo_meter_tua }}</td>
                            <td>{{ $laporan->tidak_padam_pdkb }}</td>
                            <td>{{ $laporan->tidak_padam_savingpdkb }}</td>
                            <td>{{ $laporan->padam_nonpdkb }}</td>
                            <td>{{ $laporan->padam_ens }}</td>
                            <td>{{ $laporan->beban_sistem_pagi }}</td>
                            <td>{{ $laporan->beban_sistem_siang }}</td>
                            <td>{{ $laporan->beban_sistem_malam }}</td>
                            <td>{{ $laporan->pelanggan_vvip_jumlahpelanggan }}</td>
                            <td>{{ $laporan->pelanggan_vvip_padam }}</td>
                            <td>{{ $laporan->pelanggan_vip_jumlahpelanggan }}</td>
                            <td>{{ $laporan->pelanggan_vip_padam }}</td>
                            <td>{{ $laporan->pelanggan_prioritas_jumlahpelanggan }}</td>
                            <td>{{ $laporan->pelanggan_prioritas_padam }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil semua tombol hapus
            const deleteButtons = document.querySelectorAll(".btn-delete");

            deleteButtons.forEach(button => {
                button.addEventListener("click", function(e) {
                    e.preventDefault();
                    let form = this.closest("form");

                    Swal.fire({
                        title: 'Yakin hapus data?',
                        text: "Data yang dihapus tidak bisa dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // submit form kalau user klik "Ya, hapus!"
                        }
                    });
                });
            });
        });
    </script>

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
                responsive: true,
                columnDefs: [{
                    width: "200px",
                    targets: 1
                }, ]
            });
        });
    </script>
</body>

</html>
