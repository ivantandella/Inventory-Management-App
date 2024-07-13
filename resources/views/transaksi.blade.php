@extends('layouts.main')

@section('title', 'Data Transaksi')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Data Transaksi</h1> <hr>
                    @if (session('accept'))
                        <div class="alert alert-success">
                            {{ session('accept') }}
                        </div>
                    @elseif (session('reject'))
                        <div class="alert alert-danger">
                            {{ session('reject') }}
                        </div>
                    @endif
                    <table id="data_table" class="display table" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah (pcs)</th>
                                <th>Sales</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach( $data as $barang )
                            <tr>
                                <td>{{ $i++ }}.</td>
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->jumlah }}</td>
                                <td>{{ $barang->sales->name }}</td>
                                <td>
                                    @if( $barang->status == 'accepted' )
                                        <span class="label label-success">Accepted</span>
                                    @elseif( $barang->status == 'waiting' )
                                        <form method="POST" action="{{ route('accept', $barang->id_transaksi) }}">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="kode_barang" value="{{ $barang->kode_barang }}">
                                            <input type="hidden" name="jumlah" value="{{ $barang->jumlah }}">
                                            <input type="submit" class="btn btn-success btn-xs" value="Accept">
                                        </form>
                                    @elseif( $barang->status == 'rejected' )
                                        <span class="label label-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>
                                    @if( $barang->status == 'waiting' )
                                        <form method="POST" action="{{ route('reject', $barang->id_transaksi) }}">
                                            @method('PUT')
                                            @csrf
                                            <input type="submit" class="btn btn-danger btn-xs" value="Reject">
                                        </form>
                                    @endif
                                </td>
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