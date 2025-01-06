<?php

namespace App\Models;

use App\Models\Produit;
use App\Models\Ville;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class Personne extends Authenticatable
{
    use Notifiable, CanResetPassword, HasRoles, HasApiTokens;

    protected $fillable = ['nom', 'prenom', 'age', 'email', 'images', 'password', 'id_ville', 'id_role'];

    // Définir la relation : Une personne a plusieurs produit
    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_personne', 'id');
    }

    // Définir la relation : Une personne a plusieurs voitures
    // public function voitures()
    // {
    //     return $this->hasMany(Voiture::class, 'personne_id', 'id');
    // }

    // Définir la relation : Une personne a plusieurs roles
    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'personne_roles', 'id_personne', 'id_role');
    // }

    // Définir la relation : Une personne a un role
    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id');
    }

    // Définir la relation avec la table villes
    public function ville()
    {
        return $this->belongsTo(Ville::class, 'id_ville', 'id');
    }

}
