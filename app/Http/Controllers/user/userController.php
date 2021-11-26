<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class userController extends Controller
{
    public function index(){
    	$data= User::all();
    	return view('naviBody.user')->with('user',$data);
    }


    public function test(){
    	$id = Auth::id();
    	$test = User::find($id);
    	return view('coba', ['pengguna' => $test]);
    }
}
