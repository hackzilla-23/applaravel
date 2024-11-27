<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PersonneFormRequest;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        // dd('UserController');
        return view('login');
    }
    public function store(PersonneFormRequest $request){
        // dd($request);
        //la premiere methode validation
        // $isvalid = $request->validate([
        //     'nom' =>'required',
        //     'prenom' => 'required',
        //     'age' => 'required',
        //     'email' =>'required|email',
        //     'password' =>'required|min:8',
        //     'confirm-password' =>'required|confirmed:password',
        // ]);

        //la deuxieme methode validation
        // Validator::make($request->all() , [
        //     'nom'=>'required',
        //     'prenom' => 'required',
        //     'age' => 'required',
        //     'email' =>'required|email',
        //     'password' =>'required|min:8',
        //     'confirm-password' =>'required|confirmed:password',
        // ]);


        // dd($isvalid);
        $newpersonne = Personne::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        // dd($newpersonne);
        return view('login', compact('newpersonne'));
    }
}
