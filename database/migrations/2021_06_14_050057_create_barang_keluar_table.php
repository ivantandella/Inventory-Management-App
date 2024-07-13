<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->char('kode_barang', 4);
            $table->string('nama_barang');
            $table->integer('jumlah');
            $table->unsignedBigInteger('sales_id');
            $table->foreign('sales_id')->references('id')->on('users')->onDelete('restrict');
            $table->date('tanggal_keluar');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_keluar');
    }
}
