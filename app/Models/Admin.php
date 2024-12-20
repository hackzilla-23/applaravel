<?php

namespace App\Models;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasRoles, HasFactory;

    protected $guard_name = 'admins';

    protected $fillable = ['nom', 'prenom', 'email', 'password', 'id_role'];

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

}
