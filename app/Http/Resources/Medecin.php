<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Medecin extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        
        // return [
        //     'id' => $this->id,
        //     'nom' => $this->nom,
        //     'prenom' => $this->prenom,
        //     'email' => $this->email,
        //     'adresse' => $this->adresse,
        //     'telephone' => $this->telephone,
        // ];
    }
}
