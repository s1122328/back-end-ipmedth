<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Models\Drink;
use App\Models\User;


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

Route::get('/klanten_overzicht', [\App\Http\Controllers\UserController::class,'getKlantDrinks']);

    // gives all names
    // Gives a list of drinks for all users
    // $drankjesPerUser = Drink::getBestellingByUser($usernames);
    // $aantallenPerDrankje = Drink::getAantalByUser($usernames);
    //($drankjesPerUser);
    //dd($aantallenPerDrankje);
//     return view('klantOverzicht', [
// //        'user' => $usernames,
//         'aantallen' => $aantallenPerDrankje,
//         'bestellingen' => $drankjesPerUser
//     ]);


