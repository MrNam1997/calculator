<?php

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

Route::get('/','CalculatorController@index')->name('index');
Route::get('/add','CalculatorController@addition')->name('addition');
Route::get('/minus','CalculatorController@minus')->name('minus');
