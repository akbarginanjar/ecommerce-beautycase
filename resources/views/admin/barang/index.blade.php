@extends('layouts.admin')

@section('header')
    BARANG
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#barang').DataTable();
        });
    </script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection

@section('content')
    <h1>Data Barang</h1>
    <div class="card card-default col-md-12">
        <div class="card-heading">Barang
            <a href="{{ route('barang.create') }}" class="btn btn-success text-white" style="float: right;"><span
                    class="fa fa-plus">&nbsp;</span> tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="barang" class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Warna</th>
                            <th class="text-center">Stok</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- data -->
                        @php $no=1 @endphp
                        <!-- data -->
                        @foreach ($barang as $data)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td class="text-center"><img src="{{ $data->image() }}" alt=""
                                        style="width:150px; height:150px;" alt="foto"></td>
                                <td class="text-center">{{ $data->nama_barang }}</td>
                                <td class="text-center">{{ $data->warna }}</td>
                                <td class="text-center">{{ $data->stok }}</td>
                                <td class="text-center">{{ $data->harga }}</td>
                                <td class="text-center">
                                    <form class="text-center" action="{{ route('barang.destroy', $data->id) }}"
                                        method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('barang.show', $data->id) }}"
                                            class="btn btn-info text-white">Lihat</a>
                                        <a href="{{ route('barang.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                        <button type="submit"
                                            class="btn btn-danger text-white delete-confirm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
