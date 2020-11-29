<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $primaryKey = 'id_barang';
    protected $table = 'barang';
    protected $fillable = ['id_barang', 'nama_barang','harga_barang'];

    public function detail()
    {
    	return $this -> hasMany(Detail::class);
    }
}
