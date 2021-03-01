<?php

namespace App\Http\Controllers;

use App\Http\Resources\Medecin as ResourcesMedecin;
use App\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesMedecin::collection(Medecin::orderByDesc('created_at')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Medecin::create($request->all())){
             return response()->json([
                   'success' => ' Medecin Bien ajoute ',
            ]);
        }
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function show(Medecin $medecin)
    {
        return new ResourcesMedecin($medecin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function edit(Medecin $medecin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medecin $medecin)
    {
        if($medecin->update($request->all())){
            return response()->json([
                'success' => 'Medecin modifie'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medecin $medecin)
    {
        if($medecin->delete()){
            return response()->json([
                'success' => 'Medecin Supprime'
            ]);
        }
    }
}
