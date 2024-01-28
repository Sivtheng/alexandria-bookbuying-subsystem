<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ShippingController;
use Illuminate\Support\Facades\Route;

// First page (use for view all book, Landing page for buyer)
Route::get('/', [HomeController::class, 'index']);
Route::get('/', [BookController::class, 'index']);

// book details 
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');


