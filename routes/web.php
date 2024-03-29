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
Route::get('information/{id}/{slug}', [App\Http\Controllers\frontend\InformationController::class, 'index'])->name('information');
Route::get('detail-information/{id}/{slug}', [App\Http\Controllers\frontend\InformationController::class, 'detail'])->name('detail-information');
Route::post('search', [App\Http\Controllers\frontend\InformationController::class, 'search'])->name('search');
Route::get('employee', [App\Http\Controllers\frontend\pegawaiController::class, 'index'])->name('employee');
Route::get('employee/category/{id}', [App\Http\Controllers\frontend\pegawaiController::class, 'category'])->name('category-employee');
Route::get('employee/{id}', [App\Http\Controllers\frontend\pegawaiController::class, 'detail'])->name('detail-employee');
Route::get('dosen', [App\Http\Controllers\frontend\dosenController::class, 'index'])->name('dosen');
Route::get('dosen/{id}', [App\Http\Controllers\frontend\dosenController::class, 'detail'])->name('detail-dosen');
Route::get('dosen/category/{id}', [App\Http\Controllers\frontend\dosenController::class, 'category'])->name('category-dosen');
Route::get('fakultas', [App\Http\Controllers\frontend\fakultasController::class, 'index'])->name('fakultas');
Route::get('journal', [App\Http\Controllers\frontend\JournalController::class, 'index'])->name('journal');
Route::get('contact', [App\Http\Controllers\frontend\ContactController::class, 'index'])->name('contact');
Route::get('gallery', [App\Http\Controllers\frontend\GalleryController::class, 'index'])->name('gallery');
Route::get('laboratory', [App\Http\Controllers\frontend\LabController::class, 'index'])->name('laboratory');
Route::get('laboratory/{id}/{slug}', [App\Http\Controllers\frontend\LabController::class, 'detail'])->name('detail-laboratory');


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
    Route::post('informasi/category', [App\Http\Controllers\Information\InformationController::class, 'category'])->name('informasi.category');
    Route::delete('informasi/category/{id}', [App\Http\Controllers\Information\InformationController::class, 'categoryDelete'])->name('informasi.category.delete');

    Route::resource('link-terkait', App\Http\Controllers\LinkTerkaitController::class)->except(['show']);
    Route::resource('partner', App\Http\Controllers\PartnerController::class)->except(['show']);
    Route::resource('jurnal', App\Http\Controllers\JurnalController::class)->except(['show']);
    Route::get('tentang', [App\Http\Controllers\AboutController::class, 'index'])->name('tentang');
    Route::post('tentang', [App\Http\Controllers\AboutController::class, 'createOrUpdate'])->name('tentang.createOrUpdate');
    Route::resource('galeri', App\Http\Controllers\GalleryController::class)->except(['show']);
    Route::resource('lab', App\Http\Controllers\LabController::class)->except(['show']);

    Route::get('lab-equipment', [App\Http\Controllers\LabEqController::class, 'index'])->name('lab-equipment');
    Route::get('lab-equipment/create/{id}', [App\Http\Controllers\LabEqController::class, 'create'])->name('lab-equipment.create');
    Route::post('lab-equipment/store', [App\Http\Controllers\LabEqController::class, 'store'])->name('lab-equipment.store');
    Route::get('lab-equipment/show/{id}', [App\Http\Controllers\LabEqController::class, 'show'])->name('lab-equipment.show');
    Route::get('lab-equipment/edit/{id}', [App\Http\Controllers\LabEqController::class, 'edit'])->name('lab-equipment.edit');
    Route::put('lab-equipment/update/{id}', [App\Http\Controllers\LabEqController::class, 'update'])->name('lab-equipment.update');
    Route::delete('lab-equipment/delete/{id}', [App\Http\Controllers\LabEqController::class, 'destroy'])->name('lab-equipment.delete');
    Route::get('lab-equipment-image/delete/{id}', [App\Http\Controllers\LabEqController::class, 'deleteImage'])->name('lab-equipment-image.delete');

    
    Route::get('galeri-lab/{id}', [App\Http\Controllers\LabController::class, 'deleteGallery'])->name('lab.deleteGallery');
    Route::post('lab/category', [App\Http\Controllers\LabController::class, 'category'])->name('lab.category');
    Route::delete('lab/category/{id}', [App\Http\Controllers\LabController::class, 'categoryDelete'])->name('lab.category.delete');

    Route::resource('mata-kuliah', App\Http\Controllers\MataKuliahController::class)->except(['show']);


    Route::post('dosen/category', [App\Http\Controllers\Profile\DosenController::class, 'category'])->name('dosen.category');
    Route::delete('dosen/category/{id}', [App\Http\Controllers\Profile\DosenController::class, 'categoryDelete'])->name('dosen.category.delete');
    Route::get('dosen/search', [App\Http\Controllers\Profile\DosenController::class, 'mk_search'])->name('dosen.search');

});




