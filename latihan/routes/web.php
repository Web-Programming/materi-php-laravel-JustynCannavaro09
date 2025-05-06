<?php

use Illuminate\Support\Facades\Route;

Route::get('/welc', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/materi/index',[MateriController::class, 'index'] );

Route::get('/materi/detail',[MateriController::class, 'detail'] );