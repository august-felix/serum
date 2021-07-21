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

Route::get('/after-quiz', [IndexController::class, 'afterquiz'])->name('afterquiz');
Route::get('/after-quiz-answer',[IndexController::class, 'after_answer_1'])->name('after-answer-1');

Route::get('/pre-quiz-1', [IndexController::class, 'prequiz1'])->name('prequiz1');

Route::get('/after-quiz-1', [IndexController::class, 'afterquiz1'])->name('afterquiz1');
Route::get('/after-quiz-answer-1',[IndexController::class, 'after_answer_2'])->name('after-answer-2');

Route::get('/interview',[IndexController::class, 'interview'])->name('interview');
Route::get('/introduction',[IndexController::class, 'introduction'])->name('introduction');
Route::get('/quz-tests',[IndexController::class, 'tests'])->name('tests');
Route::get('/quz',[IndexController::class, 'quz'])->name('quz');
Route::get('/diagnosis',[IndexController::class, 'diagnosis'])->name('diagnosis');
Route::get('/diagnosis-answer',[IndexController::class, 'diagnosis1'])->name('diagnosis-answer');
Route::get('/stage',[IndexController::class, 'stage'])->name('stage');
Route::get('/orders',[IndexController::class, 'orders'])->name('orders');
Route::get('/page6',[IndexController::class, 'page6'])->name('page6');
Route::get('/page6-fact',[IndexController::class, 'page6_fact'])->name('page6-fact');
Route::get('/page7',[IndexController::class, 'page7'])->name('page7');
Route::get('/quiz-1',[IndexController::class, 'quiz_1'])->name('quiz-1');
Route::get('/answer-1',[IndexController::class, 'answer_1'])->name('answer-1');
Route::get('/quiz-2',[IndexController::class, 'quiz_2'])->name('quiz-2');
Route::get('/answer-2',[IndexController::class, 'answer_2'])->name('answer-2');
Route::get('/quiz-3',[IndexController::class, 'quiz_3'])->name('quiz-3');
Route::get('/answer-3',[IndexController::class, 'answer_3'])->name('answer-3');
Route::get('/lasttest',[IndexController::class, 'lasttest'])->name('lasttest');

Route::get('/case-interview',[IndexController::class, 'caseInterview'])->name('caseInterview');

Route::get('/upload', [IndexController::class, 'upload'])->name('upload');
Route::get('/views',[IndexController::class, 'views'])->name('views');



Route::post('/uploadfile', [IndexController::class, 'uploadfile'])->name('uploadfile');
Route::post('/uploaddrag', [IndexController::class, 'uploadDrag'])->name('uploadDrag');
Route::post('/uploaddia', [IndexController::class, 'uploadDia'])->name('uploadDia');
Route::post('/search', [IndexController::class, 'search'])->name('search');
Route::post('/searchDia', [IndexController::class, 'searchDia'])->name('searchDia');
Route::post('/searchDrag', [IndexController::class, 'searchDrag'])->name('searchDrag');
Route::post('/saveTest', [IndexController::class, 'saveTest'])->name('saveTest');
Route::post('/saveDrag', [IndexController::class, 'saveDrag'])->name('saveDrag');
Route::post('/complete-answer', [IndexController::class, 'complete_answer'])->name('complete_answer');
Route::post('/complete-answer-2', [IndexController::class, 'complete_answer_2'])->name('complete_answer_2');
Route::post('/complete-drag', [IndexController::class, 'complete_drag'])->name('complete_drag');
Route::get('/deleteTest/{testId}', [IndexController::class, 'deleteTest'])->name('deleteTest');
Route::get('/deleteTest2/{testId}', [IndexController::class, 'deleteTest2'])->name('deleteTest2');
Route::get('/deletedragdata/{dragId}', [IndexController::class, 'deleteDrag'])->name('deleteDrag');


