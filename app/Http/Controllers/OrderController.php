<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\DetailOrder;
use Illuminate\Http\Request;
use App\Models\FinancialReport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function OrderSablon() {
        return view('customer.orderSablon');
    }

    public function indexOrder() {
        $order = Order::simplePaginate(10);

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
                'first_name' => $request->order_name,
                'last_name' => '',
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
        $orderDetail = DetailOrder::simplePaginate(10);
        // $order = Order::find($id)->with('detailorder');
        return view('admin.content.content-main-detail-order', compact('orderDetail'));
    }

    public function callback(Request $request) {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $order = Order::find($request->order_id);
                if ($order) {
                    $order->payment_status = 'Sudah Bayar';
                    $order->save();
                }
            }
        }
    }

    public function orderView() {
        $viewOrder = Order::all()->first();
        return view('admin.layouts.view-order', compact('viewOrder'));
    }

    public function getOrderDetails(Request $request)
    {
        $orderCode = $request->input('order_code');
    
        $order = Order::where('order_code', $orderCode)->first();
        $detailOrder = $order ? DetailOrder::where('order_id', $order->id)->first() : null;
    
        if ($order && $detailOrder) {
            $data = [
                'order_name' => $order->order_name,
                'order_address' => $order->order_address,
                'type_tshirt' => $detailOrder->type_tshirt,
                'quantity' => $detailOrder->quantity,
                'total_price' => $detailOrder->total_price,
                'payment_status' => $order->payment_status,
                'order_status' => $order->order_status,
            ];
        } else {
            $data = [
                'order_name' => 'Not specified',
                'order_address' => 'Not specified',
                'type_tshirt' => 'Not specified',
                'quantity' => 'Not specified',
                'total_price' => 'Not specified',
                'payment_status' => 'Not specified',
                'order_status' => 'Not specified',
            ];
        }
    
        return response()->json($data);
    }

    public function deleteOrder($id) {
        $orders = Order::where('user_id', $id)->latest('created_at')->first();
        $orders->delete();

        return redirect()->route('orderSablon');
    }

    public function editOrder($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.layouts.edit-order-proses', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateOrder(Request $request, $id)
    {
        $order = Order::find($id);

        // Validasi input menggunakan metode in_array() dengan daftar nilai ENUM
        $validatedData = $request->validate([
            'order_status' => 'required|in:' . implode(',', $order->status_options),
        ]);
    
        // Set nilai order_status dari input yang valid
        $order->order_status = $validatedData['order_status'];
        $order->save();
    
        return redirect()->route('order.index');
    }
}
