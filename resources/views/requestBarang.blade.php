@extends('layouts.main')

@section('title', 'Request Barang')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Request Barang</h1> <hr>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div> 
                    @endif
                    <form method="POST" action="{{ route('request_barang.store')}}">
                        @csrf
                        <input type="hidden" name="sales_id" value="{{ Auth::user()->id }}">
                        <div class="form-group @error('kode_barang') has-error @enderror">
                            <label for="kode_barang">Pilih Barang</label>
                            <select name="kode_barang" id="kode_barang" class="form-control">
                                <option value="pilih">--- Pilih ---</option>
                                @foreach( $data as $barang)
                                <option value="{{ $barang->kode_barang }}">
                                    {{ $barang->kode_barang }} - {{ $barang->nama_barang }} ({{ $barang->jumlah }} pcs)
                                </option>
                                @endforeach
                            </select>
                            @error('kode_barang')
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
                        <input type="submit" class="btn btn-primary" value="Kirim">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection