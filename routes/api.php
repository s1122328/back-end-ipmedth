<?php
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/drinks', [\App\Http\Controllers\OrderController::class, 'getAll']);
Route::post('/drinks/store', [\App\Http\Controllers\OrderController::class, 'store']);
Route::get('/gebruikers/get', [\App\Http\Controllers\UserController::class, 'GetUnusuedID']);
Route::post('/gebruikers/setid', [\App\Http\Controllers\UserController::class, 'AssignID']);
Route::get('/gebruikers/getstatus', [\App\Http\Controllers\OrderController::class, 'GetStatus']);

Route::post('/drinks/clicked', [\App\Http\Controllers\OrderController::class, 'bottleClicked']);

Route::get('/klant_drank', [\App\Http\Controllers\OrderController::class, 'getKlantDrinks']);

Route::get('/alleGebruikers', [\App\Http\Controllers\UserController::class, 'index']);
route::get('/gebruikers', [\App\Http\Controllers\UserController::class, 'AssignID']);
Route::get('/ontkoppel', [\App\Http\Controllers\UserController::class, 'ontkoppelBril']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
