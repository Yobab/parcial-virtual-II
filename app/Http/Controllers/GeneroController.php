<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index(){
        $data = Genero::all();
        return view('Genero.tabla',compact('data'));
    }
    public function create(Request $request){
        $data = $request->validate(['nombre' => 'required','descripcion' => 'nullable']);
        Genero::insert($data);
        return view('Genero.registro');
    }
    public function delete($id){
        Genero::find($id)->delete();
        $data = Genero::all();
        return view('Genero.tabla',compact('data'));
    }
}
