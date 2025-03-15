<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']); 
    Route::post('/', [CategoryController::class, 'create']); 
    Route::get('/{id}', [CategoryController::class, 'create']); 
    Route::put('/{id}', [CategoryController::class, 'update']); 
    Route::delete('/{id}', [ CategoryController::class, 'destroy']); 
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);  // Listar todos los productos
    Route::post('/', [ProductController::class, 'create']); // Crear un producto
    Route::get('/{id}', [ProductController::class, 'show']); // Mostrar un producto específico
    Route::put('/{id}', [ProductController::class, 'update']); // Actualizar un producto
    Route::delete('/{id}', [ProductController::class, 'destroy']); // Eliminar un producto
});
