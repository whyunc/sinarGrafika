<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JeBarang extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_jenis';
    protected $fillable = [
    	'id_jenis', 
    	'id_kategori',
    	'image','judul', 
    	'harga_Art', 
    	'deskripsi'
    ];
    
}
