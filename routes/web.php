<?php

use App\Http\Controllers\karyawanController;
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

Route::get('/', [karyawanController::class, 'index'])->name('dashboard');
Route::get('/create', [karyawanController::class, 'create']);
Route::post('/store', [karyawanController::class, 'store']);
Route::get('/edit/{id}', [karyawanController::class, 'edit']);
Route::post('update/{id}', [karyawanController::class, 'update']);
Route::get('/detail/{id}', [karyawanController::class, 'detail']);
Route::delete('/{id}', [karyawanController::class, 'delete']);

require __DIR__ . '/auth.php';
