<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// First page (use for view all book, Landing page for buyer)
Route::get('/', [HomeController::class, 'index']);

// Book-Detail-Buyer's View