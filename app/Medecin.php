<?php

namespace App;

use App\Rendezvous;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $fillable = [
        'nom', 'prenom','email','adresse','telephone',
    ];

    public function rendezvous()
    {
        return $this->hasMany(Rendezvous::class);
    }
}
