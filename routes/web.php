<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileUploadController;

Route::get('/', function () { return view('welcome'); });
Route::get('test', function () { return "masuk test"; });
Route::get('halo', function () { return "Halo, Selamat datang di tutorial laravel"; });

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// tested
Route::get('/file-upload', [FileUploadController::class, 'index'])->name('fileupload.index');
Route::post('/multiple-file-upload', [FileUploadController::class, 'multipleUpload'])->name('multiple.fileupload');