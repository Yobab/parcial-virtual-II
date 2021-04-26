<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $data = Categoria::all();
        return view('Categoria.tabla',compact('data'));
    }
    public function create(Request $request){
        $data = $request->validate(['nombre' => 'required','descripcion' => 'nullable']);
        Categoria::insert($data);
        return view('Categoria.registro');
    }
    public function delete($id){
        Categoria::find($id)->delete();
        $data = Categoria::all();
        return view('Categoria.tabla',compact('data'));
    }
}
