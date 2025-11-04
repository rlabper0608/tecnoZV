<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;


Route::get('/', [PaginaController::class, 'index'])->name('tecnoZV.index');
Route::get('pisos/{id}', [PaginaController::class, 'show'])->name('tecnoZV.show');
Route::get('atencioncliente', [PaginaController::class, 'atencion'])->name('tecnoZV.atencion');
Route::get('contacto', [PaginaController::class, 'contacto'])->name('tecnoZV.contacto');