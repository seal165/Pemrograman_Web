<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
Route::get('/coba', function () {
    return view('coba', [
        'nama' => 'Eolia Shalbillah',
        'nim' => '2318039',
        'email' => '2318039@student.itn.ac.id',
    ]);
});
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/tambah', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);
Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy']);
