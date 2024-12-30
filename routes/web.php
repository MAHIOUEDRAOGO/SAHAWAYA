<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\client\accueilClientController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('admin');
// });

Route::get('/',[indexController::class,'index'])->name('index');

Route::get('admin',[adminController::class,'admin'])->name('admin');

Route::get('accueilClient',[accueilClientController::class,'accueilClient'])->name('accueilClient');