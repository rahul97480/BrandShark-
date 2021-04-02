<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crud;

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

Route::get('/homepage',[crud::class,'read']);
Route::view('/add','add');
Route::post('/submit',[crud::class,'create']);
Route::get('update/{Id}',[crud::class,'edit']);
Route::get('delete/{Id}',[crud::class,'delete']);