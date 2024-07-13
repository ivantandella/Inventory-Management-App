@extends('layouts.main')

@section('title', 'Tambah Barang')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Tambah Barang</h1> <hr>
                    <form method="POST" action="{{ route('stok_barang.store') }}">
                        @csrf
                        <div class="form-group @error('kode_barang') has-error @enderror">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}">
                            @error('kode_barang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group @error('nama_barang') has-error @enderror">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}">
                            @error('nama_barang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group @error('supplier') has-error @enderror">
                            <label for="supplier">Supplier</label>
                            <input type="text" class="form-control" name="supplier" id="supplier" value="{{ old('supplier') }}">
                            @error('supplier')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group @error('harga') has-error @enderror">
                            <label for="harga">Harga (Rp.)</label>
                            <input type="text" class="form-control" name="harga" id="harga" value="{{ old('harga') }}">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group @error('jumlah') has-error @enderror">
                            <label for="jumlah">Jumlah (pcs)</label>
                            <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{ old('jumlah') }}">
                            @error('jumlah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group @error('tanggal') has-error @enderror">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ old('tanggal') }}">
                            @error('tanggal')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Tambah">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection