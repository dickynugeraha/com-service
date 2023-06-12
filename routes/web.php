<?php

use App\Http\Controllers\CustomerController;
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
    return view('home');
});
// admin
Route::get("admin/customers", [CustomerController::class, "index"]);
Route::post("customer", [CustomerController::class, "store"]);
Route::post("customer/update", [CustomerController::class, "update"]);
Route::post("customer/{id}/delete", [CustomerController::class, "destroy"]);
