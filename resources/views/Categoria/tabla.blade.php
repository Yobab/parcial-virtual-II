@extends('layout.layout')

@section('content')
    <div class="container mt-5">
        <h3> Tabla de Categoría </h3>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            @foreach($data as $info)
                <tr>
                    <td>{{$info->idcategoria}}</td>
                    <td>{{$info->nombre}}</td>
                    <td>{{$info->descripcion}}</td>
                    <td>
                        <a href="{{route('categoria-Eliminar',$info->idcategoria)}}" class="btn btn-danger">Descartar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
