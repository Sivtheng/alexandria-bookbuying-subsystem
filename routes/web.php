<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// First page (use for view all book, Landing page for buyer)
Route::get('/', [HomeController::class, 'index']);
Route::get('/', [BookController::class, 'index']);

// book details 
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

// showing the order form for a specific book
Route::get('/books/{id}/order', [OrderController::class, 'show'])->name('books.order');
Route::post('/make-order', [OrderController::class, 'makeOrder'])->name('make.order');



