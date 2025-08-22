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
            background: url('{{ asset('public/img/Background.png') }}') no-repeat center fixed;
            background-size: cover;
            background-position: center 1px;
        }

        .title_content {
            position: relative;
            top: 10px;
        }

        P {
            font-size: 12px;
        }

        .custom-table,
        .custom-table td {
            background-color: transparent !important;
        }
        .custom-table th {
            height: 50px;
            vertical-align: middle;
            text-align: center;
            background-color: aqua;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h4 class="text-center text-dark title_content">Laporan Harian Kinerja Distribusi <br>UP3 Grobogan</h4>
        <div class="row" style="margin-top: 25px;">
            <div class="col-lg-6 col-md-12">
                <div class="d-grid gap-2 mb-2">
                    <button class="btn btn-primary disabled">Keandalan & K3</button>
                </div>
                <div class="container">
                    <p><img src="{{ asset('public/img/weather.png') }}" alt="cuaca" width="30px" height="30px">
                        Cuaca</p>
                    <p><img src="{{ asset('public/img/report.png') }}" alt="report" width="30px" height="30px">
                        Total WO</p>
                    <p><img src="{{ asset('public/img/customer-service.png') }}" alt="customer-service" width="30px"
                            height="30px"> Total VCC</p>
                    <p><img src="{{ asset('public/img/performance.png') }}" alt="performance" width="30px"
                            height="30px">
                        Yantek Performance</p>
                    <p><img src="{{ asset('public/img/pln_mobile.jpg') }}" alt="pln_mobile" width="30px"
                            height="30px">
                        Rating 1-2 PLN Mobile</p>
                    <p><img src="{{ asset('public/img/alarm.png') }}" alt="alarm" width="30px" height="30px"> RPT
                        / RCT</p>
                    <p><img src="{{ asset('public/img/kinerja.png') }}" alt="kinerja" width="30px" height="30px">
                        Kinerja PMT (CBOG/REC/SSO)</p>
                    <p><img src="{{ asset('public/img/anomali.png') }}" alt="anomali" width="30px" height="30px">
                        Anomali WO</p>
                    <p><img src="{{ asset('public/img/safety.jpg') }}" alt="safety" width="30px" height="30px">
                        Safety Performance</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="d-grid gap-2 mb-2">
                    <button class="btn btn-primary disabled">Efisiensi</button>
                </div>
                <div class="container">
                    <p><img src="{{ asset('public/img/target.png') }}" alt="target" width="30px" height="30px">
                        Target P2TL</p>
                    <p><img src="{{ asset('public/img/realisasi.png') }}" alt="realisasi" width="30px"
                            height="30px"> Realisasi P2TL</p>
                    <p><img src="{{ asset('public/img/top_performance.png') }}" alt="top_performance" width="30px"
                            height="30px"> Top Performance</p>
                    <p><img src="{{ asset('public/img/bottom_performance.png') }}" alt="bottom_performance"
                            width="30px" height="30px"> Bottom Performance</p>
                    <p><img src="{{ asset('public/img/meter_prabayar.png') }}" alt="meter_prabayar" width="30px"
                            height="30px"> Ganti Meter Tua Prabayar</p>
                    <p><img src="{{ asset('public/img/meter_pascabayar.png') }}" alt="meter_pascabayar" width="30px"
                            height="30px"> Ganti Meter Tua Pascabayar</p>
                    <p><img src="{{ asset('public/img/saldo.png') }}" alt="saldo" width="30px" height="30px">
                        Saldo Meter Tua</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="d-grid gap-2 mb-2">
                    <button class="btn btn-primary disabled">Rekapitulasi ENS / Saving KWH</button>
                </div>
                <div class="container">
                    <p><img src="{{ asset('public/img/tidak_padam.png') }}" alt="tidak_padam" width="30px"
                            height="30px">
                        Tidak Padam</p>
                    <p><img src="{{ asset('public/img/padam.png') }}" alt="padam" width="30px" height="30px">
                        Padam</p>
                    <p><img src="{{ asset('public/img/sistem.png') }}" alt="sistem" width="30px"
                            height="30px"> Beban Sistem</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="d-grid gap-2 mb-2">
                    <button class="btn btn-primary disabled">Pelanggan VVIP / VIP / Prioritas</button>
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
                            <td>Kategori 1</td>
                            <td>Jumlah 1</td>
                            <td>Padam 1</td>
                        </tr>
                        <tr>
                            <td>Kategori 1</td>
                            <td>Jumlah 1</td>
                            <td>Padam 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
