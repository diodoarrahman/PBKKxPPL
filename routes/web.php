<?php

use App\Http\Controllers\KosanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\LandingPageController::class,'index']);
Route::get('/kosan', [KosanController::class,'index'])->name("kosan");
Route::get('/create', [KosanController::class,'create'])->name("create");
Route::post('/store',[KosanController::class, 'store'])->name('store');