<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AjaxController;

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

Route::get('/quiz', function () {
   return view('quiz');
});

//Route ::get('/quiz/{id}', function ($id) {
//   return view('quiz', ['id' => $id]);
//});

Route ::get('/quiz/{id}/{question}', function ($id, $question) {
   return view('quiz', ['id' => $id, 'question' => $question]);
});

Route ::get('/leaderboard', function () {
   return view('leaderboard');
});

Route ::get('/highscore/{id}', function ($id) {
   return view('highscore', ['id' => $id]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
