<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return "</h1>hello world</h1>";
});
Route::get("/mycontroller",
[MyController::class,'myfunction']);


Route::get("/mycontroller/{id?}",
[MyController::class,'myfunction']);

// Route::post('/mycontroller/{id?}',
// [MyController::class,'myfunction']);

Route::get('/',function (){
    return view('layouts.default');
});
Route::get("/login",
[LoginController::class,'index']);

Route::get("/register",
[RegisterController::class,'index']);

Route::get("/home",
[HomeController::class,'index']);
Route::get("/",
[HomeController::class,'index']);
