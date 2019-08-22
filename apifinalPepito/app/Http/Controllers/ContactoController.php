<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::get();
        echo json_encode($contactos);
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacto = new Contacto();
        $contacto->title = $request->input('title');
        $contacto->first_name = $request->input('first_name');
        $contacto->last_name = $request->input('last_name');
        $contacto->email = $request->input('email');
        $contacto->phone = $request->input('phone');
        $contacto->address = $request->input('address');
        $contacto->date = $request->input('date');
        $contacto->save();
        echo json_encode($contacto);
        


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contacto_id)
    {
        $contacto = Contacto::find($contacto_id);
        $contacto->title = $request->input('title');
        $contacto->first_name = $request->input('first_name');
        $contacto->last_name = $request->input('last_name');
        $contacto->email = $request->input('email');
        $contacto->phone = $request->input('phone');
        $contacto->address = $request->input('address');
        $contacto->date = $request->input ('date');
        $contacto->save();
        echo json_encode($contacto);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($contacto_id)
    {
       $contacto = Contacto::find($contacto_id);
       $contacto->delete();
    }
}
