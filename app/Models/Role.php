<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['nom_role'];

    public function personnes(){
        return $this->belongsToMany(Personne::class, 'personne_roles', 'id_role', 'id_personne');
    }
}