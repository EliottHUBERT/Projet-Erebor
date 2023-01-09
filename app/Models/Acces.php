<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acces extends Model
{
    use HasFactory;
    //TODO peut être mettre seulement l'id du user en PK

    protected $table = 'acces';
    protected $primaryKey = 'idUser';
    public $timestamps = false;


    public function user()
    {    
        return $this->hasOne(User::class, 'id', 'idUser');
    }

    public function espace()
    {    
        return $this->hasOne(User::class, 'id', 'idEspace');
    }

}
