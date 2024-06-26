<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('/loginfirst',[DashboardController::class,'index']);
Route::get('/customerdashboard',[CustomerController::class,'index']);

Route::get('/about',[HomeController::class,'aboutus']);
Route::get('/contact',[HomeController::class,'contactus']);
Route::get('/services',[HomeController::class,'services']);
Route::get('/plans',[HomeController::class,'plans']);
Route::get('/packages',[HomeController::class,'packages']);
Route::get('/gallery',[HomeController::class,'gallery']);


