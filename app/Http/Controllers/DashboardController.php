<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function checkAuthentication() {
    //     if (Auth::check() && Auth::user()->usertype === 'admin') {
    //         // Tindakan jika pengguna adalah admin
    //         return view('admin.content.content-main-dashboard');
    //     } else {
    //         // Tindakan jika pengguna bukan admin
    //         return redirect()->route('home');
    //     }
    // }

    public function showDashboard()
    {
        // Menghitung total pendapatan dari order pada hari ini
        $today = Carbon::today();
        $todayOrders = Order::whereDate('created_at', $today)
                            ->where('payment_status', 'Sudah Bayar')
                            ->get();

        $totalTodayIncome = 0;
        foreach ($todayOrders as $order) {
            foreach ($order->detailorder as $detailOrder) {
                $totalTodayIncome += $detailOrder->total_price;
            }
        }

        // Menghitung total pendapatan dari semua order
        $totalOrders = Order::where('payment_status', 'Sudah Bayar')->get();

        $totalAllIncome = 0;
        foreach ($totalOrders as $order) {
            foreach ($order->detailorder as $detailOrder) {
                $totalAllIncome += $detailOrder->total_price;
            }
        }

        // Mengirimkan data ke view
        return view('admin.content.content-main-dashboard', [
            'totalTodayIncome' => $totalTodayIncome,
            'totalAllIncome' => $totalAllIncome,
        ]);
    }
}
