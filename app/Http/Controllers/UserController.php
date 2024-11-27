<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function login()
    {
        sleep(1);
        return view('login');
    }

    public function regi()
    {
        sleep(1);
        return view('register');
    }

    public function dashboard()
    {
        sleep(1);
        return view('dashboard');
    }

    public function error()
    {
        sleep(1);
        return view('404');
    }

    public function newpass()
    {
        sleep(1);
        return view('mot_de_passe_oublie');
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
        $user = Personne::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // // Redirect to the login page
        // return redirect()->route('register')->with('success', 'Success, vous serez rediriger dans 3 secondes...');
        sleep(1);
        return redirect()->route('login')->with('success', 'Vous pouvez maintenant vous connecter.');
    }

    public function logs(Request $request)
    {
        // Validation des données
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Tentative de connexion
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Détermine si l'utilisateur a coché la case "se souvenir de moi"

        if (Auth::attempt($credentials, $remember)) {
            // Connexion réussie
            sleep(1);
            return redirect()->route('dashboard');
        }

        // Connexion échouée, renvoyer l'utilisateur avec une erreur
        sleep(1);
        return redirect()->back()->withErrors(['email1' => 'Identifiants incorrects.'])->withInput();

    }

    public function reset(Request $request)
    {
        // Validation des champs
        $request->validate([
            'password' => 'required',
            'new_password' => 'required',
            'password_confirmation' => 'required|confirmed:new_password',
        ]);

        // Réinitialiser le mot de passe
        $status = Password::reset(
            $request->only('password', 'new_password'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => bcrypt($request->password),
                ])->save();
            }
        );

        // Vérifier si la réinitialisation a réussi
        if ($status === Password::PASSWORD_RESET) {
            sleep(1);
            return redirect()->route('login')->with('success', 'Votre mot de passe a été réinitialisé.');
        } else {
            throw ValidationException::withMessages(['email1' => [trans($status)]]);
        }
    }

    public function logout()
    {
        sleep(1);
        Auth::logout();
        return redirect()->route('login');
    }

}
