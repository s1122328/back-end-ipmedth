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

Route::get('/klanten_overzicht', function () {
    // gives all names
    // Gives a list of drinks for all users
    // $drankjesPerUser = Drink::getBestellingByUser($usernames);
    // $aantallenPerDrankje = Drink::getAantalByUser($usernames);
    // return view('klantOverzicht', [
<<<<<<< HEAD
    // 'user' => $usernames,
    // 'aantallen' => $aantallenPerDrankje,
    // 'bestellingen' => $drankjesPerUser
    // ]);
    
    $userIds = User::all()->pluck('id');
    
    $aantallenEnDrankjesArray = Drink::getAantallenEnDrankjes($userIds);
=======
    //    'user' => $usernames,
    //     'aantallen' => $aantallenPerDrankje,
    //     'bestellingen' => $drankjesPerUser
    // ]);

    $userIds = User::all()->pluck('id');

    $aantallenEnDrankjesArray = Drink::getAantallenEnDrankjes($userIds);

>>>>>>> dev
    return view('klantOverzicht', [
        'aantallenEnDrankjes' => $aantallenEnDrankjesArray
    ]);
});
<<<<<<< HEAD

Route::get('/koppel', [\App\Http\Controllers\UserController::class, 'toonKoppelView']);
Route::post('/koppel', [\App\Http\Controllers\Usercontroller::class, 'koppelBril']);
=======
>>>>>>> dev
