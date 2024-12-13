<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $fillable = ['nom', 'prix', 'quantite', 'description' , 'personne_id'];

    // Définir la relation inverse : Un produit appartient à une personne
    public function personne()
    {
        return $this->belongsTo(Personne::class , 'personne_id', 'id');
    }
}
