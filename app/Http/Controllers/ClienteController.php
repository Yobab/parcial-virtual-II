<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(){
        $data = DB::table('cliente')
            ->join('categoria','categoria.idcategoria','=','cliente.idcategoria')
            ->join('genero','genero.idgenero','=','cliente.idgenero')
            ->join('departamento','departamento.iddepartamento','=','cliente.iddepartamento')
            ->select('cliente.*','genero.nombre as genero','categoria.nombre as categoria','departamento.nombre as departamento')
            ->get();
        return view('Cliente.tabla',compact('data'));
    }
    public function create(Request $request){
        $data = $request->validate(['nombre' => 'required',
            'nit' => 'required',
            'edad' => 'required',
            'fecha_nacimiento' => 'required',
            'correo' => 'nullable',
            'telefono' => 'nullable',
            'iddepartamento' => 'required',
            'idgenero' => 'required',
            'idcategoria' => 'required']);
        Cliente::insert($data);
        $departamentos = \App\Models\Departamento::all();
        $generos = \App\Models\Genero::all();
        $categorias = \App\Models\Categoria::all();
        return view('cliente.registro',compact('generos','categorias','departamentos'));
    }
    public function delete($id){
        Cliente::find($id)->delete();
        $data = DB::table('cliente')
            ->join('categoria','categoria.idcategoria','=','cliente.idcategoria')
            ->join('genero','genero.idgenero','=','cliente.idgenero')
            ->join('departamento','departamento.iddepartamento','=','cliente.iddepartamento')
            ->select('cliente.*','genero.nombre as genero','categoria.nombre as categoria','departamento.nombre as departamento')
            ->get();
        return view('Cliente.tabla',compact('data'));
    }
}
