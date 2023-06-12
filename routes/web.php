<?php

use App\Http\Controllers\DeadlineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TodolistController;
use App\Http\Controllers\VideoController;
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

Route::get('/', [HomeController::class, 'index'])->middleware('guestauth');
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [HomeController::class, 'logout']);
Route::get('/', [HomeController::class, 'getAllData'])->middleware('guestauth');
Route::get('/todolist', [TodolistController::class, 'index'])->middleware('guestauth');
Route::get('/todolist', [TodolistController::class, 'getAllList'])->middleware('guestauth');
Route::get('/note', [NoteController::class, 'index'])->middleware('guestauth');
Route::get('/todolist/{id}', [TodolistController::class, 'finishList']);
Route::get('/note', [NoteController::class, 'getAllNotes'])->middleware('guestauth');
Route::get('/newnote', [NoteController::class, 'newNoteIndex'])->middleware('guestauth');
Route::post('/newnote', [NoteController::class, 'newNote'])->name('newnote');
Route::get('/editnote/{id}', [NoteController::class, 'editNoteIndex'])->middleware('guestauth');
Route::put('/editnote', [NoteController::class, 'editNote']);
Route::get('/newdolist', [TodolistController::class, 'newDoListIndex'])->middleware('guestauth');
Route::post('/newdolist', [TodolistController::class, 'newDoList'])->name('newlist');
Route::get('/deadline', [DeadlineController::class, 'index'])->middleware('guestauth');
Route::get('/deadline', [DeadlineController::class, 'getAllDeadlines'])->middleware('guestauth');
Route::get('/newdeadline', [DeadlineController::class, 'newDeadlineIndex'])->middleware('guestauth');
Route::post('/newdeadline', [DeadlineController::class, 'newDeadline'])->name('newdeadline');
Route::get('/editdeadline/{id}', [DeadlineController::class, 'editDeadlineIndex'])->middleware('guestauth');
Route::put('/editdeadline', [DeadlineController::class, 'editDeadline']);
Route::get('/vbl', [VideoController::class, 'index'])->middleware('guestauth');
Route::get('/deletedeadline/{id}', [DeadlineController::class, 'deleteDeadline']);
Route::get('/deletenote/{id}', [NoteController::class, 'deleteNote']);
Route::get('/subscription', [SubscriptionController::class, 'index'])->middleware('guestauth');
