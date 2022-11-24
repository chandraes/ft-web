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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes([
    'register' => false,
]);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('users', App\Http\Controllers\UserController::class)->except(['show']);

Route::resource('profiles', App\Http\Controllers\ProfileCompController::class)->except(['show']);
Route::resource('visi', App\Http\Controllers\Profile\VisiController::class)->except(['show']);
Route::resource('fakultas', App\Http\Controllers\Profile\FakultasController::class)->except(['show']);
Route::resource('carousel', App\Http\Controllers\CarouselController::class)->except(['show']);
Route::resource('pimpinan', App\Http\Controllers\Profile\PimpinanController::class)->except(['show']);
Route::resource('dosen', App\Http\Controllers\Profile\DosenController::class)->except(['show']);

Route::post('dosen/category', [App\Http\Controllers\Profile\DosenController::class, 'category'])->name('dosen.category');
Route::delete('dosen/category/{id}', [App\Http\Controllers\Profile\DosenController::class, 'categoryDelete'])->name('dosen.category.delete');



