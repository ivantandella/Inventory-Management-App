<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->level == 'Sales') {
            abort(403);
        }

        $stok = BarangMasuk::all()->sortByDesc('created_at');
        return view('barangMasuk', compact('stok'));
    }
}
