<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SiswaController;
use GuzzleHttp\Middleware;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/siswa',[SiswaController::class,'index']);
    Route::get('/siswa/create',[SiswaController::class,'create']);
    Route::post('/siswa/store',[SiswaController::class,'store']);
    Route::get('/siswa/{id}/edit',[SiswaController::class,'edit']);
    Route::put('/siswa/{id}',[SiswaController::class,'update']);
    Route::delete('/siswa/{id}',[SiswaController::class,'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
