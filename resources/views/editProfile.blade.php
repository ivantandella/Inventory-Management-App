@extends('layouts.main')

@section('title', 'Edit Profile')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Edit Profile</h1> <hr>
                    <form method="POST" action="{{ route('profile.update', $user->id) }}">
                        @method('put')
                        @csrf
                        <div class="form-group @error('name') has-error @enderror">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group @error('level') has-error @enderror">
                            <label for="level">Level</label>
                            <input type="text" class="form-control" name="level" id="level" value="{{ $user->level }}" disabled>
                            @error('level')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group @error('hp') has-error @enderror">
                            <label for="hp">Hp/Telp</label>
                            <input type="text" class="form-control" name="hp" id="hp" value="{{ $user->hp }}">
                            @error('hp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group @error('alamat') has-error @enderror">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $user->alamat }}">
                            @error('alamat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group @error('email') has-error @enderror">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection