@extends('layouts.main')

@section('title', 'Data Barang Masuk')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Data Barang Masuk</h1> <hr>
                    <table id="data_table" class="display table" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Supplier</th>
                                <th>Harga (Rp.)</th>
                                <th>Jumlah (pcs)</th>
                                <th>Tanggal Masuk</th>
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
                                <td>{{ date('d-m-Y', strtotime($barang->tanggal_masuk)) }}</td>
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