<?php

namespace App\Http\Controllers;

use App\Models\Establecimientos;
use Illuminate\Http\Request;

class EstablecimientosController extends Controller
{
    public function crearEstablecimientos()
    {
        return view('admin.establecimientos');
    }

    public function guardarEstablecimiento(Request $request)
    {
        $establecimiento = new Establecimientos();
        $establecimiento->nombre = $request->input("nombre");
        $establecimiento->direccion = $request->input("direccion");
        $establecimiento->tipo = $request->input("tipo");
        $establecimiento->save();
        return redirect('/admin/establecimientos/mostrar');
    }

    public function verEstablecimientos()
    {
        $establecimiento = Establecimientos::get();
        return view("lista_establecimientos")->with("Establecimientos", $establecimiento);
    }

    public function obtenerId(String $id ){
        $establecimiento = Establecimientos::where("id",$id)->first();
        return $establecimiento->id;
    }

    public function showForm()
    {
        $establecimientos = Establecimientos::all();

        return view('vw_establecimientos', ['establecimientos' => $establecimientos]);
    }
}