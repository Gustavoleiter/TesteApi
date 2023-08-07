<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\DepartamentoController;
Route::get('/', [FuncionarioController::class, 'index']);
Route::get('/funcionario/create', [FuncionarioController::class, 'create']);
Route::post('/funcionario', [FuncionarioController::class,'store']);
Route::get('/departamento/create', [DepartamentoController::class, 'create']);
Route::post('/departamento', [DepartamentoController::class,'store']);

Route::get('/tarefas', function () {
    return view('tarefas');
});
Route::get('/funcionarios', function () {
    $busca = request(('search'));
    return view('funcionarios', [ 'busca' => $busca]);
});
Route::get('/quadro', function () {
    return view('quadro');
});
Route::get('/funcionario_teste/{id?}', function ($id = null) {
    return View('funcionario', ['id' => $id]);
});


