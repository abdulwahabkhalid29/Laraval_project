<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AA12Controller;
use App\Http\Controllers\AK47Controller;
use App\Http\Controllers\AK74Controller;
use App\Http\Controllers\AKMController;
use App\Http\Controllers\DesartegalController;
use App\Http\Controllers\WelcomController;

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
    return view('welcom');
});

Route::get('aa12', [AA12Controller::class, 'aa12'])->name('aa12');
Route::get('aK47', [AK47Controller::class, 'ak47'])->name('ak47');
Route::get('aK74', [AK74Controller::class, 'ak74'])->name('ak74');
Route::get('akm', [AKMController::class, 'akm'])->name('akm');
Route::get('desartegal', [DesartegalController::class, 'desartegal'])->name('desartegal');
Route::get('welcom', [WelcomController::class, 'welcom'])->name('welcom');
