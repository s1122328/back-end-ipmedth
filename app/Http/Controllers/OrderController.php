<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class OrderController extends Controller
{
    public function show($drankId) {
        return Drank::find($drankId);
    }

    public function getAll(){
        $drinks = \App\Models\Drink::all();
        return view('drinks', ['allDrinks' => $drinks]);
    }

    public function store(Request $request, \App\Models\Drink $drink){
        $drink->id = $request->id;
        $drink->drank = $request->Drank;
        $drink->categorie = $request->Categorie;
        $drink->besteld_door = $request->Besteld_door;
        $drink->aantal = $request->Aantal;
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
