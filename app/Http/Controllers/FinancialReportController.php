<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancialReport;
use App\Http\Controllers\Controller;

class FinancialReportController extends Controller
{
    public function showFinancialReport(Request $request) {
        $financialReports = FinancialReport::with('order')->get();
        return view('admin.content.content-main-financial', compact('financialReports'));
    }
}
