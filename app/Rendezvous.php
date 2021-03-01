<?php

namespace App;

use App\Medecin;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    protected $fillable =[
        'medecins_id','libelle','date'
    ];
 
    public function medecins()
    {
        return $this->belongsTo(Medecin::class);
    }

}
