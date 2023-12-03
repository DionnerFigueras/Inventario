<?php

use App\Http\Controllers\InsumoController;
use App\Http\Controllers\IntercambioController;
use App\Http\Controllers\MedicamentoController;
use Illuminate\Support\Facades\Route;

//Ruta para ir al inicio de la pagina
Route::view('/', 'welcome')->name("inicio");

//Ruta para ir a la lista de medicamentos
Route::get('/Medicamentos/index', [MedicamentoController::class, 'index'])->name('medicamentos');

//Ruta para ir a la lista de insumos
Route::get('/Insumos/index', [InsumoController::class, 'index'])->name('insumos');

//Ruta para ir a la lista de intercambios
Route::get('/Intercambios/index', [IntercambioController::class, 'index'])->name('intercambios');

//Ruta para agregar un nuevo medicamento a la lista
Route::get('/Medicamentos/create', [MedicamentoController::class, 'create'])->name('medicamento.create');

//Ruta de tipo Post para almacenar los datos del nuevo medicamento
Route::post('/Medicamentos/index', [MedicamentoController::class,'store'])->name('medicamentos.store');

//Ruta para agregar un nuevo insumo a la lista
Route::get('/Insumos/create', [InsumoController::class,'create'])->name('insumo.create');

//Ruta de tipo Post para almacenar los datos del nuevo medicamento
Route::post('/Insumos/index', [InsumoController::class, 'store'])->name('insumo.store');

//Ruta para agregar un nuevo intercambio
Route::get('/Intercambios/create', [IntercambioController::class, 'create'])->name('intercambio.create');

//Ruta tipo Post para almacenar los datos del nuevo intercambio
Route::post('/Intecambios/Index', [IntercambioController::class, 'store'])->name('intercambio.store');

//Ruta para visulizar un medicamento en espesifico
Route::get('/Medicamentos/index/{medicamento}', [MedicamentoController::class, 'show'])->name('medicamentos.show');

//Ruta para editar la informacion de un medicamento
Route::get('/Medicamentos/index/{medicamento}/edit', [MedicamentoController::class, 'edit'])->name('medicamento.edit');

//Ruta para cambiar los valores del medicamento seleccionado
Route::patch('/Medicamentos/index/{medicamento}', [MedicamentoController::class, 'update'])->name('medicamento.update');

//Ruta para visualizar un insumo en espesifico
Route::get('/Insumos/index/{insumo}', [InsumoController::class,'show'])->name('insumos.show');

//Ruta para editar la informacion de un insumo
Route::get('/Insumos/index/{insumo}/edit', [InsumoController::class, 'edit'])->name('insumo.edit');

//Ruta para cambiar los valores del insumo seleccinoado
Route::patch('/Insumos/index/{insumo}', [InsumoController::class, 'update'])->name('insumo.update');

//Ruta para eliminar un medicamento
Route::delete('/Medicamentos/index/{medicamento}', [MedicamentoController::class, 'destroy'])->name('medicamento.destroy');

//Ruta para eliminar un insumo
Route::delete('/Insumos/index/{insumo}', [InsumoController::class, 'destroy'])->name('insumo.destroy');

//Ruta para eliminar un intercambio
Route::delete('/Intercambios/index/{intercambio}', [IntercambioController::class, 'destroy'])->name('intercambio.destroy');








