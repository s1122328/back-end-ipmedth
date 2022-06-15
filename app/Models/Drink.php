<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $table = "bestellingen";
    protected $fillable = ['drank', 'categorie', 'user_id', 'bestellingen', 'aantal', 'status', 'totaal_prijs'];
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

    // public static function getAantallenEnDrankjes($userIds) {
    //     $aantalArray = [];
    //     $bestellingArray = [];
    //     foreach ($userIds as $key=>$id) {
    //         $aantal = Drink::where('user_id', $id)->pluck('aantal');
    //         $bestelling = Drink::where('user_id', $id)->pluck('drank');
    //         $aantalArray[$key] = $aantal;
    //         $bestellingArray[$key] = $bestelling; 
    //     }
    //     $uitkomstArray = array_merge_recursive($aantalArray, $bestellingArray);
    //     // $uitkomstArray = $aantalArray + $bestellingArray;
    //     // dd($uitkomstArray);
    //     return $uitkomstArray;
    // }
    public static function getAantallenEnDrankjes($userIds) {
        $aantalEnDrankjeArray = [];
        foreach ($userIds as $key => $id) {
            $aantalEnDrankje = Drink::where('user_id', $id)->pluck('bestelling');
            $aantalEnDrankjeArray[$key] = $aantalEnDrankje;
        }
        return($aantalEnDrankjeArray);
    }

    public static function getTotaalPrijs($userIds) {
        $totaalPrijsArray = [];
        foreach ($userIds as $key => $id) {
            $totaalPrijs = Drink::where('user_id', $id)->pluck('totaal_prijs');
            $totaalPrijsArray[$key] = $totaalPrijs;
        }
        return $totaalPrijsArray;
    }
}
