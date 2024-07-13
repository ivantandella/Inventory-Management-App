<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluar';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'sales_id',
        'jumlah',
        'tanggal_keluar',
        'status',
    ];

    public function sales()
    {
        return $this->belongsTo(User::class);
    }
}
