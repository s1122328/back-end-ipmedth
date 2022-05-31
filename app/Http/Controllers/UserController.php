<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function AssignID()
    {
        $user = \App\Models\User::all()->where('toegewezen', '!=', 'Nee')->first();
        return $user;
    }
}
