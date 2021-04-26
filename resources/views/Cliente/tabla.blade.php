@extends('layout.layout')

@section('content')
    <div class="container mt-5">
        <h3> Tabla de Cliente </h3>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Edad</th>
                <th scope="col">Correo</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Departamento</th>
                <th scope="col">Categoría</th>
                <th scope="col">Género</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $info)
                <tr>
                    <td>{{$info->nit}}</td>
                    <td>{{$info->nombre}}</td>
                    <td>{{$info->fecha_nacimiento}}</td>
                    <td>{{$info->edad}}</td>
                    <td>{{$info->correo}}</td>
                    <td>{{$info->telefono}}</td>
                    <td>{{$info->departamento}}</td>
                    <td>{{$info->categoria}}</td>
                    <td>{{$info->genero}}</td>
                    <td>
                        <a href="{{route('cliente-Eliminar',$info->nit)}}" class="btn btn-danger">Descartar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
