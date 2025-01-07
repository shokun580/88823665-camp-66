<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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

Route::post('/mycontroller/{id?}',
[MyController::class,'myfunction']);
