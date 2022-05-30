<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Models\Drink;


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
Route::get('/drinks', [\App\Http\Controllers\OrderController::class, 'getAll']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/drinks', function () {
    return view('drinks', [
        'drinks' => Drink::all(),
    ]);
});

// Route::get('/drinks/{drink}', function ($id) {
//     return view('drinks', ['drink' => Drink::findOrFail($id)]);
// });
// Route::get('/drinks', 'OrderController@getAll');
