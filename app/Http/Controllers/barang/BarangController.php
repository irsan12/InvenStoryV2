<?php

namespace App\Http\Controllers\barang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\barang;
use DataTables; 
class BarangController extends Controller
{
    
    public function getBarangs(Request $request){
    	
 // $model = barang::query();
 //        return DataTables::of($model)
 //        ->addColumn('action', function($row){
 //                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
 //                    return $actionBtn;
 //                })
 //            ->addIndexColumn()
 //            ->rawColumns(['action']) 
 //            ->make(true);

$model = barang::query();
        return DataTables::of($model)
        ->addColumn('action', function ($model) {
                return view('layouts._action', [
                    'model' => $model,
                    'url_decrease' => route('test.cek', $model->id),
                    'url_edit' => route('test.cek', $model->id),
                    'url_destroy' => route('test.cek', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action']) 
            ->make(true);
    }
    	
    
}


          