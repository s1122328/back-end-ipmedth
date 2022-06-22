<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use DB;

class OrderController extends Controller
{
    //HIERONDER IS GEMAAKT DOOR VICTOR
    public function getAll()
    {
        $drinks = \App\Models\Drink::all();
        return $drinks;
    }

    //HIERONDER IS GEMAAKT DOOR VICTOR
    public function GetStatus(Request $request)
    {
        $id = $request->user_id;
        $drink = \App\Models\Drink::latest()->where('user_id',"=",$id)->pluck('status')->first();
        return $drink;
    }

    public function bottleClicked()
    {
        // Send something to drinks view to show alert
    }


    //HIERONDER IS GEMAAKT DOOR VICTOR
    public function store(Request $request, \App\Models\Drink $drink)
    {
        $drink->drank = $request->Drank;
        $drink->categorie = $request->Categorie;
        $drink->besteld_door = $request->Besteld_door;
        $drink->aantal = $request->Aantal;
        $drink->status = $request->Status;
        $drink->prijs = $request->Prijs;
        $drink->bestelling = $request->Bestelling;
        $drink->totaal_prijs = $request->Totaal_prijs;
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

    public function statusBewerken($id) {
        DB::table('bestellingen')->where('bestel_id', $id)->update([
            'status'=> "Onderweg",
        ]);
        return redirect('drinks');
    }
}
