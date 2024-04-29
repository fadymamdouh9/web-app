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
Route::get('/about', [App\Http\Controllers\pagescontroller::class,'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\pagescontroller::class,'contact'])->name('contact');

Route::get('/', [App\Http\Controllers\pagescontroller::class,'home'])->name('home');
Route::get('/products/{id}', [App\Http\Controllers\pagescontroller::class,'single'])->name('single');

