@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Establecimientos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Tipo</th>
                    @if(session('perfil')=='admin')
                    <th>Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($Establecimientos as $establecimiento)
                    <tr>
                        <td>{{ $establecimiento["nombre"] }}</td>
                        <td>{{ $establecimiento["direccion"] }}</td>
                        <td>{{ $establecimiento["tipo"] }}
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