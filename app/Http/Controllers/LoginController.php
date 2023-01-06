<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        foreach($credentials as $cred){
            echo $cred;
        };
        if (Auth::attempt($credentials, $remember = false)) {
            echo "qsdsqdqs";
            // Authentication passed...
            return redirect()->intended('ListeDossiers');
        }
    }
}
