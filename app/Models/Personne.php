<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Personne extends Authenticatable
{
    protected $fillable = ['nom', 'prenom', 'age', 'email', 'password'];
}
