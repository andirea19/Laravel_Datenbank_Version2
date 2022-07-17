<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\QuestionController;

Route::get('list', [AjaxController::class, 'index']);
Route::get('show-user', [AjaxController::class, 'show']);

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

Route::get('/', function () {
    return view('welcome');
});

//generelle Weiterleitung der Seiten möglich?
Route::get('{page_name}', function($page_name)
 {
    return View::make('frontend/'.$page_name);
 });

Route::get('/quiz', function () {
   return view('quiz');
});

//Route ::get('/quiz/{id}', function ($id) {
//   return view('quiz', ['id' => $id]);
//});

Route::get('/quiz/{id}/{question}', function ($id, $question) {
   return view('quiz', ['id' => $id, 'question' => $question]);
});

Route::get('/question/create', [QuestionController::class, 'create'])->name('question.create'); 

Route::get('/question', [QuestionController::class, 'index'])->name('question.index'); 

//Route::get('/leaderboard', function () {
//   return view('leaderboard');
//});

Route ::get('/highscore/{id}', function ($id) {
   return view('highscore', ['id' => $id]);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//ajax route
Route::get('/ajax-crud/{question_id}/edit',['AjaxController','edit'])->name('ajax-crud.edit');

//require __DIR__.'/auth.php';
