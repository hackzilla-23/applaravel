<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Personne extends Authenticatable
{
    use Notifiable, CanResetPassword, HasApiTokens;

    protected $fillable = ['nom', 'prenom', 'age', 'email', 'password', 'images'];

    // Définir la relation : Une personne a plusieurs produits
    // public function produits()
    // {
    //     return $this->hasMany(Produit::class);
    // }

    public function voitures(){
        return $this->hasMany(Voiture::class, 'personne_id', "id");
    }

    /* Relation entre personne et roles  */
    public function roles(){
        return $this->belongsToMany(Role::class, 'personne_roles', 'id_personne', 'id_role')->withTimestamps()->withPivot('descriptions');
        /*  */
        return $this->belongsToMany(Role::class, 'personne_roles', 'id_personne', 'id_role')->withTimestamps()->withPivot('descriptions');
    }
}
