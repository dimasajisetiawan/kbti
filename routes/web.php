<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('dashboard.index');
// });

Route::get('/',[LoginController::class,'index'])->name('login')->middleware('guest');

Route::post('/',[LoginController::class,'Authenticate']);
Route::post('logout',[LoginController::class,'Logout']);


Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

Route::get('/dashboard/kelas/{id}',[DashboardController::class,'index_mhs'])->middleware('mhs');

Route::get('/dashboard/daftar_kelas/{id}',[DashboardController::class,'index_dsn'])->middleware('dsn');

Route::match(['get','post'],'/dashboard/tambah_kelas/{id}/{kodemk}',[DashboardController::class,'kirim_notif'])->middleware('dsn');
