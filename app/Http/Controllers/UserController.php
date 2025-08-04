<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showAll(){
        $users=User::all();
        return view('user/users-list',[
            'users'=>$users
        ]);
    }

}
