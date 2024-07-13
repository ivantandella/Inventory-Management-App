@extends('layouts.main')

@section('title', 'Data Akun')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h1>Data Akun</h1> <hr>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="data_table" class="display table" width="100%" style="font-size: 1.2em">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Level</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach( $users as $user )
                            <tr>
                                <td>{{ $i++ }}.</td>
                                <td>
                                    {{ $user->name }}
                                    @if((Auth::user()->id) == ($user->id))
                                        <span class="label label-primary">You</span>
                                    @endif
                                </td>
                                <td>{{ $user->level }}</td>
                                <td class="text-right">
                                    <a href="{{ route('akun.show', $user->id) }}" class="btn btn-primary">Detail</a>
                                </td>
                                @if((Auth::user()->id) != ($user->id))
                                    <td>
                                        <form action="{{ route('akun.destroy', $user->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>

                                        {{-- <input type="button" class="btn btn-danger" value="Delete" data-toggle="modal" data-target="#delete">
                                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Delete</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus akun ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#" class="btn btn-primary" data-dismiss="modal">Cancel</a>
                                                        <form action="{{ route('akun.destroy', $user->id) }}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <input type="submit" class="btn btn-danger" value="Delete">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </td>
                                @else
                                    <td></td>
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