<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}
