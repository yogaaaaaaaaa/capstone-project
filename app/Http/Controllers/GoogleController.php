<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class GoogleController extends Controller
{
    //
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return view('/');
            // return redirect('/')->with('error', 'Terjadi kesalahan saat melakukan autentikasi dengan Google.');
        }
    
        // Mendapatkan informasi yang diperlukan
        $google_id = $user->getId();
        $name = $user->getName();
        $email = $user->getEmail();
        
        // Lakukan sesuatu dengan informasi yang didapatkan
        // Contoh: Cari user dengan Google ID
        $existingUser = User::where('google_id', $google_id)->first();
    
        if ($existingUser) {
            // Jika user sudah ada, lakukan login
            Auth::login($existingUser);
            return redirect()->intended('home');
        } else {
            // Jika user belum ada, buat user baru
            $newUser = User::create([
                'name' => $name,
                'email' => $email,
                'google_id' => $google_id,
                'password' => bcrypt('12345678'), // Password default, sesuaikan sesuai kebutuhan Anda
                'usertype' => 'user',
            ]);
    
            Auth::login($newUser);
            return redirect()->intended('home');
        }
    }
}
