<?php

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SablonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\FinancialReportController;
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
    $testimonies = Testimoni::orderBy('created_at', 'desc')->take(3)->get();
    return view('home', compact('testimonies'));
});

Route::get('/contact', [ContactController::class, 'contact'])->name('contact.index');
Route::get('/team', [TeamController::class, 'team'])->name('team.index');

//The Email Verification Notice
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//The Email Verification Handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Resending The Verification Email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::group(['middleware' => 'admin', 'auth', 'verified'], function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::get('/account', [UserController::class, 'index'])->name('user.index');
    Route::get('/order', [OrderController::class, 'indexOrder'])->name('order.index');
    Route::get('/order/{id}/edit', [OrderController::class, 'editOrder'])->name('order.edit');
    Route::put('/order/{id}', [OrderController::class, 'updateOrder'])->name('order.update');
    Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
    Route::get('/order/info', [OrderController::class, 'orderView'])->name('vieworder.index');
    Route::get('/financial-report', [FinancialReportController::class, 'showFinancialReport'])->name('financial.report');
    
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/home', [HomeController::class, 'HomeUser'])->name('home');
    Route::post('/home', [HomeController::class, 'addTestimoni'])->name('testimoni.store');
    Route::get('/keranjang', [KeranjangController::class, 'keranjang'])->name('keranjang');
    Route::get('/orderSablon', [OrderController::class, 'OrderSablon'])->name('orderSablon');
    Route::get('/order/detail', [OrderController::class, 'index_detailOrder'])->name('orderDetail.index');
    Route::get('/orderProduct', [OrderProductController::class, 'OrderProduct'])->name('orderProduct');
    Route::post('/orderSablon', [OrderController::class, 'addOrder'])->name('addOrder.store');
    Route::delete('/orders/delete/{id}', [OrderController::class, 'deleteOrder'])->name('orders.delete');

    Route::get('/orderSablon/Detail', [OrderController::class, 'index_detailOrder_user'])->name('detailorder_user.index');
    Route::get('/tracking', [TrackingController::class, 'tracking'])->name('tracking');

    Route::get('/print-invoice/{orderSablonId}/download', [InvoiceController::class, 'printInvoice'])->name('print.invoice');
    Route::get('/print-invoice/{orderSablonId}', [InvoiceController::class, 'showInvoice'])->name('show.invoice');
    Route::get('/get-order-details', [OrderController::class, 'getOrderDetails']);
    
    Route::get('/unauthorized', [HomeController::class, 'error_index'])->name('errorUnauthorized');

});

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');


require __DIR__.'/auth.php';
