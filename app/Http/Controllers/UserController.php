<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonneFormRequest;
use App\Http\Requests\RequestLogs;
use App\Http\Requests\RequestReset;
use App\Mail\RegisterMail;
use App\Models\Admin;
use App\Models\Personne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function login()
    {
        sleep(1);
        return view('login');
    }
    // public function store(PersonneFormRequest $request)
    // {
    // }
    public function store(PersonneFormRequest $request)
    {
        // dd($request);
        // $newname = str_replace(' ', '', Str::Random(5));
        // $finalimage = trim($newname).'.'.$request->images->getClientOriginalExtension();
        try {
            $newpersonne = DB::transaction(function () use ($request) {
                $user = Personne::create([
                    'nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'age' => $request->age,
                    'email' => $request->email,
                    // 'images' => $finalimage,
                    'password' => bcrypt($request->password),
                ]);
                // if($user){
                //     dd($user);
                //     // Envoie d'un email de confirmation
                //     Mail::to($user->email)->send(new RegisterMail ($user));
                // }
                return $user;
            });
            // $saveimage = Storage::disk('personne')->put($finalimage , file_get_contents($request->images));
            // dd($newpersonne);
            // Mail::to($request->email)->send(new RegisterMail ($request));
            // dd($saveimage);
            $role = Role::find(2);
            // dd($role);
            $newpersonne->assignRole($role);
            Mail::to($newpersonne->email)->send(new RegisterMail($newpersonne));
            return view('login', compact('newpersonne'));
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            // return back();
        }
    }

    public function regi()
    {
        sleep(1);
        return view('register');
    }

    public function main_dashboard()
    {
        // Vérifier si l'utilisateur est authentifié
        if (Auth::guard('personnes')->check()) {
            $personnes = Personne::find(Auth::guard('personnes')->user()->id);
            return view('dashboard.main_dashboard')->with('personne', $personnes);
        } elseif (Auth::guard('admins')->check()) {
            $personnes = Personne::find(Auth::guard('admins')->user()->id);
            return view('dashboard.main_dashboard')->with('personne', $personnes);
        } else {
            sleep(1);
            return redirect()->route('login');
        }

    }

    public function product_dashboard()
    {
        // Vérifier si l'utilisateur est authentifié
        if (Auth::guard('personnes')->check()) {
            $personnes = Personne::find(Auth::guard('personnes')->user()->id);
            $products = $personnes->produits;
            return view('dashboard.product_dashboard')->with('allproducts', $products)->with('personne', $personnes);
        } elseif (Auth::guard('admins')->check()) {
            $personnes = Admin::find(Auth::guard('admins')->user()->id);
            $products = $personnes->produits;
            return view('dashboard.product_dashboard')->with('allproducts', $products)->with('personne', $personnes);
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

    public function logs(RequestLogs $request)
    {
        // Validation des données
        // $validator = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|string',
        // ]);
        // dd($validator);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // Tentative de connexion
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Détermine si l'utilisateur a coché la case "se souvenir de moi"

        // dd(Auth::guard('personnes')->attempt($credentials));
        if (Auth::guard('personnes')->attempt($credentials)) {
            // Connexion réussie
            // $personne = Personne::find();
            // $roles = Auth::guard('personnes')->user()->roles[0]->permissions->pluck('name');
            // dd($roles);
            return redirect()->intended('dashboard');
        } elseif (Auth::guard('admins')->attempt($credentials)) {
            // Connexion réussie
            sleep(1);
            // dd(Auth::guard('personnes')->user()->roles[0]->permissions->pluck('name'));
            return redirect()->intended('dashboard');
        }else if (Auth::guard('admins')->attempt($credentials)) {

            // dd(Auth::guard('admins')->user()->roles[0]->permissions->pluck('name'));
            sleep(1);
            return redirect()->intended('dashboard');
            
        }
    }

    public function reset(RequestReset $request)
    {


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
        if (Auth::guard('personnes')->check()) {
            // Auth::logout();
            Auth::guard('personnes')->logout();
            return redirect()->route('login');
        } elseif (Auth::guard('admins')->check()) {
            // Auth::logout();
            Auth::guard('admins')->logout();
            return redirect()->route('login');
        }
    }

    public function view_panel()
    {
        if (Auth::guard('admins')->check()) {
            // Récupère tous les utilisateurs
            $users = Personne::all();
            $role = null;
            $permissions = null;
            // Rendu de la page de panel
            return view('dashboard.panel')->with('users', $users)->with('role', $role)->with('permission', $permissions);
        }
    }

    public function panel_role_permissions($id)
    {
        // Récupère l'utilisateur avec ses rôles et permissions
        $users = Personne::all();
        $util = Personne::find($id);
        $role = $util->role;
        if ($role) {
            $permissions = $role->permissions;
        } else {
            $permissions = null;
        }
        // dd($permissions);
        // dd($user);
        return view('dashboard.panel')->with('role', $role)->with('permission', $permissions)->with('users', $users);
    }

    public function takeUsers()
    {
        $personne = Personne::all();
        return response()->json([
            "Success" => 'recuperation avec success',
            "data" => $personne,
        ]);
    }

}
