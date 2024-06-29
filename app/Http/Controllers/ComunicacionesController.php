<?php

namespace App\Http\Controllers;

use App\Models\Comunicaciones;
use App\Models\Responsables;
use Illuminate\Http\Request;

class ComunicacionesController extends Controller
{
    public function crearComunicaciones()
    {
        $responsables = Responsables::all();
        return view('admin.comunicaciones', ['responsables' => $responsables]);
    }

    public function guardarComunicacion(Request $request)
    {
        $comunicacion = new Comunicaciones();
        $comunicacion->responsable_id = $request->input("responsable_id");
        $comunicacion->mensaje = $request->input("mensaje");
        $comunicacion->fecha_envio = $request->input("fecha_envio");
        $comunicacion->save();
        return redirect('/admin/comunicacion/mostrar');
    }

    public function verComunicaciones()
    {
        $comunicacion = Comunicaciones::get();
        return view("lista_comunicaciones")->with("comunicaciones", $comunicacion);
    }

    public function obtenerId(String $id ){
        $comunicacion = Comunicaciones::where("id",$id)->first();
        return $comunicacion->id;
    }
}