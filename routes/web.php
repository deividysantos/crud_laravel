<?php

use App\Http\Controllers\SetorController;
use App\Http\Controllers\SituacaoController;
use App\Http\Controllers\ChamadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('chamado.index');
});

Route::get('/setor', [SetorController::class, 'index'])->name('setor.index');
Route::get('setor/novo', [SetorController::class, 'create'])->name('setor.novo');
Route::post('setor/novo', [SetorController::class, 'store'])->name('setor.gravar');
Route::get('setor/apagar/{setorId}', [SetorController::class, 'delete'])->name('setor.apagar');


Route::get('/situacao', [SituacaoController::class, 'index'])->name('situacao.index');
Route::get('situacao/nova', [SituacaoController::class, 'create'])->name('situacao.novo');
Route::post('situacao/nova', [SituacaoController::class, 'store'])->name('situacao.gravar');
Route::get('situacao/apagar/{situacaoId}', [SituacaoController::class, 'delete'])->name('situacao.apagar');

Route::get('/chamado', [ChamadoController::class, 'index'])->name('chamado.index');
Route::get('chamado/nova', [ChamadoController::class, 'create'])->name('chamado.novo');
Route::post('chamado/nova', [ChamadoController::class, 'store'])->name('chamado.gravar');
Route::get('chamado/apagar/{chamadoId}', [ChamadoController::class, 'delete'])->name('chamado.apagar');
Route::get('chamado/{chamadoId}', [ChamadoController::class, 'view'])->name('chamado.view');
Route::get('chamado/editar/{chamadoId}', [ChamadoController::class, 'edit'])->name('chamado.edit');
