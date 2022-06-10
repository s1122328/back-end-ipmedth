<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $table = "bestellingen";
    protected $fillable = ['drank', 'categorie', 'besteld_door', 'aantal', 'status', 'prijs'];
    public $timestamps = false;

    public static function getBestellingByUser($usernames)
    {
        $bestellingenArray = array();
        foreach ($usernames as $username) {
            $bestellingen = Drink::where('besteld_door', $username)->pluck('drank');
            $bestellingenArray[$username] = $bestellingen;
        }
        return $bestellingenArray;
    }

    public static function getAantalByUser($usernames)
    {
        $aantalArray = array();
        foreach ($usernames as $username) {
            $aantal = Drink::where('besteld_door', $username)->pluck('aantal');
            $aantalArray[$username] = $aantal;
        }
        return $aantalArray;
    }


}
