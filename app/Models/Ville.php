<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //
    protected $fillable = ['nom_ville', 'id_pays'];

    // Définir la relation avec la table pays
    public function pays()
    {
        return $this->belongsTo(Pays::class, 'id_pays', 'id');
    }

    // Définir la relation inverse : Une ville a plusieurs personnes
    public function personnes()
    {
        return $this->hasMany(Personne::class, 'id_ville', 'id');
    }
}
 