<?php

use App\Models\Pays;
use App\Models\Admin;
use App\Models\Ville;
use App\Models\Client;
use App\Models\Adresse;
use App\Models\Personne;
use App\Http\Middleware\IsAdmin;
use Spatie\Permission\Models\Role;
use App\Http\Middleware\IsPersonne;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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

Route::get('/password',[UserController::class,'newpass'])->name('MDPo');
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

Route::post('/password/mot_de_passe_oublie', [UserController::class, 'reset'])->name('changePass');

Route::post('/', [UserController::class, 'logs'])->name('login_personne');

Route::get('/disconnect', [UserController::class, 'logout'])->name('logout_personne');

/*Quand tu utilises la class*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware(IsAdmin::class);

/*Quand tu utilises la class et le parametre*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware(IsAdmin::class.'admin');

/*Quand tu utilises les alias*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware('is_admin');

/*Quand tu utilises la alias et le parametre*/
Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware('is_admin:admin');

/*Quand tu utilises les groups avec les class*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware([IsAdmin::class , IsPersonne::class]);

/*Quand tu utilises les group avec les appendToGroup ou prependToGRoup*/
// Route::post('/add_product', [ProductController::class, 'store'])->name('ajout_product')->middleware('group_admin');


Route::post('/delete_product', [ProductController::class, 'delete_product'])->name('delete_product');

Route::post('/edit_Product', [ProductController::class, 'update_product'])->name('edit_Product');

Route::get('/email', function(){
    return view('email');
})->name('email');

/************************************* relation one to one *************************************/
Route::get('/one_to_one' , function(){

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

    $address = Adresse::create([
        'nom_add' => 'koto'
        ]);
    $address->client()->create([
        'nom'=> 'souop',
        'prenom'=> 'miguel',
        'email'=>'miguel@souop.com',
    ]);

});

/************************************* relation one to many *************************************/
Route::get('/one_to_many' , function(){
    /*accede au personne qui ont une voiture*/
    $personne = Personne::has('voitures')->get();

    /*accede au personne qui n'ont pas une voiture*/
    $personne = Personne::doesntHave('voitures')->get();

    // $personne->voitures()->create([
    //     'marque' => 'ferari',
    //     'couleur' => 'rouge',
    // ]);
    return $personne;
    
});

/************************************* relation many to many *************************************/
Route::get('/many_to_many' , function(){
    // Role::create([
    //     'nom_role' => 'client'
    // ]);
    // Role::create([
    //     'nom_role' => 'caissier'
    // ]);
    // Role::create([
    //     'nom_role' => 'comptable'
    // ]);


    $personne = Personne::find(32);
    // $role = Role::find(11);
    // $role = Role::all();
    // $personne->roles()->attach($role);
    // $personne->roles()->detach($role);
    $personne->roles()->attach([13,14,15]);
    $personne->roles()->attach([
        // $role[11]=>[
        //     'description' => 'une description'
        // ]
    ]);

    /* remplire un champ au niveau de notre table pivot */
    // return $personne->roles;

    // $role->personnes()->attach($personne);
    // return $personne->roles[0]->nom_role;

    /* acceder au champ created_at de la table pivot  */
    // return $personne->roles[14]->pivot->created_at;
    // return $role->personnes;
});

Route::get('/personne_ville_pays' , function (){
    $pays = Pays::create([
    'nom_pays' => 'Canada',
    ]);
    $personne = $pays->villes()->create([
        'nom_ville' => 'Montreal',
    ])->personnes()->create([
        'nom' => 'souop',
        'prenom' => 'miguel',
        'email' => 'souop@gmail.com',
        'age' => '12',
        'password' => Bcrypt('1234567890'),
        'images' => 'stmgR.jpg'
    ]);

    // return $personne;
    return $pays->habitants[0]->nom;
});

Route::get('/personne_admin' , function (){
    $personne = Personne::find(13);
    // $admin = Admin::create([
    //     'nom'=> 'souop',
    //     'prenom'=>'miguel',
    //     'age'=>'12',
    //     'email'=>'miguelsouop@gmail.com',
    //     'password'=>bcrypt('1234567890')
    // ]);
    $admin = Admin::find(1);


    //administrateur
    // $administrateur = Role::where('id' , 1)->update([
    //     'name'=>'administrateur',
    //     'guard_name'=>'admins',
    // ]);
    $role_administrateur = Role::find(1);
    //utilisateur
    // $utilisateur = Role::where('id' , 2)->update([
    //     'name'=> 'utilisateur',
    //     'guard_name'=> 'personnes',
    // ]);
    $role_utilisateur = Role::find(2);

    /*****************************ajouter*****************************/
    // $permissionAdd = Permission::create([
    //     'name'=> 'Ajouter',
    //     // 'guard_name'=> 'admins',

    // ]);
    // $permissionAddAdmin = Permission::create([
    //     'name'=> 'Ajouter',
    //     'guard_name'=> 'admins',

    // ]);
    $permissionAddUser = Permission::find(1);
    $permissionAddAdmin = Permission::find(4);

    /********************************supprimer********************************/
    // $permissionDelete = Permission::create([
    //     'name'=> 'supprimer',
    //     // 'guard_name'=> 'admins',

    // ]);
    $permissionDelete = Permission::find(2);

    /********************************modifier********************************/
    // $permissionUpdate = Permission::create([
    //     'name'=> 'modifier',
    //     // 'guard_name'=> 'admins',
    // ]);
    $permissionUpdate = Permission::find(3);



    $role_administrateur->givePermissionTo($permissionAddAdmin , $permissionDelete , $permissionUpdate);
    $role_utilisateur->givePermissionTo($permissionAddUser);

    $admin->assignRole($role_administrateur);
    $personne->assignRole($role_utilisateur);
    // $admin->assignRole('admin');
    // $personne->assignRole('user');

});

Route::get('/select' , [UserController::class, 'selectOption'])->name('selectOption');