<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Dinas Pertanian dan Pangan</title>

    <!-- CSS files -->
    <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}">
    <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.min.css') }}" rel="stylesheet" />

    {{-- Inter Font --}}
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Black.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Bold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-ExtraBold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-ExtraLight.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Light.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Medium.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Regular.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-SemiBold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Thin.ttf') }}">

    <link rel="shortcut icon" href="{{ asset('img/logo_dinas_pertanian_tanaman_pangan_aceh_utara.png') }}" type="image/x-icon">

</head>

<body>

    <div class="page">
        @include('dashboard.partials.navbar')
        <div class="page-wrapper">
            @yield('isi')
        </div>
    </div>


    <script src="{{ asset('js/tabler.min.js') }}"></script>
    <script src="{{ asset('js/demo.min.js') }}"></script>

</body>

</html>