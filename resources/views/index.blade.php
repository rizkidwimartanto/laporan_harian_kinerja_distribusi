<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Harian Kinerja Distribusi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: url('{{ asset('public/img/background_laporan.png') }}') no-repeat center top;
            background-size: contain;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 1678px; /* samakan dengan resolusi background */
            height: 768px;
        }

        .data-text {
            position: absolute;
            font-size: 1vw;
            font-weight: bold;
            color: #000;
        }

        /* CUACA (opsional jika nanti diisi) */
        .cuaca {
            top: 19.5%;
            left: 35%;
        }

        .custom-table,
        .custom-table td,
        .custom-table th {
            background-color: transparent !important;
        }

        /* TOTAL P0 */
        .total-p0 {
            top: 26.3%;
            left: 51.5%;
        }

        /* TOTAL VCC MERAH */
        .vcc-merah {
            top: 30.4%;
            left: 40.2%;
        }

        /* TOTAL VCC HITAM */
        .vcc-hitam {
            top: 30.4%;
            left: 51.5%;
        }

        /* YANTEK PERFORMANCE */
        .yantek-under {
            top: 36%;
            left: 37.5%;
        }

        .yantek-middle {
            top: 36%;
            left: 46.5%;
        }

        .yantek-top {
            top: 36%;
            left: 55.5%;
        }

        /* RATING PLN MOBILE */
        .rating-mobile {
            top: 40.3%;
            left: 40%;
        }

        /* RPT / RCT */
        .rpt-rct {
            top: 44.5%;
            left: 40%;
        }

        /* KINERJA PMT */
        .pmt {
            top: 48.5%;
            left: 40%;
        }

        /* ANOMALI WO */
        .anomaly {
            top: 52.6%;
            left: 40%;
        }

        /* SAFETY PERFORMANCE */
        .safety {
            top: 56.5%;
            left: 40%;
        }
    </style>
</head>

<body>
    <div class="overlay">
        @foreach ($laporanHariIni as $laporan)
            <!-- TOTAL WO/PO -->
            <p class="data-text total-wo">{{ $laporan->total_wo }}</p>
            <p class="data-text total-p0">{{ $laporan->total_p0 }}</p>

            <!-- TOTAL VCC -->
            <p class="data-text vcc-merah">{{ $laporan->total_vcc_merah }}</p>
            <p class="data-text vcc-hitam">{{ $laporan->total_vcc_hitam }}</p>

            <!-- YANTEK PERFORMANCE -->
            <p class="data-text yantek-under">{{ $laporan->yantek_performance_under_perf }}%</p>
            <p class="data-text yantek-middle">{{ $laporan->yantek_performance_middle_perf }}%</p>
            <p class="data-text yantek-top">{{ $laporan->yantek_performance_top_perf }}%</p>

            <!-- RATING PLN MOBILE -->
            <p class="data-text rating-mobile">{{ $laporan->rating_pln_mobile }}</p>

            <!-- RPT / RCT -->
            <p class="data-text rpt-rct">{{ $laporan->rpt_rct }}%</p>

            <!-- KINERJA PMT -->
            <p class="data-text pmt">{{ $laporan->kinerja_pmt }}</p>

            <!-- ANOMALI WO -->
            <p class="data-text anomaly">{{ $laporan->anomaly_wo }}</p>

        @if ($laporanHariIni->isEmpty())
            <h5 class="text-center">Belum ada laporan untuk hari ini.</h5>
        @else
            @foreach ($laporanHariIni as $laporan)
                <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary bg-gradient disabled">Keandalan & K3</button>
                        </div>
                        <div class="container pb-1 pt-2">
                            <p class="d-flex justify-content-between">
                                <span class="mt-3">
                                    <img src="{{ asset('public/img/weather.png') }}" alt="report" width="30px"
                                        height="30px">
                                    Cuaca
                                </span>
                                <button class="btn {{ $laporan->cuaca === 'Cerah' ? 'border-danger border-5' : '' }}"
                                    style="font-size: 12px; width:15%"><span style="font-weight:bold;"><img
                                            src="{{ asset('public/img/cerah.png') }}" alt="cerah" width="34px"
                                            height="34px"></span></button>
                                <button class="btn {{ $laporan->cuaca === 'Mendung' ? 'border-danger border-5' : '' }}"
                                    style="font-size: 12px; width:15%"><span style="font-weight:bold;"><img
                                            src="{{ asset('public/img/berawan.png') }}" alt="mendung" width="34px"
                                            height="34px"></span></button>
                                <button class="btn {{ $laporan->cuaca === 'Gerimis' ? 'border-danger border-5' : '' }}"
                                    style="font-size: 12px; width:15%"><span style="font-weight:bold;"><img
                                            src="{{ asset('public/img/gerimis.png') }}" alt="gerimis" width="34px"
                                            height="34px"></span></button>
                                <button class="btn {{ $laporan->cuaca === 'Hujan' ? 'border-danger border-5' : '' }}"
                                    style="font-size: 12px; width:15%"><span style="font-weight:bold;"><img
                                            src="{{ asset('public/img/hujan.png') }}" alt="hujan" width="34px"
                                            height="34px"></span></button>
                                <button
                                    class="btn {{ $laporan->cuaca === 'Hujan Petir' ? 'border-danger border-5' : '' }}"
                                    style="font-size: 12px; width:15%"><span style="font-weight:bold;"><img
                                            src="{{ asset('public/img/hujan petir.png') }}" alt="hujan petir"
                                            width="34px" height="34px"></span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/report.png') }}" alt="report" width="30px"
                                        height="30px">
                                    Total WO/P0
                                </span>
                                <button class="btn border-light"
                                    style="font-size: 12px; width:55%; background-color:#B6D5A3"><span
                                        style="font-weight:bold;">{{ $laporan->total_wo }}</span></button>
                                <button class="btn border-light"
                                    style="font-size: 12px; width:20%; background-color:#B6D5A3"><span
                                        style="font-weight:bold;">{{ $laporan->total_p0 }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/customer-service.png') }}" alt="customer-service"
                                        width="30px" height="30px"> Total VCC (Merah/Hitam)
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:43%; border: 3px solid #B6D5A3"><span
                                        style="font-weight:bold;">{{ $laporan->total_vcc_merah }}</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:20%; border: 3px solid #B6D5A3"><span
                                        style="font-weight:bold;">{{ $laporan->total_vcc_hitam }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/performance.png') }}" alt="performance"
                                        width="30px" height="30px">
                                    Yantek Performance
                                </span>
                                <button class="btn border-light"
                                    style="font-size: 12px; background-color:#B6D5A3">Under
                                    Perf (<35) : {{ $laporan->yantek_performance_under_perf }}</button>
                                        <button class="btn border-light"
                                            style="font-size: 12px; background-color:#B6D5A3">Middle
                                            Perf (35-70) : {{ $laporan->yantek_performance_middle_perf }}</button>
                                        <button class="btn border-light"
                                            style="font-size: 12px; background-color:#B6D5A3">Top
                                            Perf (>70) : {{ $laporan->yantek_performance_top_perf }}</button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/pln_mobile.jpg') }}" alt="pln_mobile"
                                        width="30px" height="30px">
                                    Rating PLN Mobile
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:70%; border: 3px solid #B6D5A3"><span
                                        style="font-weight:bold;">{{ $laporan->rating_plnmobile }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/alarm.png') }}" alt="alarm" width="30px"
                                        height="30px"> RPT
                                    / RCT
                                </span>
                                <button class="btn border-light"
                                    style="font-size: 12px; width:58%; background-color:#B6D5A3"><span
                                        style="font-weight:bold;">{{ $laporan->rpt }}</span></button>
                                <button class="btn border-light"
                                    style="font-size: 12px; width:20%; background-color:#B6D5A3"><span
                                        style="font-weight:bold;">{{ $laporan->rct }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/kinerja.png') }}" alt="kinerja" width="30px"
                                        height="30px">
                                    Kinerja PMT (CBOG/REC/SSO)
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->kinerja_pmt }}</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:20%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->cbog_rec_sso }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/anomali.png') }}" alt="anomali" width="30px"
                                        height="30px">
                                    Anomali WO
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:25%;  background-color:#B6D5A3;"><span>Lap
                                        Berulang
                                        :
                                        {{ $laporan->anomali_wo_lapberulang }}</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:29%;  background-color:#B6D5A3"><span>Skip Step
                                        :
                                        {{ $laporan->anomali_wo_skipstep }}</span></button>
                                <button class="btn" style="font-size: 12px;  background-color:#B6D5A3"><span>Rating
                                        Negatif :
                                        {{ $laporan->anomali_wo_ratingnegatif }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/safety.jpg') }}" alt="safety" width="30px"
                                        height="30px">
                                    Safety Performance
                                </span>
                                <button class="btn border-light"
                                    style="font-size: 11px;  background-color:#B6D5A3;"><span>Unsafe Action :
                                        {{ $laporan->safety_performance_unsafeaction }}</span></button>
                                <button class="btn border-light"
                                    style="font-size: 11px;  background-color:#B6D5A3;"><span>Unsafe Condition :
                                        {{ $laporan->safety_performance_unsafecondiction }}</span></button>
                                <button class="btn border-light"
                                    style="font-size: 11px;  background-color:#B6D5A3;"><span>Nearmiss :
                                        {{ $laporan->safety_performance_nearmiss }}</span></button>
                                <button class="btn border-light"
                                    style="font-size: 11px;  background-color:#B6D5A3;"><span>Accident :
                                        {{ $laporan->safety_performance_accident }}</span></button>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary bg-gradient disabled">Efisiensi</button>
                        </div>
                        <div class="container pb-1 pt-2">
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/target.png') }}" alt="target" width="30px"
                                        height="30px">
                                    Target P2TL
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:80%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->target_p2tl }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/realisasi.png') }}" alt="realisasi"
                                        width="30px" height="30px"> Realisasi P2TL
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:80%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->realisasi_p2tl }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between text-center">
                                <span>
                                    <img src="{{ asset('public/img/top_performance.png') }}" alt="top_performance"
                                        width="30px" height="30px"> Top Performance
                                </span>
                                <span>
                                    <img src="{{ asset('public/img/bottom_performance.png') }}"
                                        alt="bottom_performance" width="30px" height="30px"> Bottom Performance
                                </span>
                            </p>
                            <p class="d-flex justify-content-between">
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->juara1_ulp }} :
                                        {{ $laporan->jumlah_kwhmeter_juara1_ulp }} kWh</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->juara4_ulp }} :
                                        {{ $laporan->jumlah_kwhmeter_juara4_ulp }} kWh</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->juara2_ulp }} :
                                        {{ $laporan->jumlah_kwhmeter_juara2_ulp }} kWh</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->juara3_ulp }} :
                                        {{ $laporan->jumlah_kwhmeter_juara3_ulp }} kWh</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->juara3_ulp }} :
                                        {{ $laporan->jumlah_kwhmeter_juara3_ulp }} kWh</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->juara2_ulp }} :
                                        {{ $laporan->jumlah_kwhmeter_juara2_ulp }} kWh</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->juara4_ulp }} :
                                        {{ $laporan->jumlah_kwhmeter_juara4_ulp }} kWh</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->juara1_ulp }} :
                                        {{ $laporan->jumlah_kwhmeter_juara1_ulp }} kWh</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/meter_prabayar.png') }}" alt="meter_prabayar"
                                        width="30px" height="30px"> Ganti Meter Tua Prabayar
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:60%; background-color: #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->ganti_meter_tua_prabayar }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/meter_pascabayar.png') }}" alt="meter_pascabayar"
                                        width="30px" height="30px"> Ganti Meter Tua Pascabayar
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:60%; background-color: #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->ganti_meter_tua_pascabayar }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/saldo.png') }}" alt="saldo" width="30px"
                                        height="30px">
                                    Saldo Meter Tua
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:60%; background-color: #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->saldo_meter_tua }}</span></button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary bg-gradient disabled">Rekapitulasi ENS / Saving
                                KWH</button>
                        </div>
                        <div class="container pb-1 pt-2">
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/tidak_padam.png') }}" alt="tidak_padam"
                                        width="30px" height="30px">
                                    TIDAK PADAM (PDKB/SAVING KWH PDKB)
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:25%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->tidak_padam_pdkb }}</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:25%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->tidak_padam_savingpdkb }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/padam.png') }}" alt="padam" width="30px"
                                        height="30px">
                                    PADAM (NON PDKB /ENS)
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:40%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->padam_nonpdkb }}</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:25%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->tidak_padam_savingpdkb }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/sistem.png') }}" alt="sistem" width="30px"
                                        height="30px"> Beban Sistem
                                </span>
                                <button class="btn"
                                    style="font-size: 12px; width:25%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->beban_sistem_pagi }}</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:25%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->beban_sistem_siang }}</span></button>
                                <button class="btn"
                                    style="font-size: 12px; width:25%; border:3px solid #B6D5A3;"><span
                                        style="font-weight:bold;">{{ $laporan->beban_sistem_malam }}</span></button>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary bg-gradient disabled">Pelanggan VVIP / VIP /
                                Prioritas</button>
                        </div>
                        <table class="table table-borderless custom-table mt-2">
                            <thead>
                                <tr>
                                    <th class="px-4">Kategori</th>
                                    <th class="px-4">Jumlah</th>
                                    <th class="px-4">Padam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kategori i VVIP</td>
                                    <td class="text-center" style="border: 3px solid #B6D5A3;">
                                        {{ $laporan->pelanggan_vvip_jumlahpelanggan }}</td>
                                    <td class="text-center" style="border: 3px solid #B6D5A3;">
                                        {{ $laporan->pelanggan_vvip_padam }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori ii VIP</td>
                                    <td class="text-center" style="border: 3px solid #B6D5A3;">
                                        {{ $laporan->pelanggan_vip_jumlahpelanggan }}</td>
                                    <td class="text-center" style="border: 3px solid #B6D5A3;">
                                        {{ $laporan->pelanggan_vip_padam }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori iii Prioritas</td>
                                    <td class="text-center" style="border: 3px solid #B6D5A3;">
                                        {{ $laporan->pelanggan_prioritas_jumlahpelanggan }}</td>
                                    <td class="text-center" style="border: 3px solid #B6D5A3;">
                                        {{ $laporan->pelanggan_prioritas_padam }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</body>

</html>
