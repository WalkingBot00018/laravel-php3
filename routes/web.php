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
    return view('welcome');
});

Route::get('/colombia', function () {
    return view('colombia');
});
Route::get('/peru', function () {
    return view('peru');
});


Route::get('/bolivia', function () {
    return view('bolivia');
});

Route::get('/mexico', function () {
    return view('mexico');
});

Route::get('/brasil', function () {
    return view('brasil');
});