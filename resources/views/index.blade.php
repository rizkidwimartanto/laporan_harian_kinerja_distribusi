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
            background: url('{{ asset('public/img/background_laporan.png') }}') no-repeat center fixed;
            background-size: cover;
            background-position: center 1px;
        }

        .title_content {
            position: relative;
            top: 15px;
        }

        p {
            font-size: 12px;
        }

        .custom-table th {
            height: 50px;
            vertical-align: middle;
            text-align: center;
            padding-left: 20px;
            padding-right: 20px;
        }

        .custom-table,
        .custom-table td,
        .custom-table th {
            background-color: transparent !important;
        }

        span {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h4 class="text-center text-dark title_content f">Laporan Harian Kinerja Distribusi UP3 Grobogan</h4>
    <p class="text-center mt-3" style="font-size: 20px;">{{ $tanggal_sekarang }}</p>
     @foreach ($laporanHariIni as $laporan)
    <div class="kenadalan_k3">
        <div class="totalwo_p0">
            <p style="position:absolute; left:442px; top:190px; font-size: 20px; font-weight: bold;">{{ $laporan->totalwo }}</p>
            <p style="position:absolute; left:442px; top:190px; font-size: 20px; font-weight: bold;">{{ $laporan->totalp0 }}</p>
        </div>
    </div>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
