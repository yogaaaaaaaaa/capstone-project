<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeUser() {
        return view('customer.home');
    }
    public function orderSablon() {
        return view('customer.orderSablon');
    }
}
