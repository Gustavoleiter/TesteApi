<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function index(){
        
        $departamentos = Departamento::all();
    
        return view('welcome',['departamentos' => $departamentos]);

    }

    public function create(){
        return view('departamento.create');
    }

    public function store(Request $request){

        $departamento = new  Departamento;
        
        $departamento->id = $request->id;
        $departamento->name = $request->name;
        $departamento->descricao = $request->descricao;
        

        $departamento->save();
        return Redirect('/')->with('msg','Departamento criado com sucesso!');

    }
 //
}
