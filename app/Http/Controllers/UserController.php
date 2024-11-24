<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function regi()
    {
        return view('register');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'nom' => 'required|alpha_num|regex:/^[a-zA-Z0-9_]+$/|min:3|max:255|unique:personnes,nom',
            'prenom' => 'required|alpha|min:2|max:50',
            'age' => 'required|integer|between:18,150',
            'email' => 'required|email|unique:personnes,email|max:255',
            'password' => 'required|string|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'confirm-password' => 'required|string|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/|confirmed:password',
        ]);

        // // Store the user in the database
        Personne::create($request->all());

        // // Redirect to the login page
        // return redirect()->route('register')->with('success', 'Success, vous serez rediriger dans 3 secondes...');
        sleep(3);
        return redirect()->route('login')->with('success', 'Vous pouvez maintenant vous connecter.');
    }

    public function logs(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validated)) {
            // Connexion réussie, redirection vers la page d'accueil ou tableau de bord
            sleep(3);
            dd($validated);
        } else {
            // Si la connexion échoue, redirection avec message d'erreur
            sleep(3);
            return back()->withErrors(['email1' => 'Informations d\'identification Incorrect.']);
        }

    }

    public function logout()
    {
        sleep(3);
        Auth::logout();
        return redirect()->route('login');
    }

}
