<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller{

    public function login(Request $request){

        $users = User::all();

        foreach($users as $usertest){
            if($usertest->login == $request->login){
                if($usertest->password == $request->password){
                    return view(['afficheDossiers']);
            }
        }
        return view(['login']);

    }
}
}
