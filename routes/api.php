<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
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



Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('jwt.auth');
Route::post('refresh', [AuthController::class, 'refresh'])->middleware('jwt.refresh');
Route::get('user', [AuthController::class, 'user'])->middleware('jwt.auth');
