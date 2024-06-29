@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Registrar Responsable (Administrador {{ auth()->user()->name }})</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/dashboard/guardar">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
                            </div>

                            <div class="form-group">
                                <label for="correo">Correo:</label>
                                <input type="text" class="form-control" name="correo" placeholder="Ingrese el correo" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" class="form-control" name="telefono" placeholder="Ingrese el teléfono" required>
                            </div>

                            <div class="form-group">
                                <label for="establecimiento_id">Establecimiento:</label>
                                <select class="form-control" name="establecimiento_id" required>
                                    @foreach ($establecimientos as $establecimiento)
                                        <option value="{{ $establecimiento->id }}">{{ $establecimiento->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
