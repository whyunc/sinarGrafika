<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $primaryKey = 'id_detail';
    protected $table = 'detail_transaksi';
    protected $fillable = [
    	'id_detail',
    	'nama_barang',
    	'harga_barang',
    	'jumlah_barang',
    	'total_harga',
    	'created_at'
    ];

    public function barang()
    {
        return $this -> belongsTo(Barang::class);
    }
}

