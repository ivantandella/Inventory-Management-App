<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
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
        
        $stok = BarangKeluar::where('status', 'accepted')->get()->sortByDesc('updated_at');
        return view('barangKeluar', compact('stok'));
    }
}
