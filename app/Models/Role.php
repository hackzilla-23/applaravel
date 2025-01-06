<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    use HasFactory;
    //
    protected $fillable = ['nom_role'];
    // public function personnes(){
    //     return $this->belongsToMany(Personne::class , 'personne_roles' , 'id_role' , 'id_personne');
    // }
    public function personnes(){
        return $this->hasOne(Personne::class , 'id_role' , 'id');
    }
}
