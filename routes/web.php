<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactoController;
use App\Models\Contacto;
use Illuminate\Support\Facades\Route;

// Esta es la ruta de incio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Esta es el grupo de Categorias
Route::prefix('categorias')->group(function () {
    Route::get('/', [CategoriaController::class, 'index'] )->name('categorias.index');
    Route::get('/agregar', [CategoriaController::class, 'create'] )->name('categorias.create');
    Route::get('/editar/{id}', [CategoriaController::class, 'edit'] )->name('categorias.edit');
    Route::get('/eliminar/{id}', [CategoriaController::class, 'show'] )->name('categorias.show');
    
    // Ruta para guardar a la base de datos
    Route::post('/guardar', [CategoriaController::class, 'store'] )->name('categorias.store');
    
    //Ruta para actualizar un registro a la base de datos
    Route::put('/actualizar/{id}', [CategoriaController::class, 'update'] )->name('categorias.update');
    
    //Ruta para ELiminar de la base de datos.
    Route::delete('/destruir/{id}', [CategoriaController::class, 'destroy'] )->name('categorias.destroy');
    
    
});

// Esta es el grupo de Contactos
Route::prefix('contactos')->group(function () {
    Route::get('/', [ContactoController::class, 'index'] )->name('contactos.index');
    Route::get('/agregar', [ContactoController::class, 'create'] )->name('contactos.create');
    Route::get('/editar/{id}', [ContactoController::class, 'edit'] )->name('contactos.edit');
    Route::get('/eliminar/{id}', [ContactoController::class, 'show'] )->name('contactos.show');
    
    // Ruta para guardar a la base de datos
    Route::post('/guardar', [ContactoController::class, 'store'] )->name('contactos.store');
    //Ruta para actualizar un registro a la base de datos
    Route::put('/actualizar/{id}', [ContactoController::class, 'update'] )->name('contactos.update');
 
    //Ruta para ELiminar de la base de datos.
    Route::delete('/destruir/{id}', [ContactoController::class, 'destroy'] )->name('contactos.destroy');
});