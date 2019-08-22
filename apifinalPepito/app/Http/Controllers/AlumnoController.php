<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::get();
        echo json_encode($alumnos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        $alumno->grado = $request->input('grado');
        $alumno->grupo = $request->input('grupo');
        $alumno->save();
        echo json_encode($alumno);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$alumno_id)
    {
        $alumno = Alumno::find($alumno_id);
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        $alumno->grado = $request->input('grado');
        $alumno->grupo = $request->input('grupo');
        $alumno->save();
        echo json_encode($alumno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy( $alumno_id)
    {
        $alumno = Alumno::find($alumno_id);
        $alumno->delete();
    }
}
