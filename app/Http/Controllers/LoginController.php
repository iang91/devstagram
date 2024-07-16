<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){


        /*$this->validate($request, [
            'email' => 'required|email', 
            'password' => 'required'
        ]);*/
        Validator::make($request->all(), [
            'email' => 'required|email', 
            'password' => 'required'
        ])->validate();
       

       if(!auth()->attempt($request->only('email', 'password'), $request->remember)){

        return back()->with('mensaje', 'Credenciales Incorrectas');

       }


       return redirect()->route('posts.index', auth()->user()->username);

    }
}
