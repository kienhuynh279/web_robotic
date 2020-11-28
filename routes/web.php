<?php

use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Admin\DocsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\AboutController;
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

// Client routes
Route::get('/', 'App\Http\Controllers\client\HomeController@index')->name('home');
Route::get('/docs', 'App\Http\Controllers\client\DocsController@index')->name('docs');
Route::get('/news', 'App\Http\Controllers\client\NewsController@index')->name('news');
Route::get('/detail-news/{id}', 'App\Http\Controllers\client\NewsController@detail')->name('detailNew');
Route::get('/product', 'App\Http\Controllers\client\ProductController@index')->name("product");
Route::get('/product/{id}', 'App\Http\Controllers\client\ProductController@detail')->name("productDetail");
Route::get('/gallery', 'App\Http\Controllers\client\GalleryController@index')->name('gallery');
Route::get('/about', 'App\Http\Controllers\client\AboutController@index')->name('about');
Route::get('/contact', 'App\Http\Controllers\client\ContactController@index')->name('contact');
Route::get('/solution', 'App\Http\Controllers\client\ServiceController@solution')->name('solution');
Route::get('/training', 'App\Http\Controllers\client\ServiceController@traning')->name('traning');

Route::get("/login", [AuthController::class, "login"],)->name("auth.login")->middleware("guest");
Route::post("/login", [AuthController::class, "handle_login"])->name("auth.handle_login")->middleware("guest");
Route::post("/logout", [AuthController::class, "handle_logout"])->name("auth.handle_logout")->middleware("auth");

// Admin routes
Route::group(["prefix" => "admin", "middleware" => ["auth"]], function () {

    Route::match(["get", "post"], "", function() {
        return redirect()->route("admin.dashboard");
    });

    Route::resource("users", UsersController::class, [
        "as" => "admin"
    ]);

    Route::resource("news", NewsController::class, [
        "as" => "admin"
    ]);

    Route::resource("categories", CategoryController::class, [
        "as" => "admin"
    ]);

    Route::resource("application", ApplicationController::class, [
        "as" => "admin"
    ]);

    Route::resource("type", TypeController::class, [
        "as" => "admin"
    ]);

    Route::resource('product', ProductController::class, [
        "as" => "admin"
    ]);

    Route::resource('docs', DocsController::class, [
        "as" => "admin"
    ]);

    Route::resource('image', ImageController::class, [
        "as" => "admin"
    ]);

    Route::resource('banners', BannerController::class, [
        "as" => "admin"
    ]);

    Route::resource('service', ServiceController::class, [
        "as" => "admin"
    ]);

    Route::resource('about', AboutController::class, [
        "as" => "admin"
    ]);

    Route::get("/dashboard", function () {
        return view("admin.dashboard");
    })->name("admin.dashboard");
});
