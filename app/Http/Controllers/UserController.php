<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // dd('UserController');
        return view('login');
    }
    public function store(Request $request){
        // dd($request);
        $isvalid = $request->validate([
            'nom' =>'required',
            'prenom' => 'required',
            'age' => 'required',
            'email' =>'required|email',
            'password' =>'required|min:8',
            'confirmPassword' =>'required|confirmed:password',
        ]);
        dd($isvalid);
        return view('');
    }
}
