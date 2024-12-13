<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Personne extends Authenticatable
{
    use Notifiable, CanResetPassword;

    protected $fillable = ['nom', 'prenom', 'age', 'email', 'password', 'images'];
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
    public function roles(){
        return $this->belongsToMany(Role::class, 'personne_roles', 'id_personne', 'id_role');
    }


}
