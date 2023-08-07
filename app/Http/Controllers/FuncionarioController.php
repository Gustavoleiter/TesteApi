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
        
        $funcionario->firstName = $request->firstName;
        $funcionario->lastName = $request->lastName;
        $funcionario->email = $request->email;
        $funcionario->phone = $request->phone;
        $funcionario->departmentos_id = $request->departamentos_id;

    
        $funcionario->save();
        return redirect('/')->with('msg','Funcionario adicionado com sucesso!');

    }

}