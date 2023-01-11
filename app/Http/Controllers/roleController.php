<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    /**
     * It give the role admin to a user
     *
     * @param user the user
     */
    public function addAdmin($user){
        $user->assignRole('admin');
    }

    /**
     * It give the role admin to a user
     *
     * @param user the user
     */
    public function addUser($user){
        $user->assignRole('user');
    }
}
