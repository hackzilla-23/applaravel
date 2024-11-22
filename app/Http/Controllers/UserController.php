<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Personne;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function regi()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $isvalid = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm-password' => 'required|confirmed:password',
        ]);

        // dd($isvalid);

        // Store the user in the database
        Personne::create($request->all());

        // Redirect to the login page
        return redirect()->route('login')->with('success', 'Votre inscription a bien été prise en compte. Vous pouvez maintenant vous connecter.');
    }
}
