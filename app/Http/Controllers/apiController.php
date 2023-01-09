<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class apiController extends Controller
{
    public function getUsers($name){
        $users = User::where('name', 'like', '%'.$name)->first();
        return Response()->json($users);
    }
}
