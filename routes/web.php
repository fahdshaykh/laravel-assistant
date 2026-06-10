<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', [\App\Http\Controllers\ChatController::class, 'index'])->name('chat');
Route::get('/chat/stream', [\App\Http\Controllers\ChatController::class, 'stream'])->name('chat.stream');
