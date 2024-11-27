<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonneFormRequest;
use App\Models\Personne;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        // dd('UserController');
        return view('register');
    }

    public function store(PersonneFormRequest $request)
    {
        // dd($request);
        // dd("validat");

        $isvalid = $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required",
            "age" => "required",
            "password" => "required",
            "password-co" => "required|confirmed:password",
        ]);

        // deuxieme methode de validation

        Validator::make($request->all(), [
            // "nom" => "required",
            // "prenom" => "required",
            // "email" => "required",
            // "age" => "required",
            // "password" => "required",
            // "password-co" => "required|confirmed:password",

        ], );

        // dd($isvalid);
        $newpersonne = Personne::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "email" => $request->email,
            "age" => $request->age,
            "password" => bcrypt($request->password),
        ]);

        // dd($newpersonne);

        return view('login', compact('newpersonne'));

        // dd($isvalid);
    }

}
