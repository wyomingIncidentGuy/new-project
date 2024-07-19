<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/news', [\App\Http\Controllers\NewsController::class, 'list']);

Route::get('/news/page/{id}', [\App\Http\Controllers\NewsController::class, 'page'])->name('page-view');;
