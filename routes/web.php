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
    return view('toppage');
});

Auth::routes();


Route::get('/scenario',function(){
    return view('scenario.index');
});

Route::get('/mode',function(){
    return view('mode.index');
});

Route::get('/allSelect',function(){
    return view('mode.allSelect');
});