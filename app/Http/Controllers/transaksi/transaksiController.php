<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\barang;

class transaksiController extends Controller
{
    public function create(){
    	  $model = new transaksi();
        return view('layouts.form',compact('model'));
    }

    public function store(Request $request){

    	// $this->validate($request, [
     //        'kodebarang' => 'required|unique:barangs,kodebarang',
     //        'Nama_barang' => 'required',
     //         'Harga_M' => 'required',
     //        'Harga_J' => 'required',
     //        'Harga_B' => 'required',
     //        'stok' => 'required',
     //    ]);
        
    	$model = transaksi::create($request -> all());
    	return $model;
    }

    public function fetch(Request $request){

   }
}
