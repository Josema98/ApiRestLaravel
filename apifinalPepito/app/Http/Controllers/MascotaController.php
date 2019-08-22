<?php

namespace App\Http\Controllers;

use App\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Mascota::get();
        echo json_encode($mascotas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mascota = new Mascota();
        $mascota->name = $request->input('name');
        $mascota->raza = $request->input('raza');
        $mascota->color = $request->input('color');
        $mascota->save();
        echo json_encode($mascota);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mascota_id)
    {
        $mascota = Mascota::find($mascota_id);
        $mascota->name = $request->input('name');
        $mascota->raza = $request->input('raza');
        $mascota->color = $request->input('color');
        $mascota->save();
        echo json_encode($mascota);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy( $mascota_id)
    {
        $mascota = Mascota::find($mascota_id);
        $mascota->delete();
        
    }
}
