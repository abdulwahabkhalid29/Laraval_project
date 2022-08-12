<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\BettreyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PakistanController;
use App\Http\Controllers\IndiaController;
use App\Http\Controllers\UsaController;
use App\Http\Controllers\JapanController;
use App\Http\Controllers\ChinaController;
use App\Http\Controllers\AmericaController;
use App\Http\Controllers\BangladeshController;
use App\Http\Controllers\TurkeyController;
use App\Http\Controllers\UkrainController;
use App\Http\Controllers\RussiaController;
use App\Http\Controllers\UnitedKingdomController;
use App\Http\Controllers\JermanyController; 
use App\Http\Controllers\AustriaController;
use App\Http\Controllers\BelgiumController;
use App\Http\Controllers\IcelandController;
use App\Http\Controllers\SwitzerlandController;  


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

Route::get('table',[TableController::class,'table']);
Route::get('network',[NetworkController::class,'network']);
Route::get('bettrey',[BettreyController::class,'bettrey']);
Route::get('country',[CountryController::class,'country']);
Route::get('pakistan',[PakistanController::class,'pakistan']);
Route::get('india',[IndiaController::class,'india']);
Route::get('Usa',[UsaController::class,'Usa']);
Route::get('japan',[JapanController::class,'japan']);
Route::get('china',[ChinaController::class,'china']);
Route::get('america',[AmericaController::class,'america']);
Route::get('bangladesh',[BangladeshController::class,'bangladesh']);
Route::get('turkey',[TurkeyController::class,'turkey']);
Route::get('ukrain',[UkrainController::class,'ukrain']);
Route::get('russia',[RussiaController::class,'russia']);
Route::get('unitedkingdom',[UnitedKingdomController::class,'unitedkingdom']);
Route::get('jermany',[JermanyController::class,'jermany']);
Route::get('austria',[AustriaController::class,'austria']);
Route::get('belgium',[BelgiumController::class,'belgium']);
Route::get('iceland',[IcelandController::class,'iceland']);
Route::get('switzerland',[SwitzerlandController::class,'switzerland']);
