<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function listado()
    {
        $mensajes = Contacto::all(); 

        return view('listado-contacto', compact('mensajes'));

        //return view('listado-contacto', ['mensajes' => $mensajes]);

        //return view('listado-contacto', ['mensajes' => Contacto::all()]);

    }

    //public function formularioContacto()
    //{
    //    return view('contacto');
    //}

    public function guardarFormulario(Request $request)
    {
        //recibir datos //meidante $request
        //dd($request->all(), $request->nombre);

        //validar datos 
        $request->validate([
            'nombre'=> 'required|min:3|max:255',
            'mensaje'=> 'required|min: 10',
            'correo'=> 'required|email',
        ]);

        //guardar datos
        $contacto= new Contacto();   
        $contacto->nombre = $request->nombre; 
        $contacto->correo = $request->correo; 
        $contacto->mensaje = $request->mensaje; 
        $contacto->save();

        return redirect('/contacto'); //Captura la información de un alumno 

        //redireccionar datos
    }
    public function formularioContacto(Request $request, $tipo_usuario = null){
        return view("contacto", compact("tipo_usuario"));
    }
    //
}
