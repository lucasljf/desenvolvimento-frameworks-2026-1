<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return redirect()->route('categorias.index');
});

Route::get('/ola-mundo', function () {
    return 'Olá, mundo!';
});

Route::get('/teste-view', function () {
    return view('teste-view');
});

Route::resource('categorias', CategoriaController::class);
