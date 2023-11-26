<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function Keranjang() {
        return view('customer.keranjang');
    }
}
