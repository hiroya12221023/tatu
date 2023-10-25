<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResolveController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ArticleGeneratorController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('quiz.hiro');
});


Route::get('/index', [ResolveController::class, 'index'])->name('index');
Route::get('/resolve', [ResolveController::class, 'resolve'])->name('resolve');
Route::get('/quiz', [QuizController::class, 'showQuizForm']);
Route::post('/generate-quiz', [QuizController::class, 'generateQuiz']);
Route::get('/write', function () {
    $title = '';
    $content = '';
    return view('write', compact('title', 'content'));
}); // ここに閉じ括弧を追加

Route::post('/generate', [ArticleGeneratorController::class, 'index']);
Route::post('/show-answer', [QuizController::class, 'showanswer']);
Route::post('/show-answeraaaaaa', [QuizController::class, 'showanswer']);

