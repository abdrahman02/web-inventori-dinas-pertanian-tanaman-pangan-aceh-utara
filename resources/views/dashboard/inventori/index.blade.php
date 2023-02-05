@extends('dashboard.layouts.main')

@section('isi')

<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Dashboard
                </div>
                <h2 class="page-title">
                    Daftar Inventori
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="/dashboard/cetak-seluruh" target="_blank" class="btn btn-success d-none d-sm-inline-block">
                        Cetak Data
                    </a>
                </div>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="/dashboard/create" class="btn btn-primary d-none d-sm-inline-block">
                        Tambah Data
                    </a>
                </div>
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
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Id Barang</th>
                                    <th class="text-center">Nama Barang</th>
                                    <th class="text-center">Tahun Perolehan</th>
                                    <th class="text-center">Asal - Usul</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($barang->count())
                                @foreach ($barang as $key => $item)
                                <tr>
                                    <td class="text-center">{{ $barang->firstItem() + $key }}</td>
                                    <td class="text-center text-muted">{{ $item->id }}</td>
                                    <td class="text-muted">{{ $item->nama_barang }}</td>
                                    <td class="text-center text-muted">{{ $item->tgl_perolehan }}</td>
                                    <td class="text-center text-muted">{{ $item->asal_usul }}</td>
                                    <td class="text-center text-muted">{{ $item->jumlah }}</td>
                                    <td class="d-flex justify-content-between">
                                        <a class="badge bg-info" href="/dashboard/{{ $item->id }}">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                        <a class="badge bg-warning" href="/dashboard/{{ $item->id }}/edit">
                                            <i class="mdi mdi-pencil-box"></i>
                                        </a>
                                        <a class="badge bg-danger" href="#" onclick="if(confirm('Apakah anda yakin ingin menghapus data?')) {event.preventDefault(); document.getElementById('delete-form').submit();}">
                                            <i class="mdi mdi-trash-can-outline"></i>
                                            <form action="/dashboard/{{ $item->id }}" method="post" id="delete-form" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <small class="d-flex justify-content-center text-danger mb-2"><em>Data
                                        Kosong</em></small>
                                @endif
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $barang->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection