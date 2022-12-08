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

Route::get('leader', [App\Http\Controllers\frontend\PimpinanController::class, 'index'])->name('leader');
Route::get('leader/{id}', [App\Http\Controllers\frontend\PimpinanController::class, 'detail'])->name('detail-leader');
Route::get('vision', [App\Http\Controllers\frontend\visimisiController::class, 'index'])->name('vision');
Route::get('information/{id}/{name}', [App\Http\Controllers\frontend\InformationController::class, 'index'])->name('information');
Route::get('detail-information/{id}', [App\Http\Controllers\frontend\InformationController::class, 'detail'])->name('detail-information');
Route::get('employee', [App\Http\Controllers\frontend\pegawaiController::class, 'index'])->name('employee');
Route::get('employee/{id}', [App\Http\Controllers\frontend\pegawaiController::class, 'detail'])->name('detail-employee');
Route::get('dosen', [App\Http\Controllers\frontend\dosenController::class, 'index'])->name('dosen');

Auth::routes([
    'register' => false
]);

Route::prefix('admin')->group(function () {

    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('users', App\Http\Controllers\UserController::class)->except(['show']);
    Route::resource('visi', App\Http\Controllers\Profile\VisiController::class)->except(['show']);
    Route::resource('fakultas', App\Http\Controllers\Profile\FakultasController::class)->except(['show']);
    Route::resource('carousel', App\Http\Controllers\CarouselController::class)->except(['show']);
    Route::resource('pimpinan', App\Http\Controllers\Profile\PimpinanController::class)->except(['show']);
    Route::resource('dosen', App\Http\Controllers\Profile\DosenController::class)->except(['show']);
    Route::resource('pegawai', App\Http\Controllers\Profile\PegawaiController::class)->except(['show']);

    Route::resource('informasi', App\Http\Controllers\Information\InformationController::class)->except(['show']);


    Route::post('dosen/category', [App\Http\Controllers\Profile\DosenController::class, 'category'])->name('dosen.category');
    Route::delete('dosen/category/{id}', [App\Http\Controllers\Profile\DosenController::class, 'categoryDelete'])->name('dosen.category.delete');

});




