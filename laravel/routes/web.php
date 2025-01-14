<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/login',
    [LoginController::class,'login']);

Route::get('/register',
    [RegisterController::class,'register']);

Route::get('/home', function(){
    return view('layouts.default');
});

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});

Route::get('/mycontroller/{id?}', 
    [MyController::class,'myfunction']);

Route::post('/mycontroller/{id?}', 
    [MyController::class,'myfunction']);