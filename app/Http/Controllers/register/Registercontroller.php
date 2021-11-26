<?php

namespace App\Http\Controllers\register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Registercontroller extends Controller
{
    public function regis(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'role' => 'required|string|max:25',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'role' =>$request->role,
            'password' => Hash::make($request->password),
        ]);

       
        	return redirect()->back()->with('status','User Telah Ditambahkan');
        
    }
}
