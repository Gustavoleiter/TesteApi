@extends('layouts.main')
@section('title', 'createfuncionario')
@section('content')

    
    
   
<div id="funcionario-create-container" class="col-md-6 offset-md-3">
    <h1>Adicionar funcionario</h1>
    <form action="../funcionario" method="POST">
        @csrf
        <div class="form-grup">
            <label for="title">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome ">
        </div>
        <div class="form-grup">
            <label for="title"> Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite o sobrenome ">
        </div>
        <div class="form-grup">
            <label for="title">Email </label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email ">
        </div>
        <div class="form-grup">
            <label for="title">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone ">
        </div>
        <div class="form-grup">
            <label for="title">departamento</label>
            <input type="number" class="form-control" id="departamento" name="departamento" placeholder="Digite o  ID do departamento ">
        </div>
        <input type="submit" class="btn btn-primoary" value="Adicionar Funcionario">
    
    </form>
</div>

@endsection

