<?php

use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\designer\DashboardController;
use App\Http\Controllers\designer\DesignController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\writer\WriterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// OTP 

Route::controller(OtpController::class)->group(function () {
    Route::get('loginn', 'login')->name('otp.login');
    Route::get('auth/checkotp', 'checkotp')->name('auth.checkotp');
    Route::post('auth/loginotp/{id?}', 'loginotp')->name('auth.loginotp');
    Route::post('otp/generate', 'generate')->name('otp.generate');
});


Route::get('/about', [HomepageController::class, 'about'])->name('about');
Route::get('/contact', [HomepageController::class, 'contact'])->name('contact');
Route::get('/privacy', [HomepageController::class, 'privacy'])->name('privacy');
Route::get('/refund', [HomepageController::class, 'refund'])->name('refund');
Route::get('/term', [HomepageController::class, 'term'])->name('term');


// offer payment
Route::post('/store-current-url', function (Request $request) {
    $request->session()->put('current_url', $request->url);
    return response()->json(['message' => 'Current URL stored successfully']);
});




// designer route


Route::get('designer/dashboard', [DashboardController::class, 'dashboard'])->name('designer.dashboard');
Route::get('designer/create/{id?}/{category?}', [DesignController::class, 'create'])->name('designer.create');
Route::post('designer/store', [DesignController::class, 'store'])->name('designer.store');
Route::get('designer/index', [DesignController::class, 'index'])->name('designer.index');
Route::get('designer/show', [DesignController::class, 'show'])->name('designer.show');
Route::get('designer/edit/{id?}', [DesignController::class, 'edit'])->name('designer.edit');
Route::post('designer/update', [DesignController::class, 'update'])->name('designer.update');
Route::get('designer/delete/{id?}', [DesignController::class, 'delete'])->name('designer.delete');



// writer route

Route::get('writer/dashboard', [DashboardController::class, 'dashboard'])->name('writer.dashboard');
Route::get('writer/create', [WriterController::class, 'create'])->name('writer.slugs.create');
Route::post('writer/store', [WriterController::class, 'store'])->name('writer.slugs.store');
Route::get('writer/index', [WriterController::class, 'index'])->name('writer.slugs.index');
Route::get('writer/edit/{id?}', [WriterController::class, 'edit'])->name('writer.slugs.edit');
Route::post('writer/update', [WriterController::class, 'update'])->name('writer.slugs.update');
Route::get('writer/delete/{id?}', [WriterController::class, 'delete'])->name('writer.slugs.delete');
