<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\DetailOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function OrderSablon() {
        return view('customer.orderSablon');
    }

    public function indexOrder() {
        $order = Order::all();

        return view('admin.content.content-main-order', compact('order'));
    }

    public function addOrder(Request $request) {
        // dd($request);
        // dd($request->all());
        $request->validate([
            'order_name' => 'required|string|max:255',
            'order_address' => 'required|string|max:255',
            'type_tshirt' => 'required|in:Short_Sleeved,Long_Sleeved',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'design_link' => 'nullable|string',
            'quantity' => 'required|integer',
            'description' => 'required|string',
        ]);

        // dd($validasiData);

        $orderSablon = new Order();
        
        $orderSablon->order_code = $this->generateOrderCode();
        $orderSablon->order_name = $request->input('order_name');
        $orderSablon->order_address = $request->input('order_address');
        $orderSablon->no_hp = $request->input('no_hp');
        $orderSablon->email = $request->input('email');
        $orderSablon->design_link = $request->input('design_link');
        $orderSablon->description = $request->input('description');
        $orderSablon->payment_status = $request->input('payment_status', 'Belum Bayar');
        $orderSablon->order_status = $request->input('order_status', 'Belum diproses');
        $orderSablon->user_id = Auth::id();
        $orderSablon->save();

        $orderSablonId = $orderSablon->id;

        $orderDetail = new DetailOrder();

        $orderDetail->order_id = $orderSablonId;
        $orderDetail->order_type = $request->input('order_type', 'sablon');
        $orderDetail->type_tshirt = $request->input('type_tshirt');
        $orderDetail->quantity = $request->input('quantity');
        $orderDetail->total_units = ($request->input('type_tshirt') === 'Short_Sleeved') ? 65000 : 75000;
        $orderDetail->total_price = $request->input('quantity') * $orderDetail->total_units;
        $orderDetail->user_id = Auth::id();
        
        // dd($orderSablon);
        $orderDetail->save();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $orderSablon->id,
                'gross_amount' => $orderDetail->total_price,
            ),
            'customer_details' => array(
                'order_name' => $request->order_name,
                'order_address' => $request->order_address,
                'email' => $request->email,
                'phone' => $request->no_hp,
                'order_type' => $orderDetail->order_type,
                'type_tshirt' => $orderDetail->type_tshirt,
                'quantity' => $orderDetail->quantity,
                'total_units' => $orderDetail->total_units,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('customer.orderDetails', compact('orderDetail', 'orderSablon', 'snapToken'));
    }

    private function generateOrderCode() {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Daftar huruf alfabet
        $date = now()->format('Ymd'); // Mendapatkan tanggal saat ini dalam format YYYYMMDD
        $randomAlphabet = substr(str_shuffle($alphabet), 0, 3); // Mengambil 3 huruf acak dari alfabet
        $randomNumber = mt_rand(1000, 9999); // Menghasilkan angka acak antara 1000 dan 9999
    
        // Kombinasi dari tanggal, huruf acak, dan angka acak untuk membuat kode invoice
        $orderCode = 'INV-' . $randomAlphabet . '-' . $date . '-' . $randomNumber;
    
        return $orderCode;
    }

    public function index_detailOrder() {
        $orderDetail = DetailOrder::all();
        return view('admin.content.content-main-detail-order', compact('orderDetail'));
    }

    // public function index_detailOrder_user() {
    //     $userId = Auth::id();
    //     $orderDetail = DetailOrder::where('user_id', $userId)->whereHas('order', function ($query) {
    //         $query->where('payment_status', 'Belum Bayar');
    //     })->get();

    //     // Set your Merchant Server Key
    //     \Midtrans\Config::$serverKey = config('midtrans.server_key');
    //     // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //     \Midtrans\Config::$isProduction = false;
    //     // Set sanitization on (default)
    //     \Midtrans\Config::$isSanitized = true;
    //     // Set 3DS transaction for credit card to true
    //     \Midtrans\Config::$is3ds = true;

    //     $params = array(
    //         'transaction_details' => array(
    //             'order_id' => $orderDetail->order->id,
    //             'gross_amount' => $orderDetail->total_price,
    //         ),
    //         'customer_details' => array(
    //             'order_name' => $orderDetail->order->order_name,
    //             'order_address' => $orderDetail->order->order_address,
    //             'order_type' => $orderDetail->order_type,
    //             'type_tshirt' => $orderDetail->type_tshirt  ,
    //             'quantity' => $orderDetail->quantity,
    //             'total_units' => $orderDetail->total_units,
    //         ),
    //     );

    //     $snapToken = \Midtrans\Snap::getSnapToken($params);
    //     return view('customer.orderDetails', compact('orderDetail'));
    // }

}
