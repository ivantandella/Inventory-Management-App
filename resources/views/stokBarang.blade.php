@extends('layouts.main')

@section('title', 'Data Stok Barang')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Data Stok Barang</h1> 
                    @if(((Auth::user()->level) == 'Admin') || ((Auth::user()->level) == 'Gudang'))
                        <a href="{{ route('stok_barang.create') }}" class="btn btn-primary">Tambah</a>
                    @endif 
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="data_table" class="display table" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Supplier</th>
                                <th>Harga (Rp.)</th>
                                <th>Jumlah (pcs)</th>

                                @if(((Auth::user()->level) == 'Admin') || ((Auth::user()->level) == 'Gudang'))
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach( $stok as $barang )
                            <tr>
                                <td>{{ $i++ }}.</td>
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->supplier }}</td>
                                <td>{{ $barang->harga }}</td>
                                <td>{{ $barang->jumlah }}</td>

                                @if(((Auth::user()->level) == 'Admin') || ((Auth::user()->level) == 'Gudang'))
                                    <td><a href="{{ route('stok_barang.editStok', $barang->id) }}" class="btn btn-primary btn-sm">Update Stok</a></td>
                                    <td><a href="{{ route('stok_barang.editHarga', $barang->id) }}" class="btn btn-warning btn-sm">Update Harga</a></td>
                                    <td>
                                        <form action="{{ route('stok_barang.destroy', $barang->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                        </form>
                                    </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection