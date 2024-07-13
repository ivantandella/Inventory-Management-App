@extends('layouts.main')

@section('title', 'Riwayat Transaksi')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Riwayat Transaksi</h1> <hr>
                    <table id="data_table" class="display table" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah (pcs)</th>
                                <th>Status</th>
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
                                <td>
                                    @if( $barang->status == 'accepted')
                                        <span class="label label-success">Accepted</span>
                                    @elseif( $barang->status == 'waiting')
                                        <span class="label label-warning">Waiting</span>
                                    @elseif( $barang->status == 'rejected')
                                        <span class="label label-danger">Rejected</span>
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