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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->group(function () {
    /** Routes pour les employés */
    Route::controller(EmployeController::class)->group(function() {
        Route::get('/employes', 'index')->name('employes.index');
        Route::get('/employes/{id}', 'show')->name('employes.show');
        Route::post('/employes', 'store')->name('employes.store');
        Route::put('/employes/{id}', 'update')->name('employes.update');
        Route::delete('/employes/{id}', 'destroy')->name('employes.destroy');
        Route::get('/employes/create', 'create')->name('employes.create');
    });
    
    
    /** Routes pour les congés */
    Route::controller(CongeController::class)->group(function() {
        Route::get('/conges', 'index')->name('conges.index');
        Route::get('/conges/{id}', 'show')->name('conges.show');
        Route::post('/conges', 'store')->name('conges.store');
        Route::put('/conges/{id}', 'update')->name('conges.update');
        Route::delete('/conges/{id}', 'destroy')->name('conges.destroy');
    });

    
    
});

/** Les routes pour l'authentification
 * -------------------------------------
 * Regroupées dans un middleware "api"
 * Et tous sont prefixés de "auth" (localhost:8000/api/auth/...)
 */
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    /** Routes pour l'authentification */
    Route::controller(AuthController::class)->group(function() {
        Route::post('logout', 'logout');
        Route::post('refresh', 'refresh');
        Route::get('user', 'user');
    });

    Route::controller(AuthController::class)->group(function() {
            Route::post('login', 'login');
    });
});
