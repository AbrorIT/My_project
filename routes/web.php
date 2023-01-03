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
    return 'abror' ;
});



Route::get('my_page', 'MyPlaceController@index');

Route::get('my_age', function(){
    return 22;
});

Route::get('my_name', function(){
    return 'Abror';
});

Route::get('my_firstname', function(){
    return 'Sultanov';
});

Route::get('my_hobi', function(){
    return 'programmer';
});
Route::get('my_word', function(){
    return 'proga';
});