<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ShippingController;
use Illuminate\Support\Facades\Route;

// First page (use for view all book, Landing page for buyer)
Route::get('/', [HomeController::class, 'index']);
Route::get('/', [BookController::class, 'index']);

// Book-Detail-Buyer's View
Route::get('/bookdetails', [BookController::class, 'book']);

// Book-Detail-Buyer's shipping detail form
Route::get('/shippingdetails', [ShippingController::class, 'ship']);