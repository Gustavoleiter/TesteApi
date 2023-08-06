<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index(){
        $nome = "Gustavo";
        $arry = [1,2,3,4,5];
        $ab = ["1", "2","3", "4", "5"];
    
        return view('welcome',['nome' => $nome, 'arry' => $arry, 'ab' => $ab]);

    }

    public function create(){
        return view('funcionario.create');
    }

}