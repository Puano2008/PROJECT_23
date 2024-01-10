<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
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
    return view('auth.login');
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

// เมนู  User
Route::get('admin/user/index',[UserController::class, 'index'])->name('u.index');
// เมนู  category
Route::get('admin/category/time',[CategoryController::class, 'index'])->name('c.index');
Route::get('admin/category/time1',[CategoryController::class, 'create'])->name('c.create');
Route::post('admin/category/time2',[CategoryController::class, 'insert'])->name('c.insert');
Route::get('admin/category/edil/{id}',[CategoryController::class, 'edit'])->name('c.edit');
Route::post('admin/category/update/{id}',[CategoryController::class, 'update'])->name('c.update');
// เมนู  product
Route::get('admin/product/item',[ProductController::class, 'index'])->name('p.index');
Route::get('admin/product/item1',[ProductController::class, 'create'])->name('p.create');
