<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CongeController;

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



Route::get('employes', [EmployeController::class, 'index'])->name('employes.index');
Route::post('employes', [EmployeController::class, 'store'])->name('employes.store');


Route::get('conges', [CongeController::class, 'index'])->name('conges.index');
