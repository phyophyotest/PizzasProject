<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Auth;
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
Route::middleware(['auth:sanctum', 'verified'])->get('/pizza', [PizzaController::class,'pizzas'])->name('pizza');
Route::post('/',[PizzaController::class,'insert'])->name('insert');
Route::get("/pizza/{id}",[PizzaController::class,'delete'])->name("delete");
Route::get("/pizza/edit/{id}",[PizzaController::class,"edit"])->name("edit");
Route::post("/pizza/update/{id}",[PizzaController::class,"update"])->name("update");
Route::get('/logout',function(){
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');
