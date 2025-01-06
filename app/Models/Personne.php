<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;

class Personne extends Authenticatable
{
    use Notifiable, CanResetPassword , HasApiTokens;
    use HasRoles;
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'age', 'email', 'password', 'images' , 'id_ville '];
    // relation entre personnes et produits
    public function produits()
    {
        return $this->hasMany(Produit::class , 'personne_id' ,'id');
    }

    // relation entre personnes et voitures
    public function voitures(){
        return $this->hasMany(Voiture::class , 'personne_id' , 'id');
    }

    //relation entre personnes et roles
    // public function roles(){
    //     return $this->belongsToMany(Role::class, 'personne_roles', 'id_personne', 'id_role')->withTimestamps();
    // }
    // public function roles(){
    //     return $this->belongsTo(Role::class,  'id_role', 'id');
    // }

    public function villes(){
        return $this->belongsTo(Ville::class , 'id_ville' , 'id');
    }

}
