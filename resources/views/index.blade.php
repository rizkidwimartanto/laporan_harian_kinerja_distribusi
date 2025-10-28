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

        /* TOTAL WO */
        .total-wo {
            top: 26.3%;
            left: 40.2%;
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

            <!-- SAFETY PERFORMANCE -->
            <p class="data-text safety">{{ $laporan->safety_performance }}</p>
        @endforeach
    </div>
</body>

</html>
