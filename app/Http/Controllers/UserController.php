<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index() {
        $user = User::simplePaginate(10);
        return view('admin.content.content-main-account', compact('user'));
    }
}
