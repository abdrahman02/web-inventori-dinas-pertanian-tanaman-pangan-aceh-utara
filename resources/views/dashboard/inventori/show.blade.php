@extends('dashboard.layouts.main')

@section('isi')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                    Inventori Barang
                </h2>
                <a href="/dashboard" class="btn btn-danger mt-2">Back</a>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Data</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-vcenter card-table border-none">
                            <tr>
                                <th>Id Barang</th>
                                <td>: {{ $item->id }}</td>
                            </tr>
                            <tr>
                                <th>Nama Barang</th>
                                <td>: {{ $item->nama_barang }}</td>
                            </tr>
                            <tr>
                                <th>Merk</th>
                                <td>: {{ $item->merk }}</td>
                            </tr>
                            <tr>
                                <th>Bahan</th>
                                <td>: {{ $item->bahan }}</td>
                            </tr>
                            <tr>
                                <th>Tahun Perolehan</th>
                                <td>: {{ $item->tgl_perolehan }}</td>
                            </tr>
                            <tr>
                                <th>Asal - Usul</th>
                                <td>: {{ $item->asal_usul }}</td>
                            </tr>
                            <tr>
                                <th>Kondisi</th>
                                <td>: {{ $item->kondisi }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah</th>
                                <td>: {{ $item->jumlah }}</td>
                            </tr>
                            <tr>
                                <th>Kapitalisasi Barang</th>
                                <td>: Rp. {{ $item->kap_barang }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection