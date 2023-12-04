<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    //
    public function OrderProduct() {
        $products = Product::all();

        return view('customer.orderProduct', compact('products'));
    }
}
