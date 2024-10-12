<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::prefix('articles')->group(
    function () {
        Route::get('/', [ArticlesController::class,'index'])->name('articles.index');
    }
);

Route::prefix('events')->group(
    function () {
        Route::get('events', [EventsController::class, 'index'])->name('events.index');
    }
);