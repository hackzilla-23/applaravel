<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    //
    protected $fillable = ['marque' , 'couleur' , 'personne_id'];
    public function personne(){
        return $this->belongsTo(Personne::class , 'personne_id' , 'id');
    }
}
 