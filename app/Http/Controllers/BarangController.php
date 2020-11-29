<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data_Barang =\App\Barang::where('nama_barang','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_Barang =\App\Barang::all();
        }
    	
    	return view('AdminTemplate.Barang', ['data_Barang' => $data_Barang]);	
    }

    public function create(Request $request)
    {
    	\App\Barang::create($request -> all());
    	return redirect ('Barang')-> with('sukses', 'data berhasil di input');
    }

    public function edit($id_barang)
    {
    	$Barang =\App\Barang::find($id_barang);
    	return view('AdminTemplate.editBarang',['Barang' => $Barang]);
    }

    public function update(Request $request, $id_barang)
    {
    	$Barang = \App\Barang::find($id_barang);
    	$Barang -> update($request -> all());
        return redirect ('Barang')-> with('sukses', 'data berhasil di update');
    }

    //function delete
    public function delete($id_barang)
    {
    	$Barang = \App\Barang::find($id_barang);
    	$Barang -> delete($Barang);
    	return redirect('Barang')-> with('sukses','data berhasil di hapus');
    }
}
