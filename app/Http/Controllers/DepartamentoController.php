<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){
        $data = Departamento::all();
        return view('Departamento.tabla',compact('data'));
    }
    public function create(Request $request){
        $data = $request->validate(['nombre' => 'required','descripcion' => 'nullable']);
        Departamento::insert($data);
        return view('Departamento.registro');
    }
    public function delete($id){
        Departamento::find($id)->delete();
        $data = Departamento::all();
        return view('Departamento.tabla',compact('data'));
    }
}
