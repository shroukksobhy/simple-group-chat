<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Message;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::view('/users', 'users.showAll')->name('users.all');
Route::resource('/users', UserController::class);

Route::get('delete_chat', function () {
    Message::truncate();
    return redirect()->route('home');
})->middleware(['auth'])->name('delete_chat');