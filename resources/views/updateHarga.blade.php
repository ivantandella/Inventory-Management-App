@extends('layouts.main')

@section('title', 'Update Harga')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Update Harga</h1> <hr>
                    <form method="POST" action="{{ route('stok_barang.updateHarga', $stok->kode_barang) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang" id="kode_barang" value="{{ $stok->kode_barang }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{ $stok->nama_barang }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="supplier">Supplier</label>
                            <input type="text" class="form-control" name="supplier" id="supplier" value="{{ $stok->supplier }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah (pcs)</label>
                            <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{ $stok->jumlah }}" readonly>
                        </div>
                        <div class="form-group @error('harga') has-error @enderror">
                            <label for="harga">Harga Satuan (Rp.)</label>
                            <input type="text" class="form-control" name="harga" id="harga" value="{{ $stok->harga }}">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-success" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection