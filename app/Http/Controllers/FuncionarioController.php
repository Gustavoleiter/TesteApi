<?php

namespace App\Http\Controllers;

use CreateFuncionariosTable;
use Illuminate\Http\Request;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Redirect;

class FuncionarioController extends Controller
{
    public function index(){
        
        $funcionarios = Funcionario::all();
    
        return view('welcome',['funcionarios' => $funcionarios]);

    }

    public function create(){
        return view('funcionario.create');
    }

    public function store(Request $request){

        $funcionario = new  Funcionario;
        
        $funcionario->name = $request->name;
        $funcionario->sobrenome = $request->sobrenome;
        $funcionario->email = $request->email;
        $funcionario->telefone = $request->telefone;
        $funcionario->departamentos_id = $request->departamentos_id;

        $funcionario->save();
        return redirect('/')->with('msg','Funcionario adicionado com sucesso!');

    }

}