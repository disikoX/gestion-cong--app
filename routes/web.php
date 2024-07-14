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



// Routes pour les employés
Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
Route::get('/employes/{id}', [EmployeController::class, 'show'])->name('employes.show');
Route::post('/employes', [EmployeController::class, 'store'])->name('employes.store');
Route::put('/employes/{id}', [EmployeController::class, 'update'])->name('employes.update');
Route::delete('/employes/{id}', [EmployeController::class, 'destroy'])->name('employes.destroy');
Route::get('/employes/create', [EmployeController::class, 'create'])->name('employes.create');


// Routes pour les congés
Route::get('/conges', [CongeController::class, 'index'])->name('conges.index');
Route::get('/conges/{id}', [CongeController::class, 'show'])->name('conges.show');
Route::post('/conges', [CongeController::class, 'store'])->name('conges.store');
Route::put('/conges/{id}', [CongeController::class, 'update'])->name('conges.update');
Route::delete('/conges/{id}', [CongeController::class, 'destroy'])->name('conges.destroy');
