<?php

use App\Http\Controllers\SiteController;
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


Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'soon')->name('index');
    Route::get('/green-screen', 'green')->name('green-screen');
    Route::get('/white-screen', 'white')->name('white-screen');
    Route::get('/virtual-studio', 'studio')->name('virtual-studio');
    Route::get('/music-video', 'music')->name('music-video');
    Route::get('/online-course', 'course')->name('online-course');
    Route::get('/equipment', 'equipment')->name('equipment');
});
