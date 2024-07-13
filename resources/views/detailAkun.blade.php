@extends('layouts.main')

@section('title', 'Data Akun')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Detail Akun</h1>
                    <table class="table" style="font-size: 1.5em">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td>:</td>
                                <td>{{ $user->level }}</td>
                            </tr>
                            <tr>
                                <td>Hp/Telp</td>
                                <td>:</td>
                                <td>{{ $user->hp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $user->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><a href="{{ route('akun.index') }}" class="btn btn-primary">Back</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection