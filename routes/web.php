<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\GeneralManagerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\OrderController;


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
    return view('auth.login');
});

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Auth::routes();

// auth users
Route::get('/founder', [FounderController::class, 'index'])->name('founder')->middleware('founder');
Route::get('/gm', [GeneralManagerController::class, 'index'])->name('gm')->middleware('gm');
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier')->middleware('supplier');
Route::get('/distributor', [DistributorController::class, 'index'])->name('distributor')->middleware('distributor');
Route::get('/reseller', [ResellerController::class, 'index'])->name('reseller')->middleware('reseller');

//order users
Route::get('/reseller-order-perfume', [OrderController::class, 'resellerOrderPerfume'])->name('reseller.order.perfume');
Route::get('/reseller-order-support', [OrderController::class, 'resellerOrderSupportItem'])->name('reseller.order.support');


Route::get('/logout', [LoginController::class, 'logout']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
