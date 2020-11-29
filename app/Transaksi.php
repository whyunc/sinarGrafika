<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $primaryKey = 'id_transaksi';
    protected $table = 'transaksi';
    protected $fillable = [
    	'id_transaksi', 
    	'nama_kategori',
    	'nama_barang',
    	'harga_barang',
    	'jumlah_barang',
    	'total_harga',
    	'created_at'
    ];
}
