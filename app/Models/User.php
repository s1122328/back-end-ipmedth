<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";
    protected $fillable = ['name'];
    public $timestamps = false;

    public static function find()
    {
        $users = User::all();
        return $users->pluck('name');
    }

    public function findUser($id) {
        $user = User::where('id', $id)->get();
        return $user;
    }
}
