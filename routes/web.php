<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SablonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard-admin');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'checkAuthentication'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home', [HomeController::class, 'HomeUser'])->middleware(['auth', 'verified'])->name('home');
Route::post('/home', [HomeController::class, 'addTestimoni'])->middleware(['auth', 'verified'])->name('testimoni.store');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::get('/account', [UserController::class, 'index'])->name('user.index');

Route::get('/orderSablon', [SablonController::class, 'OrderSablon'])->middleware(['auth', 'verified'])->name('orderSablon');
Route::get('/tracking', [TrackingController::class, 'tracking'])->middleware(['auth', 'verified'])->name('tracking');
Route::get('/testimoni', [TestimoniController::class, 'index'])->middleware(['auth', 'verified'])->name('testimoni.index');

require __DIR__.'/auth.php';
