<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\PayController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('carta', CartaController::class);

Route::resource('contact-us', ContactanosController::class);

Route::resource('booking', BookingController::class);

Route::get('plates/{plate}',[PlateController::class,'show'])->name('plates.show');

//Route::get('cart',[CartController::class,'show'])->name('cart.show');
Route::resource('cart', CartController::class);

Route::resource('pago-online', PayController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
