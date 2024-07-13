@extends('layouts.main')

@section('title', 'Profile')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Profile</h1>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table" style="font-size: 1.5em">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td>:</td>
                                <td>{{ Auth::user()->level }}</td>
                            </tr>
                            <tr>
                                <td>Hp/Telp</td>
                                <td>:</td>
                                <td>{{ Auth::user()->hp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ Auth::user()->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                {{-- <td><a href="/profile/{{Auth::user()->id}}/edit" class="btn btn-primary">Edit</a></td> --}}
                                <td><a href="{{ route('profile.edit', Auth::user()->id ) }}" class="btn btn-primary">Edit</a></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection