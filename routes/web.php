<?php

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

Route::get('/', function () {
    return view('layouts.admin-master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/bildirim', [App\Http\Controllers\HomeController::class, 'notification'])->name('bildirim');

Route::get('/email', [App\Http\Controllers\HomeController::class, 'email'])->name('email');
Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'show'])->name('show-product');
Route::post('/save-product', [App\Http\Controllers\ProductController::class, 'save'])->name('save-product');



