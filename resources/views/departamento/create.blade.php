@extends('layouts.main')
@section('title', 'createdepartamento')
@section('content')

    
    
   
<div id="funcionario-create-container" class="col-md-6 offset-md-3">
    <h1>Criar Departamento</h1>
    <form action="../departamento" method="POST">
        @csrf
        <div class="form-grup">
            <label for="title"> ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Digite o ID ">
        </div>
        <div class="form-grup">
            <label for="title">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome ">
        </div>
        <div class="form-grup">
            <label for="title"> Descrição</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite a descrição ">
        </div>
        
        <input type="submit" class="btn btn-primoary" value="Criar Departamento">
    
    </form>
</div>

@endsection