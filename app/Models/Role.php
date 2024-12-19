<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    use HasFactory;
    //
    protected $fillable = ['nom_role'];

    // Définir la relation : Un role a plusieurs persones
    public function personnes()
    {
        return $this->belongsToMany(Personne::class, 'personne_roles', 'id_role', 'id_personne');
        // return $this->belongsToMany(Role::class, 'personne_roles', 'id_personne', 'id_role');
    }
}
