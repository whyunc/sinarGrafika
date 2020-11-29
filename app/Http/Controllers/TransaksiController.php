<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data_Transaksi =\App\Transaksi::where('nama_barang','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_Transaksi =\App\Transaksi::all();
        }
    	$data_Barang =\App\barang::all();
        
    	return view('AdminTemplate.Transaksi', 
            ['data_Transaksi' => $data_Transaksi], 
            ['data_Barang' => $data_Barang]);

    }

    public function create(Request $request)
    {
    	\App\Transaksi::create($request -> all());
    	return redirect ('Transaksi')-> with('sukses', 'data berhasil di input');
    } 

    public function delete($id_transaksi)
    {
    	$Transaksi = \App\Transaksi::find($id_transaksi);
    	$Transaksi -> delete($Transaksi);
    	return redirect('Transaksi')-> with('sukses','data berhasil di hapus');
    }
    public function exportPDF()
    {
        $Transaksi = \App\Transaksi::all();
        $pdf = PDF::loadView('export.transaksiPDF', ['Transaksi' => $Transaksi]);
        return $pdf->download('invoice.pdf');
    }
}
