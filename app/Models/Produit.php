<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $fillable = ['nom', 'prix', 'quantite', 'description', 'id_personne'];

    // Définir la relation inverse : Un produit appartient à une personne
    public function personne()
    {
        return $this->belongsTo(Personne::class, 'id_personne', 'id');
    }
}
