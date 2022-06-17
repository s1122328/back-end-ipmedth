<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Models\Drink;
use App\Models\User;
use App\Http\Controllers\UserController;


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
//Route::get('/drinks', [\App\Http\Controllers\OrderController::class, 'getAll']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/drinks', function () {
    return view('bestellingenOverzicht', [
        'drinks' => Drink::all(),
    ]);
});

Route::get('/klanten_overzicht', function () {
    
    $userIds = User::all()->pluck('id');
    $usernames = User::all()->pluck('name');
    
    $aantallenEnDrankjesArray = Drink::getAantallenEnDrankjes($userIds);
    $totaalPrijs = Drink::getTotaalPrijs($userIds);
    return view('klantOverzicht', [
        'users' => $usernames,
        'aantallenEnDrankjes' => $aantallenEnDrankjesArray,
        'totaalPrijs' => $totaalPrijs,
    ]);
});

Route::get('/koppel', [UserController::class, 'toonKoppelView']);
Route::get('edit/{id}', [UserController::class, 'showEdit']); 
Route::post('edit', [Usercontroller::class, 'KoppelBril']);
