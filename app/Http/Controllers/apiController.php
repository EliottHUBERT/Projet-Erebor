<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class apiController extends Controller
{
    /**
     * It returns a JSON response of all the users in the database
     *
     * @return A JSON object containing all the users in the database.
     */
    public function getAll(){
        $users = User::all();
        return Response()->json($users);
    }

    /**
     * It returns a JSON response of the first user with a name that contains the string passed in as a
     * parameter
     *
     * @param name The name of the user you want to search for.
     *
     * @return The first user with the name that matches the name passed in.
     */
    public function getUsers(Request $request){
        
        $name = $request->get('query');
        $users = User::where('name', 'like', '%'.$name.'%')->get();
        return response()->json($users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $data = User::where('name', 'LIKE', '%'. $request->get('query'). '%')
                    ->get();
     
        return response()->json($data);
    }
}
