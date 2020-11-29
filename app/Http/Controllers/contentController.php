<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentController extends Controller
{
    public function Content($id_kategori) {
    	$data_KaBarang =\App\KaBarang::find($id_kategori);
    	$data_JeBarang =\App\JeBarang::all();
        return view('UserTemplate.HomeContent', ['data_JeBarang' => $data_JeBarang],['data_KaBarang' => $data_KaBarang]);
    }
}
