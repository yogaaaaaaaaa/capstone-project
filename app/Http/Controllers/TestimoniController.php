<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimoniController extends Controller
{
    public function index() {
        $testimoni = Testimoni::with('user')->simplePaginate(10);
        return view('admin.content.content-main-testimoni', compact('testimoni'));
    }
}
