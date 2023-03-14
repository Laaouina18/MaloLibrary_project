<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource("/artist",ArtistController::class);
   
Route::get('/inscrir',[UserController::class,'index']);
Route::post('/store',[UserController::class,'store']);



