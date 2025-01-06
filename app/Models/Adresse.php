<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    //
    protected $fillable = ['nom_add'];
    // Définir la relation inverse : Une adresse appartient à un client
    public function client(){
        return $this->hasOne(Client::class, 'addr_id', 'id');
    }
}
