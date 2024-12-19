<?php

use Illuminate\Support\Facades\Route;

Route::get('/cad', function () {
    return response()->file(public_path('cad.html'));
});

Route::get('/artigo', function () {
    return response()->file(public_path('artigo.html'));
});

Route::get('/', function () {
    return response()->file(public_path('index.html'));
});

Route::get('/login', function () {
    return response()->file(public_path('login.html'));
});

Route::get('/perfil', function () {
    return response()->file(public_path('perfil.html'));
});




