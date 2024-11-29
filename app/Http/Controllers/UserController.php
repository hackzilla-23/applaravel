<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Personne;
use App\Models\Produit;
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

    // public function store(PersonneFormRequest $request){
    //     // dd($request);
    //     //la premiere methode validation
    //     // $isvalid = $request->validate([
    //     //     'nom' =>'required',
    //     //     'prenom' => 'required',
    //     //     'age' => 'required',
    //     //     'email' =>'required|email',
    //     //     'password' =>'required|min:8',
    //     //     'confirm-password' =>'required|confirmed:password',
    //     // ]);

    //     //la deuxieme methode validation
    //     // Validator::make($request->all() , [
    //     //     'nom'=>'required',
    //     //     'prenom' => 'required',
    //     //     'age' => 'required',
    //     //     'email' =>'required|email',
    //     //     'password' =>'required|min:8',
    //     //     'confirm-password' =>'required|confirmed:password',
    //     // ]);

    //     // dd($isvalid);
    //     $newpersonne = Personne::create([
    //         'nom' => $request->nom,
    //         'prenom' => $request->prenom,
    //         'age' => $request->age,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password)
    //     ]);
    //     // dd($newpersonne);
    //     return view('login', compact('newpersonne'));
    // }

    public function regi()
    {
        sleep(1);
        return view('register');
    }

    public function main_dashboard()
    {
        // Vérifier si l'utilisateur est authentifié
        
            // $user = Auth::guard('personnes')->user(); // Récupérer l'utilisateur connecté
            // dd($user->prenom);
            return view('dashboard.main_dashboard');
        
        // if (Auth::guard('personnes')->check()) {
        //     $user = Auth::guard('personnes')->user(); // Récupérer l'utilisateur connecté
        //     dd($user->prenom);
        //     return view('dashboard.main_dashboard');
        // } else {
        //     sleep(1);
        //     return redirect()->route('login');
        // }

    }

    public function product_dashboard()
    {
        // Vérifier si l'utilisateur est authentifié
        if (Auth::guard('personnes')->check()) {
            $user = Auth::guard('personnes')->user(); // Récupérer l'utilisateur connecté
            return view('dashboard.product_dashboard', compact('user'));
        } else {
            sleep(1);
            return redirect()->route('login');
        }
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

    public function edit()
    {
        sleep(1);
        return view('edit');
    }

    public function add()
    {
        sleep(1);
        return view('form');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'nom' => 'required',
            // 'nom' => 'required|alpha_num|regex:/^[a-zA-Z0-9_]+$/|min:3|max:255|unique:personnes,nom',
            'prenom' => 'required|alpha|min:2|max:50',
            'age' => 'required|integer|between:18,150',
            'email' => 'required|email|unique:personnes,email|max:255',
            'password' => 'required',
            // 'password' => 'required|string|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
            'confirm-password' => 'required|confirmed:password',
            // 'confirm-password' => 'required|string|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/|confirmed:password',
        ]);

        // // Store the user in the database
        $user = Personne::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // // Redirect to the login page
        // return redirect()->route('register')->with('success', 'Success, vous serez rediriger dans 3 secondes...');
        sleep(1);
        return redirect()->route('login')->with('success', 'Vous pouvez maintenant vous connecter.');
    }

    public function store_product(Request $request)
    {

        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            // Ajoute d'autres validations pour ton produit ici
        ]);

        // Création du produit
        $product = new Produit();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        // Ajoute d'autres champs ici
        $product->user_id = Auth::id(); // Lier le produit à l'utilisateur authentifié
        $product->save();

        return redirect()->route('dashboard')->with('success', 'Produit ajouté avec succès');

    }

    public function logs(Request $request)
    {
        // Validation des données
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        // dd($validator);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // Tentative de connexion
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Détermine si l'utilisateur a coché la case "se souvenir de moi"

        if (Auth::guard('personnes')->attempt($credentials)) {
            // Connexion réussie
            $user = Auth::guard('personnes')->user(); // Récupérer l'utilisateur authentifié
            sleep(1);
            return redirect()->intended('dashboard')->with('user', $user);
        }

        // Connexion échouée, renvoyer l'utilisateur avec une erreur
        sleep(1);
        return redirect()->back()->withErrors(['email1' => 'Identifiants incorrects.']);

    }

    public function reset(Request $request)
    {
        // // Validation des champs
        // $request->validate([
        //     'password' => 'required|string',
        //     'new_password' => 'required|string',
        //     'password_confirmation' => 'required|string|confirmed:new_password',
        // ]);

        // // Réinitialiser le mot de passe
        // $status = Password::reset(
        //     $request->only('password', 'new_password'),
        //     function ($user) use ($request) {
        //         $user->forceFill([
        //             'password' => bcrypt($request->password),
        //         ])->save();
        //     }
        // );

        // // Vérifier si la réinitialisation a réussi
        // if ($status === Password::PASSWORD_RESET) {
        //     sleep(1);
        //     return redirect()->route('login')->with('success', 'Votre mot de passe a été réinitialisé.');
        // } else {
        //     throw ValidationException::withMessages(['email1' => [trans($status)]]);
        // }

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $response = Password::broker()->reset(
            $request->only(['email', 'password', 'password_confirmation']),
            function ($user, $password) {
                $user->password = bcrypt($password);
                $user->save();
                return redirect()->route('login');
            }
        );

        if ($response == Password::INVALID_USER) {
            return redirect()->back()->withErrors(['email' => 'Adresse e-mail non trouvée']);
        }

        if ($response == Password::INVALID_TOKEN) {
            return redirect()->back()->withErrors(['token' => 'Jetons de réinitialisation non valides']);
        }

        return $response;
    }

    public function logout()
    {
        sleep(1);
        // Auth::logout();
        Auth::guard('personnes')->logout();
        return redirect()->route('login');
    }
}
