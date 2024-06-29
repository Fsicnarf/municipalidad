<!--@extends('layouts.app')-->

<!--@section('content')
    <div class="container">
        <h2>Registrar Establecimiento</h2>
        <form method="POST" action="{{ route('registrar_establecimiento') }}">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre del Establecimiento</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control">
            </div>

            <div class="form-group">
                <label for="tipo">Tipo de Establecimiento</label>
                <select name="tipo" id="tipo" class="form-control">
                    <option value="Restaurante">Restaurante</option>
                    <option value="Tienda">Tienda</option>
                    
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection-->