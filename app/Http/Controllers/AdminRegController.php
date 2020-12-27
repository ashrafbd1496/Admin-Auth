<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegController extends Controller
{
    public function showRegForm(){
        return view('backend.admin.register');
    }

    //Admin Register Method
    public function adminRegister(Request $request){

        $this ->validate($request,[
            'name' =>'required',
            'username' =>'required',
            'email' =>'required',
            'password' =>'required',
        ]);

        Admin::create([
            'name' =>$request ->name,
            'username' =>$request ->username,
            'email' =>$request ->email,
            'cell' =>$request ->cell,
            'password' =>Hash::make($request->password),

        ]);

        return redirect() ->route('admin.login');

    }





}
