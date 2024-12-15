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

Route::get('/', function () {
    return view('welcome');
});
Route::get('app/resultado/eFBCMWV3RlF1MTAyN2VlUEI5d0V6b3M2K2JNdk80eFArL252N1Y4N0p6YzBoVWdlbmVHeWppTWNSVThKZFp3QQ==_3xeU5tcNCG', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
