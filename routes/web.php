<?php

use App\Http\Controllers\RecursoController;
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

Route::get('/', [RecursoController::class, 'index'])->name('index');

Route::get('recurso/create', [RecursoController::class, 'create'])->name('recurso.create');

Route::post('recurso/store', [RecursoController::class, 'store'])->name('recurso.store');

Route::get('recurso/edit/{recurso}', [RecursoController::class, 'edit'])->name('recurso.edit');



