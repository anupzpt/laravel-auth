<?php

use App\Http\Controllers\OutdoorController;
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

Route::get('/',[OutdoorController::class,'index']);

Route::post('/out-door',[OutdoorController::class,'outDoor'])->name('outDoor');
Route::get('/delete/{id}',[OutdoorController::class,'delete']);
Route::get('/edit/{id}',[OutdoorController::class,'edit']);
Route::post('/edit',[OutdoorController::class,'updateOutdoor'])->name('updateOutdoor');



