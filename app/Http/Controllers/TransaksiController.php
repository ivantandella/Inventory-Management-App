<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\BarangKeluar;
use App\Models\StokBarang;

class TransaksiController extends Controller
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

        $data = BarangKeluar::all()->sortbyDesc('created_at');
        return view('transaksi', compact('data'));
    }

    public function riwayatTransaksi()
    {
        if((auth()->user()->level == 'Admin') || (auth()->user()->level == 'Gudang')) {
            abort(403);
        }

        $data = BarangKeluar::where('sales_id', Auth::user()->id)->get()->sortByDesc('created_at');
        return view('riwayatTransaksi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if((auth()->user()->level == 'Admin') || (auth()->user()->level == 'Gudang')) {
            abort(403);
        }
        
        $data = StokBarang::all();
        return view('requestBarang', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => ['required', Rule::notIn(['pilih'])],
            'jumlah' => 'required|numeric',
        ]);
         
        $data = StokBarang::where('kode_barang', $request->kode_barang)->first();
        $tanggal = date('Y-m-d');
        BarangKeluar::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $data->nama_barang,
            'jumlah' => $request->jumlah,
            'sales_id' => $request->sales_id,
            'tanggal_keluar' => $tanggal,
            'status' => 'waiting',
        ]);

        return redirect(route('request_barang'))->with('status', 'Permintaan barang telah dikirim!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function accept(Request $request, $id_transaksi)
    {
        $tanggal = date('Y-m-d');
        BarangKeluar::where('id_transaksi', $id_transaksi)->update([
            'status' => 'accepted',
            'tanggal_keluar' => $tanggal,
        ]);

        $stok = StokBarang::where('kode_barang', $request->kode_barang)->first();
        $stok->update([
            'jumlah' => ($stok->jumlah) - ($request->jumlah),
        ]);

        return redirect(route('transaksi.index'))->with('accept', 'Transaksi diterima!');
    }

    public function reject(Request $request, $id_transaksi)
    {
        BarangKeluar::where('id_transaksi', $id_transaksi)->update([
            'status' => 'rejected',
        ]);
        return redirect(route('transaksi.index'))->with('reject', 'Transaksi ditolak!');
    }
}
