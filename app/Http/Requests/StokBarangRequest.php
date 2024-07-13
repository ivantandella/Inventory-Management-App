<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StokBarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kode_barang' => 'required|size:4|unique:stok_barang',
            'nama_barang' => 'required',
            'supplier' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required',
        ];
        
        // $rules = [
        //     'kode_barang' => 'required|size:4|unique:stok_barang',
        //     'nama_barang' => 'required',
        //     'supplier' => 'required',
        //     'harga' => 'required|numeric',
        //     'jumlah' => 'required|numeric',
        //     'tanggal' => 'required',
        // ];

        // switch($this->method()) {
        //     case 'PUT': $rules['kode_barang'] = 'required' . $this->route('stok_barang.editHarga');
        //     break;
        // }

        // return $rules;
    }
}
