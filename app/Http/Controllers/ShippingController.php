<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function ship(){
        return view('shippingdetails');
    }
}
