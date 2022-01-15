<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InventoryItemController;
use App\Http\Controllers\PointOfSaleContoller;
use App\Http\Controllers\ProdusenController;
use App\Http\Controllers\SellTransactionController;
use App\Http\Controllers\UnitMeasureController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/home', HomeController::class);
Route::resource('/produsen', ProdusenController::class);
Route::resource('/unit_measure', UnitMeasureController::class);
Route::resource('/inventory', InventoryController::class);
Route::resource('/inventory_item', InventoryItemController::class);

Route::resource('/pointofsale', PointOfSaleContoller::class);
Route::resource('/sell_transaction', SellTransactionController::class);
Route::resource('/sell_transaction_item', PointOfSaleContoller::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
