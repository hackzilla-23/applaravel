<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Personne extends Authenticatable
{
    use Notifiable, CanResetPassword;

    protected $fillable = ['nom', 'prenom', 'age', 'email', 'password'];
    protected $model = Personne::class;

    // Définir la relation : Une personne a plusieurs produits
    // public function produits()
    // {
    //     return $this->hasMany(Produit::class);
    // }
}
