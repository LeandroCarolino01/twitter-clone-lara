<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ DashboardController::class,'index'])->name('dashboard');
Route::post('/idea',[IdeaController::class,'store'])->name('idea.store');
Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');

Route::get('/terms', function(){
    return view('terms');
});



