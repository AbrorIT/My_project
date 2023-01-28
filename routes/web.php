<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Hello world aaa' ;
});

Route::get('home', function (){
    return 'ВЫ вернулись домой';
});

Route::get('user', function (){
    return 'Пользаватель Аброр';
});
Route::get('abror', function (){
    return 'Я Султанов Аброр Хайруллаевич';
});





