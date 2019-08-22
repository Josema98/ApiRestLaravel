<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::get();
        echo json_encode($materias);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Materia();
        $materia->nombre = $request->input('nombre');
        $materia->profesor = $request->input('profesor');
        $materia->horas = $request->input('horas');
        $materia->save();
        echo json_encode($materia);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $materia_id)
    {
        $materia = Materia::find($materia_id);
        $materia->nombre = $request->input('nombre');
        $materia->profesor = $request->input('profesor');
        $materia->horas = $request->input('horas');
        $materia->save();
        echo json_encode($materia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($materia_id)
    {
        $materia = Materia::find($materia_id);
        $materia->delete();//
    }
}
