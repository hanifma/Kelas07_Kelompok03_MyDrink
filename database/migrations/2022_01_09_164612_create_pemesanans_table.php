<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_brand');
            $table->string('alamat_usaha');
            $table->string('bukti_surat_usaha');
            $table->date('tanggal_order');
            $table->date('tanggal_jadi');
            $table->string('deskripsi');
            $table->integer('jumlah_produk');
            $table->integer('jumlah_harga');
            $table->string('bukti_pembayaran');
            $table->string('bukti_pelunasan');
            $table->string('catatan');
            $table->integer('status');
            $table->foreignUuid('id_pelanggan');
            $table->foreignUuid('id_pegawai');
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
        Schema::dropIfExists('pemesanans');
    }
}
