<?php

use App\Http\Controllers\PaypalController;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/chart', function () {
    $month_6 = Order::query()->where('status', '=' , 4)->WhereMonth('created_at','06')->sum('totalPrice');
    $month_7 = Order::query()->where('status','=', 4)->whereMonth('created_at', '07')->sum('totalPrice');
    $month_8 = Order::query()->where('status','=', 4)->whereMonth('created_at', '08')->sum('totalPrice');
    $month_9 = Order::query()->where('status','=', 4)->whereMonth('created_at', '09')->sum('totalPrice');
    return \Illuminate\Support\Facades\Response::json(['month_9' => $month_9, 'month_8' => $month_8, 'month_7' => $month_7, 'month_6' => $month_6]);
});
