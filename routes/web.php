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
Route::get('/pre-quiz', [IndexController::class, 'prequiz'])->name('prequiz');
Route::get('/interview',[IndexController::class, 'interview'])->name('interview');
//Route::get('/introduction',[IndexController::class, 'introduction'])->name('introduction');
Route::get('/quz-tests',[IndexController::class, 'tests'])->name('tests');
Route::get('/quz',[IndexController::class, 'quz'])->name('quz');
Route::get('/orders',[IndexController::class, 'orders'])->name('orders');
Route::get('/case-interview',[IndexController::class, 'caseInterview'])->name('caseInterview');

Route::get('/upload', [IndexController::class, 'upload'])->name('upload');
Route::get('/views',[IndexController::class, 'views'])->name('views');



Route::post('/uploadfile', [IndexController::class, 'uploadfile'])->name('uploadfile');
Route::post('/uploaddrag', [IndexController::class, 'uploadDrag'])->name('uploadDrag');
Route::post('/search', [IndexController::class, 'search'])->name('search');
Route::post('/saveTest', [IndexController::class, 'saveTest'])->name('saveTest');
Route::post('/complete-answer', [IndexController::class, 'complete_answer'])->name('complete_answer');
Route::get('/deleteTest/{testId}', [IndexController::class, 'deleteTest'])->name('deleteTest');


