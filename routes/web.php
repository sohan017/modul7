<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OstedController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/user', [UserController::class,'sayHi']);

// Route::get('/hi', [OstedController::class,'sayHi']);
// Route::get('/love', [OstedController::class,'LoFu']);
// Route::get('/great/{name?}', [OstedController::class,'great']);