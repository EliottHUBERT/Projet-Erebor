<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeModifEspace extends Model
{
    use HasFactory;

    protected $table = 'demande_modif_espace';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'demandeur');
    }
}
