@extends('layout.layout')

@section('content')
    <form class="container mt-5" method="post" action="{{route('cliente-Registrar')}}">
        <h3> Registro de Cliente </h3>
        @csrf
        <div class="form-group">
            <label for="nit">NIT*</label>
            <input type="number" class="form-control" id="nit" name="nit" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre*</label>
            <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="nacimiento">Fecha de Nacimiento*</label>
            <input type="date" class="form-control" id="nacimiento" name="fecha_nacimiento"  required>
        </div>
        <div class="form-group">
            <label for="edad">Edad*</label>
            <input type="number" class="form-control" id="edad" name="edad" max="100" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" maxlength="100" >

        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" >

        </div>
        <div class="form-group">
            <label for="departamento">Departamento</label>
            <select  class="form-control" id="departamento" name="iddepartamento">
                @foreach($departamentos as $departamento)
                    <option value="{{$departamento->iddepartamento}}">{{$departamento->nombre}}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <select  class="form-control" id="categoria" name="idcategoria">
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->idcategoria}}">{{$categoria->nombre}}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group">
            <label for="genero">Género</label>
            <select  class="form-control" id="genero" name="idgenero">
                @foreach($generos as $genero)
                    <option value="{{$genero->idgenero}}">{{$genero->nombre}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
