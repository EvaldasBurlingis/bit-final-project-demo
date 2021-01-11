<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;

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



Route::get('/countries', [CountryController::class, 'index'])->middleware(['auth'])->name('countries');
Route::get('/country/create', [CountryController::class, 'create'])->middleware(['auth']);
Route::post('/country/create', [CountryController::class, 'store'])->middleware(['auth']);
Route::get('/country/{id}', [CountryController::class, 'show'])->middleware(['auth']);
Route::get('/country/{id}/edit', [CountryController::class, 'show_edit'])->middleware(['auth']);
Route::patch('/country/{id}', [CountryController::class, 'edit'])->middleware(['auth']);


Route::get('/cities', [CityController::class, 'index'])->middleware(['auth'])->name('cities');
Route::get('/city/create', [CityController::class, 'create'])->middleware(['auth']);
Route::post('/city/create', [CityController::class, 'store'])->middleware(['auth']);
Route::get('/city/{id}', [CityController::class, 'show'])->middleware(['auth']);
Route::patch('/city/{id}', [CityController::class, 'edit'])->middleware(['auth']);
Route::delete('/city/{id}', [CityController::class, 'destroy'])->middleware(['auth']);



require __DIR__.'/auth.php';
