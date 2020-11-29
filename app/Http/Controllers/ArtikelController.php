<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    public function index (Request $request) 
    {
        if ($request -> has('search')) {
            $data_JeBarang =\App\JeBarang::where('judul','LIKE','%'.$request->search.'%')->get();
        }else {
            $data_JeBarang =\App\JeBarang::all();
        }
    	
    	$data_KaBarang =\App\KaBarang::all();
    	return view('AdminTemplate.Artikel', ['data_JeBarang' => $data_JeBarang], ['data_KaBarang' => $data_KaBarang]);


    }

    //function create
    public function create (Request $request) 
    {
    	//dd($request -> all());
    	$file = \App\JeBarang::create($request -> all());

        if ($request -> hasFile('image')) {
            $request -> file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $file ->image = $request -> file('image')->getClientOriginalName();
            $file->save();
        }
        
    	return redirect ('Artikel')-> with('sukses', 'data berhasil di input');

        //$Artikel = new JeBarang();

        //$Artikel->id_jenis = $request->input('id_jenis');
        //$Artikel->id_kategori = $request->input('id_kategori');
        //$Artikel->judul = $request->input('judul');
        //$Artikel->deskripsi = $request->input('deskripsi');

        //if ($request->hasFile('image')) {
            //$file = $request -> file('image');
            //$extension = $file -> getClientOriginalExtension();
            //$filename = time().'.'. $extension;
            //$file->move('images/',)
        //}

    }

    //function edit
    public function edit ($id_jenis)
    {
    	$JeBarang = \App\JeBarang::find($id_jenis);
    	$KaBarang =\App\KaBarang::all();

        return view('AdminTemplate.editArtikel', ['JeBarang' => $JeBarang], ['KaBarang' => $KaBarang]);
    }
    //function update
    public function update (Request $request, $id_jenis)
    {
    	$JeBarang = \App\JeBarang::find($id_jenis);
        $JeBarang->update($request -> all());
        if ($request-> hasFile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $JeBarang ->image = $request -> file('image')->getClientOriginalName();
            $JeBarang->save();
            //dd($JeBarang);
        }
        return redirect ('Artikel')-> with('sukses', 'data berhasil di update');
    }


    public function delete($id_jenis)
    {
    	$JeBarang = \App\JeBarang::find($id_jenis);
    	$JeBarang -> delete($JeBarang);
    	return redirect('Artikel')-> with('sukses','data berhasil di hapus');
    }
}
