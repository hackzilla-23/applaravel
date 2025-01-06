<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = ['nom', 'prenom', 'email', 'addr_id'];


    public function adresse(){
        return $this->belongsTo(Adresse::class, 'addr_id', 'id'); 
    }
}
