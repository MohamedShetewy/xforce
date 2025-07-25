<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\ItemController::class, 'index'])->name('home');

Route::get('/items', [App\Http\Controllers\ItemController::class, 'items'])->name('item.items');
Route::get('/create', [App\Http\Controllers\ItemController::class, 'create'])->name('item.create');
Route::get('/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit'])->name('item.edit');
Route::post('/store', [App\Http\Controllers\ItemController::class, 'store'])->name('item.store');
Route::post('/update/{id}', [App\Http\Controllers\ItemController::class, 'update'])->name('item.update');
Route::get('/destroy/{id}', [App\Http\Controllers\ItemController::class, 'destroy'])->name('item.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
