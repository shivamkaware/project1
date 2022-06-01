<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShivController;

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
Route::get('/shivam1', function () {
    return view('shivam1');
});

Route::post('store',[shivController::class,'store'])->name('store');
