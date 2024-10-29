<?php

use App\Http\Controllers\FileUploadController as ControllersFileUploadController;
use App\Http\Controllers\MaintenanceController;
use Illuminate\Support\Facades\Route;
use Livewire\Features\SupportFileUploads\FileUploadController;

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



Route::get('/maintenance/create', [MaintenanceController::class, 'create'])->name('maintenance.create');
Route::post('/maintenance/store', [MaintenanceController::class, 'store'])->name('maintenance.store');

Route::post('/maintenance/store/upload', [MaintenanceController::class, 'testUpload'])->name('maintenance.upload');


Route::get('/', function () {
    return view('company-profile.homepage');
});

Route::get('/about', function () {
    return view('company-profile.about');
});

Route::get('/product', function () {
    return view('company-profile.product');
});

Route::get('/articles-and-events', function () {
    return view('company-profile.articles-and-events');
});

Route::post('/maintenance/uploads/process', [ControllersFileUploadController::class, 'process'])->name('uploads.process');
