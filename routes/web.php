<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/customers', [CustomerController::class, 'index'])->middleware(['auth'])->name('customers');

Route::get('/customer/create', [CustomerController::class, 'create'])->middleware(['auth']);
Route::post('/customer/create', [CustomerController::class, 'store'])->middleware(['auth']);

Route::get('/customer/{id}', [CustomerController::class, 'show'])->middleware(['auth']);
Route::patch('/customer/{id}', [CustomerController::class, 'edit'])->middleware(['auth']);
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->middleware(['auth']);



require __DIR__.'/auth.php';
