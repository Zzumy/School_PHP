<?php

use App\Http\Controllers\LessonController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/lesson', [LessonController::class, 'index']);
Route::get('/api/lesson/{id}', [LessonController::class, 'show']);
Route::post('/api/lesson', [LessonController::class, 'store']);
Route::put('/api/lesson/{id}', [LessonController::class, 'update']);
Route::delete('/api/lesson/{id}', [LessonController::class, 'delete']);

Route::get('/lesson/list', [LessonController::class, 'listView']);
Route::get('/lesson/new', [LessonController::class, 'newView']);
Route::get('/lesson/edit/{id}', [LessonController::class, 'editView']);
Route::get('/lesson/delete', [LessonController::class, 'deleteView']);
