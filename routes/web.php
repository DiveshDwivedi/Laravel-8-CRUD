<?php

use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class,'index'])->name('index');

Route::post('/', [StudentController::class,'create'])->name('create');

Route::get('/delete/{id}', [StudentController::class,'destroy']);

Route::get('/edit/{id}', [StudentController::class,'edit']);

Route::post('/update', [StudentController::class,'update'])->name('update');
