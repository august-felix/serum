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
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/interview',[IndexController::class, 'interview'])->name('interview');
Route::get('/introduction',[IndexController::class, 'introduction'])->name('introduction');
Route::get('/tests',[IndexController::class, 'tests'])->name('tests');
Route::get('/upload', [IndexController::class, 'upload'])->name('upload');
Route::get('/views',[IndexController::class, 'views'])->name('views');
Route::post('/uploadfile', [IndexController::class, 'uploadfile'])->name('uploadfile');


Route::post('/search', [IndexController::class, 'search'])->name('search');
