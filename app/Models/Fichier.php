<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;

    protected $table = 'fichier';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * It returns the espace that is associated with the current instance of the model.
     *
     * @return The relationship between the model and the table.
     */
    public function espace()
    {
        return $this->hasOne(Espace::class, 'id', 'idEspace');
    }
}
