<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $table = "bestellingen";
    protected $fillable = ['drank', 'categorie', 'user_id', 'aantal', 'status'];
    public $timestamps = true;

    // public static function getBestellingByUser($usernames)
    // {
    //     $bestellingenArray = array();
    //     foreach ($usernames as $username) {
    //         $bestellingen = Drink::where('besteld_door', $username)->pluck('drank');
    //         $bestellingenArray[$username] = $bestellingen;
    //     }
    //     return $bestellingenArray;
    // }

    // public static function getAantalByUser($usernames)
    // {
    //     $aantalArray = array();
    //     foreach ($usernames as $username) {
    //         $aantal = Drink::where('besteld_door', $username)->pluck('aantal');
    //         $aantalArray[$username] = $aantal;
    //     }
    //     return $aantalArray;
    // }

    public static function getAantallenEnDrankjes($userIds) {
        $aantalArray = [];
        $bestellingArray = [];
        foreach ($userIds as $key=>$id) {
            $aantal = Drink::where('user_id', $id)->pluck('aantal');
            $bestelling = Drink::where('user_id', $id)->pluck('drank');
            $aantalArray[$key] = $aantal;
            $bestellingArray[$key] = $bestelling; 
        }
        $uitkomstArray = array_merge_recursive($aantalArray, $bestellingArray);
        // $nieuweArray = $aantalArray + $bestellingArray;
        return $uitkomstArray;
    }
}
