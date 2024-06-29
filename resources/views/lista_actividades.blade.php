@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Actividades</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre de Actividad</th>
                    <th>Descripcion</th>
                    <th>Fecha de Actividad</th>
                    <th>Lugar</th>
                    @if(session('perfil')=='admin')
                    <th>Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($actividades as $actividad)
                    <tr>
                        <td>{{ $actividad["nombre"] }}</td>
                        <td>{{ $actividad["descripcion"] }}</td>
                        <td>{{ $actividad["fecha"] }}</td>
                        <td>{{ $actividad["lugar"] }}</td>
                        
                        @if(session('perfil')!='visitante')
                        <td>
                        <button type="button" class="btn btn-outline-primary">Ver</button>
                        <button type="button" class="btn btn-outline-warning">Actualizar</button>
                        <button type="button" class="btn btn-outline-danger">Eliminar</button>
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection