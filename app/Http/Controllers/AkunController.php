<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AkunController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:isAdmin');
    }

    public function index()
    {
        $users = User::all()->sortBy('level');
        return view('dataAkun', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('detailAkun', compact('user'));
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect(route('akun.index'))->with('status', 'Data berhasil dihapus');
    }
}
