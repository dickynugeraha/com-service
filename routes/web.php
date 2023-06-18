<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [TestimonyController::class, "testimoniesHome"]);
// admin
Route::get("admin/login", function () {
    $isLogin = Session::get("isLogin");
    if ($isLogin) {
        return redirect("admin/customers");
    }
    return view("login");
});

Route::post("/login", [AdminController::class, "login"]);

Route::group(["middleware" => ["admin"]], function () {
    Route::get("logout", function () {
        $isLogin = Session::get("isLogin");
        if ($isLogin) {
            Session::forget("isLogin");
            return redirect("admin/login");
        }
    });
    // customers
    Route::get("admin/customers", [CustomerController::class, "index"]);
    Route::post("customer", [CustomerController::class, "store"]);
    Route::post("customer/update", [CustomerController::class, "update"]);
    Route::post("customer/{id}/delete", [CustomerController::class, "destroy"]);
    Route::get("admin/customer/create-pdf", [CustomerController::class, "createPDF"]);
    // product
    Route::get("admin/products", [ProductController::class, "index"]);
    Route::post("product", [ProductController::class, "store"]);
    Route::post("product/update", [ProductController::class, "update"]);
    Route::get("product/{id}/delete", [ProductController::class, "destroy"]);
    // layanan
    Route::get("admin/layanan", [LayananController::class, "index"]);
    Route::post("layanan", [LayananController::class, "store"]);
    Route::post("layanan/update", [LayananController::class, "update"]);
    Route::get("layanan/{id}/delete", [LayananController::class, "destroy"]);
    // laptop
    Route::get("admin/laptop", [LaptopController::class, "index"]);
    Route::post("laptop", [LaptopController::class, "store"]);
    Route::post("laptop/update", [LaptopController::class, "update"]);
    Route::get("laptop/{id}/delete", [LaptopController::class, "destroy"]);
    // testimonies
    Route::get("admin/testimonies", [TestimonyController::class, "index"]);
    Route::post("testimony", [TestimonyController::class, "store"]);
    Route::post("testimony/update", [TestimonyController::class, "update"]);
    Route::get("testimony/{id}/delete", [TestimonyController::class, "destroy"]);
    // akun
    Route::get("admin/akun", [AdminController::class, "index"]);
    Route::post("admin", [AdminController::class, "store"]);
    Route::post("admin/update", [AdminController::class, "update"]);
    Route::get("admin/{id}/delete", [AdminController::class, "destroy"]);
});
