<?php

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

Route::get('/', 'App\Http\Controllers\Client\HomeController@index')->name('home');
Route::get('/docs', 'App\Http\Controllers\Client\DocsController@index')->name('docs');

// Route::get('/', 'app\Http\Controllers\client\HomeController@index');

// Route::get('/', function () {
//     return view('views.client.page.index');
// });
