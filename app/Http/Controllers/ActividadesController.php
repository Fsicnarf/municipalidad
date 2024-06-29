<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    public function crearActividades()
    {
        return view('admin.actividades');
    }

    public function guardarActividad(Request $request)
    {
        $actividad = new Actividades();
        $actividad->nombre = $request->input("nombre");
        $actividad->descripcion = $request->input("descripcion");
        $actividad->fecha = $request->input("fecha");
        $actividad->lugar = $request->input("lugar");
        $actividad->save();
        return redirect('/admin/actividad/mostrar');
    }

    public function verActividades()
    {
        $actividad = Actividades::get();
        return view("lista_actividades")->with("actividades", $actividad);
    }

    public function obtenerId(String $id ){
        $actividad = Actividades::where("id",$id)->first();
        return $actividad->id;
    }
}