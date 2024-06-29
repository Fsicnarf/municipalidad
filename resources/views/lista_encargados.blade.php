@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Encargados</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Establecimiento</th>
                    @if(session('perfil')=='admin')
                    <th>Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($Responsables as $responsable)
                    <tr>
                        <td>{{ $responsable["nombre"] }}</td>
                        <td>{{ $responsable["correo"] }}</td>
                        <td>{{ $responsable["telefono"] }}</td>
                        <td>{{ $responsable["establecimiento"]->nombre }}</td>
                        
                        @if(session('perfil')=='admin')
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