<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function HomeUser() {
        $testimonies = Testimoni::orderBy('created_at', 'desc')->take(3)->get();
        return view('customer.home', compact('testimonies'));
    }

    public function addTestimoni(Request $request) {
        $request->validate([
            'critique_suggestions' => 'required|string|max:255',
            'product_value' => 'required|string|max:255',
        ]);

        $idUser = Auth::id();
        $testimoni = new Testimoni();
        $testimoni->critique_suggestions = $request->input('critique_suggestions');
        $testimoni->product_value = $request->input('product_value');
        $testimoni->user_id = $idUser;
        $testimoni->save();

        return redirect()->back();
    }

    public function error_index() {
        return view('error.401');
    }
}
