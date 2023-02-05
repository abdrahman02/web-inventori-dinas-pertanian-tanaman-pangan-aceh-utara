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
                    <form action="/dashboard" method="POST">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Data</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="nama_barang">Nama Barang</label>
                                <div>
                                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                        placeholder="Nama Barang" id="nama_barang" name="nama_barang" required autofocus
                                        value="{{ old('nama_barang') }}">
                                    @error('nama_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="merk">Merk</label>
                                <div>
                                    <input type="text" class="form-control @error('merk') is-invalid @enderror"
                                        placeholder="Merk" id="merk" name="merk" required value="{{ old('merk') }}">
                                    @error('merk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bahan">Bahan</label>
                                <div>
                                    <input type="text" class="form-control @error('bahan') is-invalid @enderror"
                                        placeholder="Bahan" id="bahan" name="bahan" required value="{{ old('bahan') }}">
                                    @error('bahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="tgl_perolehan">Tahun Perolehan</label>
                                <div>
                                    <input type="text" class="form-control @error('tgl_perolehan') is-invalid @enderror"
                                        placeholder="Tahun Perolehan" id="tgl_perolehan" name="tgl_perolehan" required
                                        data-mask="0000" data-mask-visible="true" placeholder="0000"
                                        autocomplete="off" value="{{ old('tgl_perolehan') }}">
                                    @error('tgl_perolehan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="asal_usul">Asal Usul</label>
                                <div>
                                    <input type="text" class="form-control @error('asal_usul') is-invalid @enderror"
                                        placeholder="Asal Usul" id="asal_usul" name="asal_usul" required
                                        value="{{ old('asal_usul') }}">
                                    @error('asal_usul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="kondisi">Kondisi</label>
                                <div>
                                    <select class="form-control form-select @error('kondisi') is-invalid @enderror"
                                        id="kondisi" name="kondisi" required>
                                        <option value="Baik" selected>Baik</option>
                                        <option value="Buruk">Buruk</option>
                                    </select>
                                    @error('kondisi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="jumlah">Jumlah</label>
                                <div>
                                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror"
                                        placeholder="Jumlah" id="jumlah" name="jumlah" required
                                        value="{{ old('jumlah') }}">
                                    @error('jumlah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="jumlah">Kapitalisasi Barang</label>
                                <div>
                                    <input type="text" class="form-control @error('kap_barang') is-invalid @enderror"
                                        placeholder="Rupiah" id="kap_barang" name="kap_barang"
                                        value="{{ old('kap_barang') }}">
                                    @error('kap_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-start">
                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                <a href="/dashboard" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection