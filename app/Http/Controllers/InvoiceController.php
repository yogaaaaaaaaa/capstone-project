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

        if(request('output') == 'pdf') {
            $pdf = Pdf::loadView('customer.invoice', ['orderSablon' => $orderSablon, 'orderDetail' => $orderDetail])->setOptions(['defaultFont' => 'sans-serif']);
            return $pdf->download('Invoice-Pemesanan-Sablon.pdf');
        }

        return view('customer.invoice', compact('orderSablon', 'orderDetail'));
    }
}
