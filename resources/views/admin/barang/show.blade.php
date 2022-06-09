@extends('layouts.admin')

@section('header')
    BARANG
@endsection

@section('content')
    <div class="card card-default col-md-12">
        <div class="card-heading">Tampilkan Data Barang</h4></span>
            <a href="{{ route('barang.index') }}" class="btn btn-default text-dark" style="float: right;"><span
                    class="fa fa-arrow-left">&nbsp;</span> Kembali</a>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <img src="{{ $barang->image() }}" width="300" alt="">
                    </div>
                    <div class="col">
                        <label for="">Nama Barang : </label>
                        <h1>{{ $barang->nama_barang }}</h1>
                        <h3>Warna : {{ $barang->warna }}</h3>
                        <h3>Harga : {{ $barang->harga }}</h3>
                        <h2>Stok : {{ $barang->stok }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
