<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

// Route::get('/api/todos',[TodoController::class,'index']);
// Route::post('/api/todos',[TodoController::class,'store']);
// Route::get('/api/todos/{id}',[TodoController::class,'update']);
// Route::get('/api/todos/{id}',[TodoController::class,'destroy']);
