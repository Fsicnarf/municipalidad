@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Crear Comunicación</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/comunicacion/guardar">
                            @csrf

                            <div class="form-group">
                                <label for="responsable_id">Responsable:</label>
                                <select class="form-control" name="responsable_id" required>
                                    @foreach ($responsables as $responsable)
                                        <option value="{{ $responsable->id }}">{{ $responsable->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mensaje">Mensaje:</label>
                                <textarea class="form-control" name="mensaje" placeholder="Ingrese el mensaje" rows="4" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="fecha_envio">Fecha de Envío:</label>
                                <input type="datetime-local" class="form-control" name="fecha_envio" required>
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
