<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

// HomeController.php
// index(): Display the home page with all available books.

// BookController.php
// index(): Display a list of all available books.
// show($id): Show the details of a specific book based on its ID.
// addToCart($id): Add a book to the user's shopping cart (if applicable).
// checkout(): Process the checkout process (if applicable).

// ShippingController.php
// showForm(): Display the shipping information form.
// submitForm(): Process the shipping information submitted by the user.