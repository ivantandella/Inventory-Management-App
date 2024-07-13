<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('profile');
    }

    public function edit($id)
    {
        if($id != auth()->user()->id) {
            abort(403);
        }
        
        $user = User::findOrFail($id);
        return view('editProfile', compact('user'));
    }

    public function update(Requests\ProfileRequest $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'hp' => $request->hp,
            'alamat' => $request->alamat,
            'email' => $request->email,
        ]);
        return redirect(route('profile.index'))->with('status', 'Data berhasil diubah!');
    }
}
