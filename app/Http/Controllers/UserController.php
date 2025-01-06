<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonneFormRequest;
use App\Http\Requests\RequestLogs;
use App\Http\Requests\RequestReset;
use App\Mail\RegisterMail;
use App\Models\Admin;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
        return view('password.email_reset');
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

    // Envoi du code de validation par e-mail
    public function sendResetCode(Request $request)
    {
        // Vérifier si l'adresse e-mail est valide
        $request->validate([
            'email' => 'required|email|exists:personnes,email',
        ]);

        $token = rand(100000, 999999); // Générer un code à 6 chiffres

        // Enregistrer le code dans la base de données
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => now()]
        );

        // Envoyer le code par e-mail
        Mail::raw("Votre code de réinitialisation de mot de passe est : $token", function ($message) use ($request) {
            $message->to($request->email)->subject('Réinitialisation de mot de passe');
        });

        return redirect()->route('password.validate')->with('email', $request->email);
    }

    // Formulaire pour entrer le code de validation
    public function showValidationForm()
    {
        return view('password.validateCode');
    }

    // Validation du code
    public function validateResetCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required|digits:6',
        ]);

        $reset = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$reset || now()->diffInMinutes($reset->created_at) > 5) {
            return back()->withErrors(['token' => 'Code invalide ou expiré.']);
        }

        return redirect()->route('password.reset')->with('email', $request->email);
    }

    // Formulaire de réinitialisation du mot de passe
    public function showResetForm()
    {
        return view('password.mot_de_passe_oublie');
    }

    // Réinitialisation du mot de passe
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|confirmed:password',
        ]);

        $user = Personne::where('email', $request->email)->first();
        if ($user) {
            // Utilisation de la méthode save() pour mettre à jour le mot de passe et sauvegarder les modifications
            // $user = new Personne();
            // $user->email = $request->email;
            // $user->password = bcrypt($request->password);
            // $user->save();

            // Utilisation de la méthode updateOrCreate() pour mettre à jour le mot de passe et sauvegarder les modifications
            $user = Personne::updateOrCreate([
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            // Supprimer le token après succès
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();

            return redirect()->route('login')->with('status', 'Mot de passe réinitialisé avec succès.');
        }

        return back()->withErrors(['email' => 'Utilisateur introuvable.']);
    }

    // methode api

    public function store_api(PersonneFormRequest $request)
    {
        // dd($request);
        $newname = str_replace(' ', '', Str::Random(5));
        $finalimage = trim($newname) . '.' . $request->images->getClientOriginalExtension();
        try {
            $newpersonne = DB::transaction(function () use ($request, $finalimage) {
                $user = Personne::create([
                    'nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'age' => $request->age,
                    'email' => $request->email,
                    'images' => $finalimage,
                    'password' => bcrypt($request->password),
                    'id_role' => $request->id_role,
                ]);
                return $user;
            });

            Storage::disk('personne')->put($finalimage, file_get_contents($request->images));

            // $role = Role::find(2);
            // $newpersonne->assignRole($role);

            Mail::to($newpersonne->email)->send(new RegisterMail($newpersonne));

            return response()->json([
                "success" => 'Enregistrement réussi',
                "data" => $newpersonne,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            // return back();
        }
    }

    public function delete_api(string $id)
    {
        $personne = Personne::find($id);
        if ($personne) {
            Storage::disk('personne')->delete($personne->images);
            $personne->delete();
            return response()->json([
                "success" => 'Suppression réussie',
            ]);
        }
        return response()->json([
            "error" => 'Utilisateur introuvable',
        ]);
    }

    public function takeUsers()
    {
        $personne = Personne::all();
        return response()->json([
            "Success" => 'recuperation avec success',
            "data" => $personne,
        ]);
    }

    public function login_api(RequestLogs $request)
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
        // $remember = $request->has('remember'); // Détermine si l'utilisateur a coché la case "se souvenir de moi"
        $logging = Personne::where('email', $request->email)->first();

        // dd(Auth::guard('personnes')->attempt($credentials));
        if ($logging) {
            if (Hash::check($request->password, $logging->password)) {

                return response()->json([
                    "success" => 'Connexion réussie',
                    "token" => $logging->createToken("user_token")->plainTextToken,
                    "data" => $logging,
                ]);
            } else {
                return response()->json([
                    "error" => 'Mot de passe incorrect',
                ]);
            }
        } else {
            return response()->json([
                "error" => 'Adresse e-mail non trouvee',
            ]);
        }
    }

    public function logoutapi(Request $request)
    {
        // $token = $request->bearerToken();
        $user = auth('personnes')->user();
        auth('personnes')->user()->tokens()->delete();
        return response()->json([
            "success" => 'Déconnexion réussie',
            "user" => $user,
        ]);
    }

    public function updateuser(Request $request, $id)
    {
        $newpersonne = Personne::find($id);
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'images' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'email' => 'required',
        ]);
        if ($newpersonne) {
            // dd($personne);
            // dd($request->hasFile('images'));
            if ($request->hasFile('images')) {
                // dd('nous sommes dans le second if');
                Storage::disk('personne')->delete($newpersonne->images);
                $newname = str_replace(' ', '', Str::Random(5));
                $finalimage = trim($newname) . '.' . $request->images->getClientOriginalExtension();
                $newpersonne->update([
                    'nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'age' => $request->age,
                    'email' => $request->email,
                    'images' => $finalimage,
                ]);
                // dd($newpersonne);
                Storage::disk('personne')->put($finalimage, file_get_contents($request->images));
                return response()->json([
                    "success" => 'Modification réussie avec images',
                    "data" => $newpersonne,
                ]);
            } else {
                // dd('nous sommes dans le sinon');
                $newpersonne->update([
                    'nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'age' => $request->age,
                    'email' => $request->email,
                ]);
                return response()->json([
                    "success" => 'Modification réussie sans images',
                    "data" => $newpersonne,
                ]);
            }
        }

        return response()->json([
            "error" => 'Utilisateur introuvable',
        ]);
    }

    // public function updateapi(Request $request, $id)
    // {
    //     $newpersonne = Personne::find($id);
    //     if ($request->hasFile('images')) {
    //         Storage::disk('personne')->delete($newpersonne->images);

    //         $newname = str_replace(' ', '', Str::Random(5));
    //         $finalimage = trim($newname) . '.' . $request->images->getClientOriginalExtension();

    //         try {
    //             $user = DB::transaction(function () use ($request, $finalimage, $id) {
    //                 $newpersonne = Personne::find($id);
    //                 $newpersonne->update([
    //                     'nom' => $request->nom,
    //                     'prenom' => $request->prenom,
    //                     'age' => $request->age,
    //                     'email' => $request->email,
    //                     'images' => $finalimage,
    //                 ]);
    //                 return $newpersonne;
    //             });
    //             //dd($user);
    //             // $user = Personne::find($id)

    //             $saveimage = Storage::disk('personne')->put($finalimage, file_get_contents($request->images));
    //             return response()->json([
    //                 'message' => 'modification successful OK',
    //                 'data' => $user,
    //             ]);

    //         } catch (\Throwable $th) {
    //             throw $th;
    //         }

    //     } else {
    //         try {
    //             DB::transaction(function () use ($request, $id) {
    //                 Personne::where('id', $id)->update([
    //                     'nom' => $request->nom,
    //                     'prenom' => $request->prenom,
    //                     'age' => $request->age,
    //                     'email' => $request->email,
    //                 ]);
    //             });
    //             $user = Personne::find($id);
    //             return response()->json([
    //                 'message' => 'modification successful',
    //                 'data' => $user,
    //             ]);

    //         } catch (\Throwable $th) {
    //             throw $th;
    //         }
    //     }

    //     $request->validate([
    //         'nom' => 'required',
    //         'prenom' => 'required',
    //         'age' => 'required',
    //         'images' => 'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
    //         'email' => 'required',
    //     ]);
    //     if ($newpersonne) {
    //         // dd($personne);
    //         // dd($request->hasFile('images'));
    //         if ($request->hasFile('images')) {
    //             // dd('nous sommes dans le second if');

    //             $newpersonne->update([
    //                 'nom' => $request->nom,
    //                 'prenom' => $request->prenom,
    //                 'age' => $request->age,
    //                 'email' => $request->email,
    //                 'images' => $finalimage,
    //             ]);
    //             // dd($newpersonne);
    //             Storage::disk('personne')->put($finalimage, file_get_contents($request->images));
    //             return response()->json([
    //                 "success" => 'Modification réussie avec images',
    //                 "data" => $newpersonne,
    //             ]);
    //         } else {
    //             // dd('nous sommes dans le sinon');
    //             $newpersonne->update([
    //                 'nom' => $request->nom,
    //                 'prenom' => $request->prenom,
    //                 'age' => $request->age,
    //                 'email' => $request->email,
    //             ]);
    //             return response()->json([
    //                 "success" => 'Modification réussie sans images',
    //                 "data" => $newpersonne,
    //             ]);
    //         }
    //     }

    //     return response()->json([
    //         "error" => 'Utilisateur introuvable',
    //     ]);
    // }

}
