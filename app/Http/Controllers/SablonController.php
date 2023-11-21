<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SablonController extends Controller
{
    public function OrderSablon() {
        return view('customer.orderSablon');
    }
}
