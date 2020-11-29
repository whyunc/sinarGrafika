<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaBarang extends Model
{
	protected $primaryKey = 'id_kategori';
    protected $table = 'kategori_barang';
    protected $fillable = ['id_kategori', 'nama_kategori'];

    
}
