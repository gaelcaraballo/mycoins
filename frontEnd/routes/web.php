<?php
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

use App\Http\Controllers\CoinController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Auth::routes();

//MAIN PAGE
Route::get("/home", [HomeController::class, "index"])->name("home");
Route::get("/menu", [MenuController::class, "all"]);
Route::redirect('/', "menu");

//FALLBACK
Route::fallback(function () {
    return redirect()->back();
});

//CHANGE LANGUAGE
Route::get("locale/{id}", function ($locale) {
    Session::put("locale", $locale);
    return redirect()->back();
});

Route::middleware(["auth"])->group(function () {
    //PROFILE CONTROLLER
    Route::group(["prefix" => "profile"], function () {
        Route::get("/", [ProfileController::class, "profile"])->name("profile");
        Route::get("/delete/{id}", [ProfileController::class, "delete"])->name("profile.delete");
        Route::post("/update/{user}", [ProfileController::class, "update"])->name("profile.update");
        Route::get('/delete-avatar', [ProfileController::class, "deleteAvatar"])->name('delete-avatar');
    });
    //PLACE CONTROLLER
    Route::group(["prefix" => "places"], function () {
        Route::get("/", [PlaceController::class, "all"])->name("places");
        Route::get("/searchPlace", [PlaceController::class, "searchPlace"])->name("places.searchPlace");
        Route::get("/detailedPlace/{place}", [PlaceController::class, "detailedPlace"])->name("places.detailedPlace");
        Route::get("/addPlace", [PlaceController::class, "addPlace"])->name("places.addPlace");
        Route::post("/store", [PlaceController::class, "store"])->name("places.store");
        Route::post("/update/{place}", [PlaceController::class, "update"])->name("places.update");
        Route::post("/places/{place}/toggle", [PlaceController::class, "toggle"])->name("places.toggle");
        Route::get("/delete/{place}", [PlaceController::class, "delete"])->name("places.delete");
    });
    //COIN CONTROLLER
    Route::prefix("coins")->group(function () {
        Route::get("/catalog/{coin?}", [CoinController::class, "catalog"])->name("catalog");
        Route::post("/catalog", [CoinController::class, "selectCoin"])->name("coins.selectCoin");
        Route::get("/addToMyCollection/{coin}/{year}", [CoinController::class, "addToMyCollection"])->name("addToMyCollection");
        Route::get("/detailedCoin/{coin}", [CoinController::class, "detailedCoin"])->name("coins.detailedCoin");
    });
    //USER CONTROLLER
    Route::prefix("users")->group(function () {
        Route::get("/", [UserController::class, "all"])->name("users");
        Route::get("/detailedUser/{user}", [UserController::class, "detailedUser"])->name("users.detailedUser");
        Route::get("/delete/{user}", [UserController::class, "delete"])->name("users.delete");
        Route::post("/selectCountry", [UserController::class, "selectCountry"])->name("users.selectCountry");
    });
    Route::get("/statistics", [StatController::class, "statistics"])->name("statistics");
});
