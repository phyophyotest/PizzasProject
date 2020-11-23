<?php

use App\Http\Controllers\PizzaController;
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
Route::get('/',[PizzaController::class,'index'])->name('home');
Route::get('/pizza', [PizzaController::class,'pizzas'])->name('pizza');
Route::post('/',[PizzaController::class,'insert'])->name('insert');
