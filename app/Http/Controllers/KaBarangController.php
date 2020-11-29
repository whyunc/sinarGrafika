<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaBarangController extends Controller
{
	//mem-passing data ke file KaBarang dengan database
    public function index (Request $request)
    {
        if ($request->has('search')) {
            $data_KaBarang =\App\KaBarang::where('nama_kategori','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_KaBarang =\App\KaBarang::all();
        }
    	
    	return view('AdminTemplate.KaBarang', ['data_KaBarang' => $data_KaBarang]);
    }


    //function create
    public function create(Request $request)
    {
    	\App\KaBarang::create($request -> all());
    	return redirect ('KaBarang')-> with('sukses', 'data berhasil di input');
    }

    //function edit
    public function edit($id_kategori)
    {
    	$KaBarang = \App\KaBarang::find($id_kategori);
        return view('AdminTemplate.editKaBarang', ['KaBarang' => $KaBarang]);
    }
    //function update
    public function update(Request $request, $id_kategori)
    {
        $KaBarang = \App\KaBarang::find($id_kategori);
        $KaBarang -> update($request -> all());
        return redirect ('KaBarang')-> with('sukses', 'data berhasil di update');
    }

    //function delete
    public function delete($id_kategori)
    {
    	$KaBarang = \App\KaBarang::find($id_kategori);
    	$KaBarang -> delete($KaBarang);
    	return redirect('KaBarang')-> with('sukses','data berhasil di hapus');
    }


    


}
