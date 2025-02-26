@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Crear Actividad</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/actividad/guardar">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea class="form-control" name="descripcion" placeholder="Ingrese la descripción" rows="4" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="fecha">Fecha:</label>
                                <input type="datetime-local" class="form-control" name="fecha" required>
                            </div>

                            <div class="form-group">
                                <label for="lugar">Lugar:</label>
                                <input type="text" class="form-control" name="lugar" placeholder="Ingrese el lugar" required>
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
