<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function run(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->second_name = $request->input('second-name');

        $user->save();
    }

    public function getUser(){
        $user = User::find(1);
        $users = $user->posts;
        return view('data',['data' => $users,'user'=>$user]);
    }

}
