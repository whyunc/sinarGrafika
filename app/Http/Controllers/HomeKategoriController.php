<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeKategoriController extends Controller
{
    public function index (Request $request) {
        if ($request -> has('search')) {
            $data_JeBarang =\App\JeBarang::where('judul','LIKE','%'.$request->search.'%')->get();
        }else {
            $data_JeBarang =\App\JeBarang::all();
        }
    	$data_KaBarang =\App\KaBarang::all();
    	return view('UserTemplate.HomeContent', ['data_KaBarang' => $data_KaBarang], ['data_JeBarang' => $data_JeBarang]);
    }

    public function Preview($id_jenis) {
    	$data_JeBarang =\App\JeBarang::find($id_jenis);
        $data_subJeBarang =\App\JeBarang::where('id_jenis', '<=' ,'5')->get();
    	
    	return view('UserTemplate.PreviewContent',['data_JeBarang' => $data_JeBarang], ['data_subJeBarang' => $data_subJeBarang]);
    }

    public function Content($id_kategori) {
    	$data_KaBarang =\App\KaBarang::find($id_kategori);
        $data_subKaBarang =\App\KaBarang::all();
    	$data_JeBarang =\App\JeBarang::where('id_kategori', '=', $id_kategori)->get();
    	return view('UserTemplate.SubContent', ['data_JeBarang' => $data_JeBarang],['data_KaBarang' => $data_KaBarang, 'data_subKaBarang' => $data_subKaBarang]);

    }
}
