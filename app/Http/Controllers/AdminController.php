<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Establecimientos;
use App\Models\Responsables;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $establecimientos = Establecimientos::all();

        return view('admin.dashboard', ['establecimientos' => $establecimientos]);
    }

    public function guardarResponsable(Request $request){

        $responsable = new Responsables();
        $responsable->nombre = $request->input("nombre");
        $responsable->correo = $request->input("correo");
        $responsable->telefono = $request->input("telefono");
        //$responsable->establecimiento_id = $responsable->obtenerId($request->input("establecimiento_id"));
        $responsable->establecimiento_id = $request->input("establecimiento_id");
        $responsable->save();
        return redirect('/admin/dashboard/mostrar');
    }

    public function verResponsables()
    {
        $responsables = Responsables::with('establecimiento')->get();
        return view("lista_encargados", ["Responsables" => $responsables]);
    }

    /*public function showForm()
    {
        $establecimientos = Establecimientos::all();

        return view('vw_establecimientos', ['establecimientos' => $establecimientos]);
    }*/

    
}
