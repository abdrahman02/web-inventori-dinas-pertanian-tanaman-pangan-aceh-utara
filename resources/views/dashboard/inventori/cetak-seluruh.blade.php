<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data | Dinas Pertanian dan Pangan</title>

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->

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

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-2">
                <img src="{{ asset('img/logo_dinas_pertanian_tanaman_pangan_aceh_utara.png') }}" alt="" style="max-height: 100px">
            </div>
            <div class="col-lg-10">
                <h4 class="card-title mb-3 mt-4 text-center fw-bold">LAPORAN MUTASI ASET</h4>
                <h4 class="card-title mb-0 text-center fw-bold">PEMERINTAH KABUPATEN/KOTA</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Id</th>
                        <th class="text-center">Nama Barang</th>
                        <th class="text-center">Merk</th>
                        <th class="text-center">Bahan</th>
                        <th class="text-center">Tahun Perolehan</th>
                        <th class="text-center">Asal-Usul</th>
                        <th class="text-center">Kondisi</th>
                        <th class="text-center" colspan="2">Mutasi Tambah Aset/Kapitalisasi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($barang->count())
                    @foreach ($barang as $key => $item)
                    <tr class="align-middle">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $item->id }}</td>
                        <td class="text-center">{{ $item->nama_barang }}</td>
                        <td class="text-center">{{ $item->merk }}</td>
                        <td class="text-center">{{ $item->bahan }}</td>
                        <td class="text-center">{{ $item->tgl_perolehan }}</td>
                        <td class="text-center">{{ $item->asal_usul }}</td>
                        <td class="text-center">{{ $item->kondisi }}</td>
                        <td class="text-center">{{ $item->jumlah }}</td>
                        <td class="text-center">Rp. {{ $item->kap_barang }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td class="text-center" colspan="8">TOTAL</td>
                        <td class="text-center">{{ $ttl_barang }}</td>
                        <td class="text-center">Rp. {{ $ttl_harga }}</td>
                    </tr>
                    @else
                    <small class="d-flex justify-content-center text-danger mb-2"><em>Data
                            Kosong</em></small>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <script>
        window.print();
    </script>
    
</body>

</html>