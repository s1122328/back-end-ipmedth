<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $table = "bestellingen";
    protected $fillable = ['bestel_id', 'drank', 'categorie', 'aantal','user_id', 'bestelling','besteld_door',  'status','prijs', 'totaal_prijs','created_at','updated_at' ];
    public $timestamps = true;

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

    public static function getBestelling($bestel_id) {
        $bestelling = Drink::where('bestel_id', $bestel_id)->get();
        return $bestelling;
    }
}
