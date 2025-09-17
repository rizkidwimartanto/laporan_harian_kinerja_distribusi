<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Harian Kinerja Distribusi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="{{ asset('public/img/Logo_PLN.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: url('{{ asset('public/img/Background_Danantara.png') }}') no-repeat center fixed;
            background-size: cover;
            background-position: center 1px;
        }

        .title_content {
            position: relative;
            top: 10px;
        }

        p {
            font-size: 12px;
        }

        .custom-table {
            border: 1px solid black;
        }

        .custom-table th {
            height: 50px;
            vertical-align: middle;
            text-align: center;
            background-color: aqua;
            padding-left: 20px;
            padding-right: 20px;
            border: 1px solid black;
        }

        .custom-table td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <a href="{{ route('laporan-harian.admin') }}" class="btn btn-primary"
            style="position:fixed; top:30px; width:200px; height:60px; opacity:0;">
            Kembali
        </a>
        <div style="padding-top:10px;">
            <h4 class="text-center text-dark title_content">
                Laporan Harian Kinerja Distribusi UP3 Grobogan
            </h4>
            <h4 class="text-center">{{ $tanggal_sekarang }}</h4>
        </div>

        @if ($laporanHariIni->isEmpty())
            <h5 class="text-center">Belum ada laporan untuk hari ini.</h5>
        @else
            @foreach ($laporanHariIni as $laporan)
                <div class="row" style="margin-top: 25px;">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning disabled">Keandalan & K3</button>
                        </div>
                        <div class="container pb-1 pt-2">
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/weather.png') }}" alt="report" width="30px"
                                        height="30px">
                                    Cuaca
                                </span>
                                <button class="btn {{$laporan->cuaca === 'Cerah' ? 'btn-danger' : 'btn-primary'}} border-light"
                                    style="font-size: 12px; width:30%"><span style="font-weight:bold;"><img
                                            src="{{ asset('public/img/cerah.png') }}" alt="cerah" width="20px"
                                            height="20px"></span></button>
                                <button class="btn {{$laporan->cuaca === 'Berawan' ? 'btn-danger' : 'btn-primary'}} border-light"
                                    style="font-size: 12px; width:27%"><span style="font-weight:bold;"><img
                                            src="{{ asset('public/img/berawan.png') }}" alt="berawan" width="20px"
                                            height="20px"></span></button>
                                <button class="btn {{$laporan->cuaca === 'Hujan' ? 'btn-danger' : 'btn-primary'}} border-light"
                                    style="font-size: 12px; width:20%"><span style="font-weight:bold;"><img
                                            src="{{ asset('public/img/hujan.png') }}" alt="hujan" width="20px"
                                            height="20px"></span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/report.png') }}" alt="report" width="30px"
                                        height="30px">
                                    Total WO/P0
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:55%"><span
                                        style="font-weight:bold;">{{ $laporan->total_wo }}</span></button>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:20%"><span
                                        style="font-weight:bold;">{{ $laporan->total_p0 }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/customer-service.png') }}" alt="customer-service"
                                        width="30px" height="30px"> Total VCC (Merah/Hitam)
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:43%"><span
                                        style="font-weight:bold;">{{ $laporan->total_vcc_merah }}</span></button>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:20%"><span
                                        style="font-weight:bold;">{{ $laporan->total_vcc_hitam }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/performance.png') }}" alt="performance"
                                        width="30px" height="30px">
                                    Yantek Performance
                                </span>
                                <button class="btn btn-primary border-light text-light" style="font-size: 12px;">Under
                                    Perf (<35) : {{ $laporan->yantek_performance_under_perf }}</button>
                                        <button class="btn btn-primary border-light text-light"
                                            style="font-size: 12px;">Middle
                                            Perf (35-70) : {{ $laporan->yantek_performance_middle_perf }}</button>
                                        <button class="btn btn-primary border-light text-light"
                                            style="font-size: 12px;">Top
                                            Perf (>70) : {{ $laporan->yantek_performance_top_perf }}</button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/pln_mobile.jpg') }}" alt="pln_mobile" width="30px"
                                        height="30px">
                                    Rating PLN Mobile
                                </span>
                                <button class="btn btn-primary border-light"
                                    style="font-size: 12px; width:70%;"><span
                                        style="font-weight:bold;">{{ $laporan->rating_plnmobile }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/alarm.png') }}" alt="alarm" width="30px"
                                        height="30px"> RPT
                                    / RCT
                                </span>
                                <button class="btn btn-primary border-light"
                                    style="font-size: 12px; width:58%;"><span
                                        style="font-weight:bold;">{{ $laporan->rpt }}</span></button>
                                <button class="btn btn-primary border-light"
                                    style="font-size: 12px; width:20%;"><span
                                        style="font-weight:bold;">{{ $laporan->rct }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/kinerja.png') }}" alt="kinerja" width="30px"
                                        height="30px">
                                    Kinerja PMT (CBOG/REC/SSO)
                                </span>
                                <button class="btn btn-primary border-light"
                                    style="font-size: 12px; width:40%;"><span
                                        style="font-weight:bold;">{{ $laporan->kinerja_pmt }}</span></button>
                                <button class="btn btn-primary border-light"
                                    style="font-size: 12px; width:20%;"><span
                                        style="font-weight:bold;">{{ $laporan->cbog_rec_sso }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/anomali.png') }}" alt="anomali" width="30px"
                                        height="30px">
                                    Anomali WO
                                </span>
                                <button class="btn btn-primary border-light text-light"
                                    style="font-size: 12px; width:25%;"><span>Lap
                                        Berulang
                                        :
                                        {{ $laporan->anomali_wo_lapberulang }}</span></button>
                                <button class="btn btn-primary border-light text-light"
                                    style="font-size: 12px; width:29%;"><span>Skip Step
                                        :
                                        {{ $laporan->anomali_wo_skipstep }}</span></button>
                                <button class="btn btn-primary border-light text-light"
                                    style="font-size: 12px;"><span>Rating
                                        Negatif :
                                        {{ $laporan->anomali_wo_ratingnegatif }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/safety.jpg') }}" alt="safety" width="30px"
                                        height="30px">
                                    Safety Performance
                                </span>
                                <button class="btn btn-primary border-light text-light"
                                    style="font-size: 11px;"><span>Unsafe Action :
                                        {{ $laporan->safety_performance_unsafeaction }}</span></button>
                                <button class="btn btn-primary border-light text-light"
                                    style="font-size: 11px;"><span>Unsafe Condition :
                                        {{ $laporan->safety_performance_unsafecondiction }}</span></button>
                                <button class="btn btn-primary border-light text-light"
                                    style="font-size: 11px;"><span>Nearmiss :
                                        {{ $laporan->safety_performance_nearmiss }}</span></button>
                                <button class="btn btn-primary border-light text-light"
                                    style="font-size: 11px;"><span>Accident :
                                        {{ $laporan->safety_performance_accident }}</span></button>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning disabled">Efisiensi</button>
                        </div>
                        <div class="container pb-1 pt-2">
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/target.png') }}" alt="target" width="30px"
                                        height="30px">
                                    Target P2TL
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:80%;"
                                    style="width: 70%; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span
                                        style="font-weight:bold;">{{ $laporan->target_p2tl }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/realisasi.png') }}" alt="realisasi"
                                        width="30px" height="30px"> Realisasi P2TL
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:80%;"
                                    style="width: 70%; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span
                                        style="font-weight:bold;">{{ $laporan->realisasi_p2tl }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/top_performance.png') }}" alt="top_performance"
                                        width="30px" height="30px"> Top Performance
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:75%;"
                                    style="width: 180px; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span
                                        style="font-weight:bold;">{{ $laporan->top_performance }} :
                                        {{ $laporan->jumlah_kwhmeter_top_performance }} kWh</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/bottom_performance.png') }}"
                                        alt="bottom_performance" width="30px" height="30px"> Bottom Performance
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:70%;"
                                    style="width: 180px; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span
                                        style="font-weight:bold;">{{ $laporan->bottom_performance }} :
                                        {{ $laporan->jumlah_kwhmeter_bottom_performance }}
                                        kWh</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/meter_prabayar.png') }}" alt="meter_prabayar"
                                        width="30px" height="30px"> Ganti Meter Tua Prabayar
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:65%;"
                                    style="width: 70%; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span
                                        style="font-weight:bold;">{{ $laporan->ganti_meter_tua_prabayar }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/meter_pascabayar.png') }}" alt="meter_pascabayar"
                                        width="30px" height="30px"> Ganti Meter Tua Pascabayar
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:65%;"
                                    style="width: 70%; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span
                                        style="font-weight:bold;">{{ $laporan->ganti_meter_tua_pascabayar }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/saldo.png') }}" alt="saldo" width="30px"
                                        height="30px">
                                    Saldo Meter Tua
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:65%;"
                                    style="width: 70%; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span
                                        style="font-weight:bold;">{{ $laporan->saldo_meter_tua }}</span></button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning disabled">Rekapitulasi ENS / Saving
                                KWH</button>
                        </div>
                        <div class="container pb-1 pt-2">
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/tidak_padam.png') }}" alt="tidak_padam"
                                        width="30px" height="30px">
                                    TIDAK PADAM (PDKB/SAVING KWH PDKB)
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:25%;"
                                    style="width: 200px; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span>{{ $laporan->tidak_padam_pdkb }}</span></button>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:25%;"
                                    style="width: 200px; height: 37px; vertical-align: middle; font-size:11px; position: relative;"><span>{{ $laporan->tidak_padam_savingpdkb }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/padam.png') }}" alt="padam" width="30px"
                                        height="30px">
                                    PADAM (NON PDKB /ENS)
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:40%;"
                                    style="width: 200px; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span>{{ $laporan->padam_nonpdkb }}</span></button>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:25%;"
                                    style="width: 200px; height: 37px; vertical-align: middle; font-size:11px; position: relative;"><span>{{ $laporan->padam_ens }}</span></button>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>
                                    <img src="{{ asset('public/img/sistem.png') }}" alt="sistem" width="30px"
                                        height="30px"> Beban Sistem
                                </span>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:25%;"
                                    style="width: 200px; height: 37px; vertical-align: middle; font-size:11px; position: relative; right: 20px;"><span>{{ $laporan->beban_sistem_pagi }}</span></button>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:25%;"
                                    style="width: 200px; height: 37px; vertical-align: middle; font-size:11px; position: relative;"><span>{{ $laporan->beban_sistem_siang }}</span></button>
                                <button class="btn btn-primary border-light" style="font-size: 12px; width:25%;"
                                    style="width: 200px; height: 37px; vertical-align: middle; font-size:11px; position: relative;"><span>{{ $laporan->beban_sistem_malam }}</span></button>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning disabled">Pelanggan VVIP / VIP /
                                Prioritas</button>
                        </div>
                        <table class="table table-borderless custom-table">
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
                                    <td>{{ $laporan->pelanggan_vvip_jumlahpelanggan }}</td>
                                    <td>{{ $laporan->pelanggan_vvip_padam }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori ii VIP</td>
                                    <td>{{ $laporan->pelanggan_vip_jumlahpelanggan }}</td>
                                    <td>{{ $laporan->pelanggan_vip_padam }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori iii Prioritas</td>
                                    <td>{{ $laporan->pelanggan_prioritas_jumlahpelanggan }}</td>
                                    <td>{{ $laporan->pelanggan_prioritas_padam }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
