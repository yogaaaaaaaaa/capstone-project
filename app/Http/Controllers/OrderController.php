<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $orderSablon->order_type = $request->input('order_type', 'sablon');
        $orderSablon->no_hp = $request->input('no_hp');
        $orderSablon->email = $request->input('email');
        $orderSablon->design_link = $request->input('design_link');
        $orderSablon->quantity = $request->input('quantity');
        $orderSablon->description = $request->input('description');
        $orderSablon->payment_status = $request->input('payment_status', 'Belum Bayar');
        $orderSablon->order_status = $request->input('order_status', 'Belum diproses');
        $orderSablon->user_id = Auth::id();
        
        // dd($orderSablon);
        $orderSablon->save();

        return redirect()->route('home');
    }

    private function generateOrderCode() {
        $randomString = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);
        $randomNumber = mt_rand(1000, 9999);
        $orderCode = $randomString . $randomNumber;
        return $orderCode;
    }

    public function index_detailOrder() {
        $orderDetail = Order::all();
        return view();
    }

    public function detailOrderSablon(Request $request, $id) {
        $detail = Order::all();

        $request->validate([
            'total_units' => 'nullable|integer',
            'total_price' => 'nullable|integer',
        ]);

        $checkout = DetailOrder::find($id);
        $checkout->total_units = $request->input('total_units');
        $checkout->total_price = $request->input('total_price');
        $checkout->total_price = $request->input('total_price');
        $checkout->save();

        return redirect();

    }
}
