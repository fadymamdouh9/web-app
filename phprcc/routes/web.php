<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/about', [App\Http\Controllers\pagescontroller::class,'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\pagescontroller::class,'contact'])->name('contact');

Route::get('/', [App\Http\Controllers\pagescontroller::class,'home'])->name('home');
Route::get('/products/{id}', [App\Http\Controllers\pagescontroller::class,'single'])->name('single');
Route::post('/ordersave', [App\Http\Controllers\pagescontroller::class,'ordersave'])->name('ordersave');
Route::post('/savecontact', [App\Http\Controllers\pagescontroller::class,'savecontact'])->name('savecontact');




