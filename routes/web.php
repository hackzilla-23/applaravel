<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Personne;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

//pour regrouper les elements
// Route::prefix('/blog')->name('blog')->controller(UserController::class)->group(['middleware' =>['role:Admin' , 'permission:Ajouter,modifier , supprimer']],function() {
//     // Route::get('/' , [UserController::class, 'index'])->name('login');
//     Route::get('/' , 'index')->name('login');
// });

// Route::get('/' , [UserController::class, 'index'])->name('login');
// Route::get('/', [UserController::class, 'login'])->name('login');
Route::get('/', [UserController::class, 'product_dashboard'])->name('login');
// Route::get('/', function () {
//     return view('login');
// })->name('login');

// Route::get('/register',[RegisterController::class,'register'])->name('registermmmm');
Route::get('/register', [RegisterController::class, 'register'])->name('register');

// route::get('/register', function() {
//     return view('register');
// })->name('registermmmm');
Route::post('/register', [UserController::class, 'store'])->name('register_personne');

Route::post('/login', [UserController::class, 'logs'])->name('login_personne');
//     return view('register');
// })->name('registermmmm');

Route::post('/register', [UserController::class, 'store'])->name('register_personne');

Route::get('/password', [UserController::class, 'newpass'])->name('MDPo');
// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/', [RegiController::class, 'regi'])->name('register');

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'regi'])->name('register');

Route::get('/dashboard', [UserController::class, 'main_dashboard'])->name('dashboard');

Route::get('/dashboard/product', [UserController::class, 'product_dashboard'])->name('main_dash');

Route::get('/product/edit', [UserController::class, 'edit'])->name('edit');

Route::get('/product/new_product', [UserController::class, 'add'])->name('add_product');

// Route::middleware('auth')->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::post('/register', [UserController::class, 'store'])->name('register_personne');

Route::get('/error/404', [UserController::class, 'error'])->name('404');

Route::get('/password/mot_de_passe_oublie', [UserController::class, 'newpass'])->name('MDPo');

// Route::post('/password/mot_de_passe_oublie', [UserController::class, 'reset'])->name('changePass');

Route::post('/', [UserController::class, 'logs'])->name('login_personne');

Route::get('/disconnect', [UserController::class, 'logout'])->name('logout_personne');

/*Quand tu utilises la class*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware(IsAdmin::class);

/*Quand tu utilises la class et le parametre*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware(IsAdmin::class.'admin');

/*Quand tu utilises les alias*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware('is_admin');

/*Quand tu utilises la alias et le parametre*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware('is_admin:admin');

Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product');

/*Quand tu utilises les groups avec les class*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware([IsAdmin::class , IsPersonne::class]);

/*Quand tu utilises les group avec les appendToGroup ou prependToGRoup*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware('group_admin');

Route::post('/delete_product', [ProductController::class, 'delete_product'])->name('delete_product');

Route::post('/edit_Product', [ProductController::class, 'update_product'])->name('edit_Product');

Route::get('/gestion_utilisateur', [UserController::class, 'view_panel'])->name('panel_admin');

Route::get('/gestion_utilisateur/{id}', [UserController::class, 'panel_role_permissions'])->name('role_permission');

Route::post('/password/forgot', [UserController::class, 'sendResetCode'])->name('password.email');

Route::get('/password/validate', [UserController::class, 'showValidationForm'])->name('password.validate');
Route::post('/password/validate', [UserController::class, 'validateResetCode'])->name('password.validate.code');

Route::get('/password/reset', [UserController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [UserController::class, 'resetPassword'])->name('password.update');

Route::get('/email', function () {
    return view('email');
})->name('email');

/************************************* relation one to one *************************************/
Route::get('/one_to_one', function () {

    //premiere methode
    // $address = Adresse::create([
    //     'nom_add' => 'logpom'
    //     ]);
    // Client::create([
    // 'nom'=> 'souop',
    // 'prenom'=> 'miguel',
    // 'email'=>'miguel@souop.com',
    // 'addr_id'=>$address->id

    // $clients = Client::find(1);
    // return $clients->adresse->nom_add;
    // ]);

    //deuxieme methode

    // $address = Adresse::create([
    //     'nom_add' => 'koto',
    // ]);
    // $address->client()->create([
    //     'nom' => 'souop',
    //     'prenom' => 'miguel',
    //     'email' => 'miguel@souop.com',
    // ]);

});

/************************************* relation one to many *************************************/
Route::get('/one_to_many', function () {
    // $personne = Personne::has('voitures')->get();
    // $personne = Personne::doesntHave('voitures')->get();
    // // $personne->voitures()->create([
    // //     'marque' => 'ferari',
    // //     'couleur' => 'rouge',
    // // ]);
    // return $personne;

});

/************************************* relation many to many *************************************/
Route::get('/many_to_many', function () {
    // Role::create([
    //     'nom_role' => 'admin',
    // ]);
    // Role::create([
    //     'nom_role' => 'user',
    // ]);

    // $personne = Personne::find(3);
    // $personne = Personne::where('id', '=', 3)->get();
    // dd($personne);

    // $role = Role::find(11);

    // dd($role);
    // dd($personne);
    // $role->personnes()->attach($personne);
    // $personne->roles()->attach([11, 12]);
    // dd($role->personnes);
    // return $role->personnes;
    // return $personne->roles;

});

Route::get('/many_to_many_pays_ville', function () {
    // Pays::create([
    //     'nom_pays' => 'France',
    // ]);
    // Pays::create([
    //     'nom_pays' => 'Cameroun',
    // ]);
    // Pays::create([
    //     'nom_pays' => 'Canada',
    // ]);

    // $pays = Pays::find(2);

    // $pays->villes()->create([
    //     'nom_ville' => 'Douala',
    // ]);
    // $pays->villes()->create([
    //     'nom_ville' => 'Yaounde',
    // ]);
    // $pays->villes()->create([
    //     'nom_ville' => 'Baffoussam',
    // ]);

    // $ville = Ville::find(1);

    // $ville->personnes()->create([
    //     'nom' => 'kampi',
    //     'prenom' => 'dollar',
    //     'email' => 'dollar@kampi.com',
    //     'password' => bcrypt('russel'),
    //     'age' => 19,
    // ]);

    // $ville->personnes()->create([
    //     'nom' => 'souop',
    //     'prenom' => 'mihguel',
    //     'email' => 'souop@miguel.com',
    //     'password' => bcrypt('russel'),
    //     'age' => 21,
    // ]);

    // $ville->personnes()->create([
    //     'nom' => 'jordan',
    //     'prenom' => 'miren',
    //     'email' => 'jordn@miren.com',
    //     'password' => bcrypt('russel'),
    //     'age' => 30,
    // ]);

    // $pays = Pays::has('villes')->get();
    // $pays = Pays::doesntHave('villes')->get();
    // $pays = Pays::find(2);
    // $ville = Ville::all();
    // $ville = Ville::find(1);

    // return $ville->pays;

    // $pays = Pays::find(2);

    // return $pays->habitants[0]->nom;
});

Route::get('/test_role_permission', function () {

    // Role::find(1)->update([
    //     'guard_name' => 'admins',
    // ]);
    // Role::find(2)->update([
    //     'guard_name' => 'personnes',
    // ]);

    // Permission::find(1)->update([
    //     'guard_name' => 'personnes',
    // ]);
    // Permission::find(3)->update([
    //     'guard_name' => 'admins',
    // ]);
    // Permission::find(2)->update([
    //     'guard_name' => 'admins',
    // ]);

    // $role = Role::find(1);
    // $role1 = Role::find(2);

    // $role->givePermissionTo([2,3]);
    // $role1->givePermissionTo([1]);

    // $role = Role::find(1);

    // return $role->permissions->pluck('name');

    // $personne = Personne::find(28);
    // $role = Role::find(2);

    // $personne->role()->associate($role);
    // $personne->save();

    // dd($personne->role->permissions->pluck('name'));

    // $personne = Personne::find(43);
    // $role = Role::find(1);

    // $personne->role()->associate($role);
    // $personne->save();

    // dd($personne->role->permissions->pluck('name'));

});
