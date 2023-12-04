<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinancialReportController extends Controller
{
    public function showFinancialReport() {
        $financialReports = Order::with('detailorder')->where('payment_status', 'Sudah Bayar')->simplePaginate(10);
        return view('admin.content.content-main-financial', compact('financialReports'));
    }
}
