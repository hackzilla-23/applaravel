<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Personne;
use App\Mail\RegisterMail;
use Illuminate\Support\Str;
use App\Http\Requests\RequestLogs;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RequestReset;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\PersonneFormRequest;
use App\Http\Requests\UpdateFormRequest;

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
        $newname = str_replace(' ', '', Str::Random(5));
        $finalimage = trim($newname).'.'.$request->images->getClientOriginalExtension();
        try {
            $newpersonne = DB::transaction(function () use ($request , $finalimage) {
                $user = Personne::create([
                    'nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'age' => $request->age,
                    'email' => $request->email,
                    'images' => $finalimage,
                    'password' => bcrypt($request->password),
                ]);
                // if($user){
                //     dd($user);
                //     // Envoie d'un email de confirmation
                //     Mail::to($user->email)->send(new RegisterMail ($user));
                // }
                return $user;
            });
            $saveimage = Storage::disk('personne')->put($finalimage , file_get_contents($request->images));
            // dd($newpersonne);
            // Mail::to($request->email)->send(new RegisterMail ($request));
            // dd($saveimage);
            
            // $role_utilisateur = Role::find(2);
            // // dd($role_utilisateur);
            // $newpersonne->assignRole($role_utilisateur);


            
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

            return view('dashboard.main_dashboard');

        } else if (Auth::guard('admins')->check()) {

            return view('dashboard.main_dashboard');
        } else {
            sleep(1);
            return redirect()->route('login');
        }

    }

    public function product_dashboard()
    {
        // Vérifier si l'utilisateur est authentifié
        if (Auth::guard('personnes')->check()) {
            $id = Auth::guard('personnes')->user()->id;
            $products = Produit::all()->where('personne_id' , $id);
            // $products = Produit::all();
            return view('dashboard.product_dashboard')->with('allproducts', $products);
        } 
        else if (Auth::guard('admins')->check()) {
            $id = Auth::guard('admins')->user()->id;
            $products = Produit::all()->where('personne_id' , $id);
            // $products = Produit::all();
            return view('dashboard.product_dashboard')->with('allproducts', $products);
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
        if(Auth::guard('personnes')->attempt($credentials)) {
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
        }
        if (Auth::guard('admins')->check()) {
            // Auth::logout();
            Auth::guard('admins')->logout();
            return redirect()->route('login');
        }
    }
    
    public function selectOption(){
        $personne = Personne::all();
        return view('selectOption')->with('allPersonne' , $personne);
    }

    public function takenusers(){
        $personne = Personne::all();
        return response()->json([
            'success' => 'recuperation avec succes',
            'data' => $personne
        ]);
    }


    public function storeapi(PersonneFormRequest $request)
    {
        // dd($request);
        $newname = str_replace(' ', '', Str::Random(5));
        $finalimage = trim($newname).'.'.$request->images->getClientOriginalExtension();
        try {
            $newpersonne = DB::transaction(function () use ($request , $finalimage) {
                $user = Personne::create([
                    'nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'age' => $request->age,
                    'email' => $request->email,
                    'images' => $finalimage,
                    'password' => bcrypt($request->password),
                ]);
                // if($user){
                //     dd($user);
                //     // Envoie d'un email de confirmation
                //     Mail::to($user->email)->send(new RegisterMail ($user));
                // }
                return $user;
            });
            $saveimage = Storage::disk('personne')->put($finalimage , file_get_contents($request->images));

            Mail::to($newpersonne->email)->send(new RegisterMail($newpersonne));
            // return view('login', compact('newpersonne'));
            return response()->json([
               'success' => 'Enregistrement avec succes',
                'data' => $newpersonne
            ], 201);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            // return back();
        }
    }

    public function deleteapi($id){
        $personne = Personne::find($id);
        Storage::disk('personne')->delete($personne->images);
        $personne->delete();
        return response()->json([
           'success' => 'Suppression avec succes',
            'data' => $personne
        ], 200);
    }

    public function updateapi( UpdateFormRequest $request , $id){
        $personne = Personne::find($id);
        if($request->hasFile('images')){
            Storage::disk('personne')->delete($personne->images);

            $newname = str_replace(' ', '', Str::Random(5));
            $finalimage = trim($newname).'.'.$request->images->getClientOriginalExtension();
            // dd();
            try {
                $user = DB::transaction(function () use ($request , $finalimage , $id) {
                   $newpersonne = Personne::find($id);
                //    dd($newpersonne);
                   $newpersonne->update([
                        'nom' => $request->nom,
                        'prenom' => $request->prenom,
                        'age' => $request->age,
                        'email' => $request->email,
                        'images' => $finalimage,
                        'password' => bcrypt($request->password),
                    ]);
                    return $newpersonne;
                });
                // dd($user);

                // $user = Personne::find($id);
                $saveimage = Storage::disk('personne')->put($finalimage , file_get_contents($request->images));
                return response()->json([
                    'message' => "modification reussie OK",
                    "data" => $user
                ]);
            } catch (\Throwable $th) {
                dd($th);
            }
        }else{
            try{

                DB::transaction(function () use ($request , $id) {
                   Personne::where('id' , $id)->update([
                        'nom' => $request->nom,
                        'prenom' => $request->prenom,
                        'age' => $request->age,
                        'email' => $request->email,
                        'password' => bcrypt($request->password)
                    ]);
                });
                $user = Personne::find($id);
                return response()->json([
                   'message' => "modification effectuer",
                    'data' => $user
                ]);


            }catch(\Throwable $th){
                dd($th);
            }
        }
    }


    public function apilogin(RequestLogs $request)
    {
        // Tentative de connexion
        $loging = Personne::where('email' , $request->email)->first();
        if($loging){
            if(Hash::check($request->password , $loging->password)){
                return response()->json([
                    'success' => 'Connexion réussie',
                    'data' => $loging,
                    'token' => $loging->createToken('user_token')->plainTextToken,
                ]);
            }else{
                return response()->json([
                   'error' => 'Erreur de mot de passe',
                ], 401);
            }
        }else{
            return response()->json([
                'error' => 'Adresse e-mail non trouvée',
            ], 404);
        }

    }

    public function apilogout(){
        $user = Personne::find(Auth::guard('personnes')->user()->id);
        // $user = Personne::find(auth('personnes')->user()->id);
        auth('personnes')->user()->tokens()->delete();
        return response()->json([
           'success' => 'Déconnexion réussie',
           'data' => $user
        ]);
    }
}
