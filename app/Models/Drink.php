<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;
    protected $table = "bestellingen";
    protected $fillable = ['drank', 'categorie', 'besteld_door', 'status'];
    public $timestamps = false;
}
