<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';
    protected $fillable = ['nom', 'prix', 'quantite', 'description'];

    // Définir la relation inverse : Un produit appartient à une personne
    // public function personne()
    // {
    //     return $this->belongsTo(Personne::class);
    // }
}
