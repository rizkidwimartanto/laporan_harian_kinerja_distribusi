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
            top: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h2 class="text-center text-dark title_content">Laporan Harian Kinerja Distribusi <br>UP3 Grobogan</h2>
        <div class="row" style="margin-top: 60px;">
            <div class="col-lg-6 col-md-12">
                <div class="d-grid gap-2 mb-2">
                    <button class="btn btn-primary disabled">Keandalan & K3</button>
                </div>
                <div class="container">
                    <p><img src="{{asset('public/img/weather.png')}}" alt="cuaca" width="30px" height="30px"> Cuaca</p>
                    <p><img src="{{asset('public/img/report.png')}}" alt="cuaca" width="30px" height="30px"> Total WO</p>
                    <p><img src="{{asset('public/img/customer-service.png')}}" alt="cuaca" width="30px" height="30px"> Total VCC</p>
                    <p><img src="{{asset('public/img/report.png')}}" alt="cuaca" width="30px" height="30px"> Yantek Performance</p>
                    <p><img src="{{asset('public/img/pln_mobile.jpg')}}" alt="cuaca" width="30px" height="30px"> Rating 1-2 PLN Mobile</p>
                    <p>RPT / RCT</p>
                    <p>Kinerja PMT (CBOG/REC/SSO)</p>
                    <p>Anomali WO</p>
                    <p>Safety Performance</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="d-grid gap-2 mb-2">
                    <button class="btn btn-primary disabled">Efisiensi</button>
                </div>
                <div class="container">
                    <p>Target P2TL</p>
                    <p>Realisasi P2TL</p>
                    <p>Top Performance</p>
                    <p>Bottom Performance</p>
                    <p>Ganti Meter Tua Prabayar</p>
                    <p>Ganti Meter Tua Pascabayar</p>
                    <p>Saldo Meter Tua</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
