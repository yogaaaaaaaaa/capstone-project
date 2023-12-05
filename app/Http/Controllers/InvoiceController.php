<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\DetailOrder;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function printInvoice($orderSablonId)
    {
        $orderSablon = Order::findOrFail($orderSablonId);
        $orderDetail = DetailOrder::where('order_id', $orderSablonId)->first();

        $pdf = Pdf::loadView('customer.cetakInvoice', ['orderSablon' => $orderSablon, 'orderDetail' => $orderDetail])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('Invoice-Pemesanan-Sablon.pdf');

        // return view('customer.cetakInvoice', compact('orderSablon', 'orderDetail'));
    }

    public function showInvoice($orderSablonId) {
        $orderSablon = Order::findOrFail($orderSablonId);
        $orderDetail = DetailOrder::where('order_id', $orderSablonId)->first();

        return view('customer.invoice', compact('orderSablon', 'orderDetail'));
    }
}
