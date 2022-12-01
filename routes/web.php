<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarios;
use App\Http\Controllers\ControladorP;
use App\Models\usuario;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuarios', [usuarios::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/crear', [usuarios::class, 'crear'])->name('usuarios.crear');
Route::post('/usuarios/crear', [usuarios::class, 'insertar'])->name('usuarios.insertar');
Route::resource('usuarios', usuarios::class);

Route::get('/generales', [ControladorP::class,'fGenerales'])->name('NGenerales');
Route::get('/especificos', [ControladorP::class,'fEspecificos'])->name('NEspecificos');
Route::get('/equipos', [ControladorP::class,'fEquipos'])->name('NEquipos');

//Funcion para mostrar un registro a eliminar
Route::get('/usuarios/{id}/confirm', [usuarios::class, 'confirm'])->name('usuarios.confirm');
//Funcion destroy para eliminar un registro filtrado
Route::delete('/usuarios', [usuarios::class, 'destroy'])->name('usuarios.destroy');
