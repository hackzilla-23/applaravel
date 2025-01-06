<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    //
    protected $fillable = ['nom_add'];
    //definir la relation inverse : une addresse appartienr a un client
    public function client(){
        return $this->hasOne(Client::class, 'addr_id' , 'id');
    }
}
