@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Comunicaciones</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Responsable</th>
                    <th>Mensaje</th>
                    <th>Fecha de envio</th>
                    @if(session('perfil')=='admin')
                    <th>Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($comunicaciones as $comunicacion)
                    <tr>
                        <td>{{ $comunicacion["responsable"]->nombre }}</td>
                        <td>{{ $comunicacion["mensaje"] }}</td>
                        <td>{{ $comunicacion["fecha_envio"] }}</td>
                        
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