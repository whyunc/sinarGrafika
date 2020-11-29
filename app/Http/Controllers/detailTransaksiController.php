<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailTransaksiController extends Controller
{
    public function index() {
    	$data_detail =\App\Detail::all();
    	$data_Barang =\App\barang::all();
        $data_autoBarang =\App\barang::OrderBy('nama_barang');
    	return view('AdminTemplate.detailTrans', ['data_detail' => $data_detail], ['data_Barang' => $data_Barang, 'data_autoBarang' => $data_autoBarang]) ;
    }

    public function create(Request $request)
    {

        \App\Transaksi::create($request -> all());
        return redirect ('detailTrans')-> with('sukses', 'data berhasil di input');;
    }
    
}
