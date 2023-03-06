<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;


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

Route::get('/', [QuizController::class, 'home']);

Route::get('/quiz', [QuizController::class, 'quiz'])->name('quiz.quiz');
Route::get('/one_question', [QuizController::class, 'one_question'])->name('quiz.one_question');
Route::post('/result', [QuizController::class, 'result'])->name('quiz.result');

?>
