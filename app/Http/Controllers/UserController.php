<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
class UserController extends Controller
{
    public function GetUnusuedID()
    {
        $user = \App\Models\User::all()->where('toegewezen', '!=', 'Ja')->first();
        return $user;
    }

    public function AssignID(Request $request, \App\Models\User $user){
        $user = user::where('id', $request->id)->first();
        $user->toegewezen = $request->Toegewezen;
        try {
            $user->save();
            return response([
                'message' => 'OK'
            ], 200);
        } catch (Exception $e) {
            return response([
                'message' => 'Er is iets foutgegaan. Probeer het later opnieuw.'
            ], 500);
        }
    }
    public function index() {
        $users = \App\Models\User::all();
        return $users;
    }

    public function getKlantDrinks()
    {
        //e('toegewezen','=','ja')->get();
        $users = \App\Models\User::all();
        $drankjes = \App\Models\Drink::all();
        $totaal = array();
        foreach ($users as $user) 
        {   
            foreach($drankjes as $drankje)
            {
                $drankje = \App\Models\Drink::where('besteld_door','=', $user)->get();
                $totaal[] = $user;
            }
            //$drankje = \App\Models\Drink::where('besteld_door','=',$user->besteld_door)->get();
        }   
        return view('klanten.show', [
            'users' => $users,
            'drankjes' =>$totaal,
        ]);
        
    }

    public function toonKoppelView () {
        $users = UserController::index();
        return view('koppelBril', [
            'users' => $users,
        ]);
    }

    public function showEdit($id) {
        $user = User::findUser($id);
        return view('edit', [
            'user' => $user
        ]);
    }

    public function KoppelBril(Request $request) {
        DB::table('users')->where('id', $request->id)->update([
            'bril_id'=>$request->bril_id,
        ]);
        return redirect('koppel');
        // $users = UserController::index();
        // return view('koppelBril', [
        //     'users' => $users,
        // ]);
    }
}
