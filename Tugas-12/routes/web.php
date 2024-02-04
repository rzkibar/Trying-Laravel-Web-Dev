<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/form', [AuthController::class, 'regist']);
Route::post('/welcome', [AuthController::class, 'submit']);

Route::get('/master', function() {
    return view('layouts.master');
});

Route::get('/table', function() {
    return view('pages.table');
});

Route::get('/data-tables', function() {
    return view('pages.dataTable');
});

// Tugas 15 CRUD Builer

Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast/store', [CastController::class, 'store']);
Route::get('/cast/{id}', [CastController::class, 'show']);
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);

Route::put('/cast/{id}', [CastController::class, 'update']);
Route::delete('/cast/{id}', [CastController::class, 'destroy']);








