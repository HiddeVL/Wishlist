<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home');
});

Route::get('/logout', function (){
    Auth::logout();
    return view('home');
});

Route::get('/dashboard', [ProjectController::class, 'index'] )->middleware(['auth'])->name('dashboard');

Route::get("/bekijken", [ProjectController::class, 'index'])->middleware(['auth']);
Route::get("/toevoegen", [ProjectController::class, 'create'])->middleware(['auth']);

Route::get("/home", function (){
    return view('home');
});

require __DIR__.'/auth.php';

route::resource("projects", App\Http\Controllers\ProjectController::Class);
