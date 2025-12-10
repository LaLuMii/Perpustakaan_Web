<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VBukuController;

Route::get('/', fn() => view('index'))->name('landing');

Route::get('/books', [VBukuController::class, 'index'])->name('vbuku.index');

Route::get('/about', fn() => view('about'))->name('about');

