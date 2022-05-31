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
route::get('/gebruikers', [\App\Http\Controllers\UserController::class, 'AssignID']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
