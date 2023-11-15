<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function checkAuthentication() {
        if (Auth::check() && Auth::user()->usertype === 'admin') {
            // Tindakan jika pengguna adalah admin
            return view('admin.dashboard-admin');
        } else {
            // Tindakan jika pengguna bukan admin
            return redirect()->route('home');
        }
    }
}
