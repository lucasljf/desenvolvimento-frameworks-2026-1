<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola-mundo', function () {
    return 'Olá, mundo!';
});

Route::get('/teste-view', function () {
    return view('teste-view');
});
