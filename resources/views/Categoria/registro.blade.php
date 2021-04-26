@extends('layout.layout')

@section('content')
    <form class="container mt-5" method="post" action="{{route('categoria-Registrar')}}">
        <h3> Registro de Categoría </h3>
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre*</label>
            <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required>

        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" maxlength="255">

        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
