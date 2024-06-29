@extends('layouts.app')

@section('content')
<center>
    <table border="3">
    <tr>
        <th style="color:rgba(132, 120, 16, 0.859)">nombre</th>
        <th style="color:rgb(252, 3, 3)">correo</th>
        <th style="color:rgb(8, 255, 0)">telefono</th>
    </tr>

        @foreach($responsables as $responsable)

        <tr>
            <td>{{$responsable["nombre"]}}</th>
            <td>{{$responsable["correo"]}}</th>
            <td>{{$responsable["telefono"]}}</th>
        </tr>
        @endforeach

    </table>
</center>
@endsection