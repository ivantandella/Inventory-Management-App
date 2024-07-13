<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StokBarang;
use App\Models\BarangMasuk;
use App\Http\Requests;

class StokBarangController extends Controller
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
        $stok = StokBarang::all()->sortByDesc('created_at');
        return view('stokBarang', compact('stok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->level == 'Sales') {
            abort(403);
        }
        return view('tambahBarang'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StokBarangRequest $request)
    {
        StokBarang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'supplier' => $request->supplier,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ]);

        BarangMasuk::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'supplier' => $request->supplier,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'tanggal_masuk' => $request->tanggal,
        ]);

        return redirect(route('stok_barang.index'))->with('status', 'Data barang berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function editHarga($kode_barang)
    {
        if(auth()->user()->level == 'Sales') {
            abort(403);
        }

        $stok = StokBarang::findOrFail($kode_barang);
        return view('updateHarga', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StokBarang  $stokBarang
     * @return \Illuminate\Http\Response
     */
    public function updateHarga(Request $request, $kode_barang)
    {
        $request->validate([
            'harga' => 'required|numeric',
        ]);

        StokBarang::where('kode_barang', $kode_barang)->update([
            'harga' => $request->harga,
        ]);

        BarangMasuk::where('kode_barang', $kode_barang)->update([
            'harga' => $request->harga,
        ]);
        
        return redirect(route('stok_barang.index'))->with('status', 'Harga berhasil diubah!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function editStok($id)
    {
        if(auth()->user()->level == 'Sales') {
            abort(403);
        }

        $stok = StokBarang::findOrFail($id);
        return view('updateStok', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StokBarang  $stokBarang
     * @return \Illuminate\Http\Response
     */
    public function updateStok(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required|numeric',
            'tanggal' => 'required',
        ]);

        $stok = StokBarang::findOrFail($id);
        $stok->update([
            'jumlah' => $stok->jumlah + $request->jumlah,
        ]);

        BarangMasuk::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'supplier' => $request->supplier,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'tanggal_masuk' => $request->tanggal,
        ]);

        return redirect(route('stok_barang.index'))->with('status', 'Stok berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StokBarang  $stokBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StokBarang::destroy($id);
        return redirect(route('stok_barang.index'))->with('status', 'Data barang berhasil dihapus!');
    }
}
