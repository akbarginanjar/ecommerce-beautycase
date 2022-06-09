@extends('layouts.admin')

@section('header')
    BARANG
@endsection

@section('content')
    <div class="card card-default col-md-12">
        <div class="card-heading">Form Tambah Barang</h4></span>
            <a href="{{ route('barang.index') }}" class="btn btn-default text-dark" style="float: right;"><span
                    class="fa fa-arrow-left">&nbsp;</span> Kembali</a>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <form class="form-horizontal form-material" enctype="multipart/form-data" role="form"
                    action="{{ route('barang.store') }}" method="post">
                    @csrf
                    <div class="form-group @error('gambar') has-error @enderror">
                        <div class="col-md-12 border-bottom p-0">
                            <label>Masukan Foto</label>
                            <input class="form-control p-0 @error('gambar') is-invalid @enderror" required="required"
                                name="gambar" type="file" value="" id="gambar">
                            @error('gambar')
                                <span class="invalid-feedback" style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group @error('nama_barang') has-error @enderror">
                        <label>Nama Barang</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" name="nama_barang"
                                class="form-control p-0 border-0 @error('nama_barang') is-invalid @enderror"
                                placeholder="Nama Barang">
                            @error('nama_barang')
                                <span class="invalid-feedback" style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" name="warna"
                                class="form-control p-0 border-0 @error('warna') is-invalid @enderror" placeholder="Warna">
                            @error('warna')
                                <span class="invalid-feedback" style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Masukan Qty</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="number" name="stok"
                                class="form-control p-0 border-0 @error('stok') is-invalid @enderror"
                                placeholder="Masukan qty">
                            @error('stok')
                                <span class="invalid-feedback" style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="number" name="harga"
                                class="form-control p-0 border-0 @error('harga') is-invalid @enderror"
                                placeholder="Masukan harga">
                            @error('harga')
                                <span class="invalid-feedback" style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success text-white" type="submit">Simpan</button>
                        <button class="btn btn-default text-dark" type="reset">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
@endsection
