<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    //
    protected $fillable = ['nom_pays'];

    // Définir la relation avec la table ville
    public function villes()
    {
        return $this->hasMany(Ville::class, 'id_pays', 'id');
    }

    public function habitants(){
        return $this->hasManyThrough(Personne::class, Ville::class, 'id_pays', 'id_ville', 'id');
    }
}
