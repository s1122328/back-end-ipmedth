<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class OrderController extends Controller
{
    public function getAll(){
        $drinks = \App\Models\Drink::all();
        return $drinks;
    }

    public function store(Request $request, \App\Models\Drink $drink){
        $drink->id = $request->id;
        $drink->drank = $request->drank;
        $drink->categorie = $request->categorie;
        $drink->besteld_door = $request->besteld_door;
        try {
            $drink->save();
            return response([
                'message' => 'OK'
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'Er is iets foutgegaan. Probeer het later opnieuw.'
            ], 500);
        }
    }
}
