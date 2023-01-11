<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SampleController extends Controller
{

    /**
     * It returns the view called login
     *
     * @return The view login.blade.php
     */
    function index(){
        return view('login');
    }


    /**
     * It returns the view registration.blade.php
     *
     * @return The view registration.blade.php
     */
    function registration(){
        return view('registration');
    }


    /**
     * It validates the request, creates a new user, and redirects to the login page
     *
     * @param Request request The request object.
     *
     * @return redirect to the login page.
     */
    function validate_registration(Request $request){
        $request->validate([
            'login' => 'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6'
        ]);

        $data = $request->all();
        $user = User::create([
            'name' => $data['login'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        $user->assignRole('user');
        return redirect('login')->with('success',"Votre demande d'inscription à été envoyer à un admninistrateur");
    }



    /**
     * The function validate_login() takes a Request object as a parameter, validates the request, and
     * if the request is valid, it redirects the user to the dashboard
     *
     * @param Request request The request object.
     *
     * @return the view login.blade.php
     */
    function validate_login(Request $request){
        $request->validate([
        'email' =>'required|email',
        'password' =>'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect('access');
        }

        return redirect('login')->with('error', "Votre adresse email ou votre mot de passe n'est pas bon");


    }

    /**
     * If the user is logged in, redirect to the listeDossiers page, otherwise redirect to the login
     * page with a success message
     */
    function access(){
        if(Auth::check()){
            if(Auth::user()->hasRole('admin')){
                return redirect('listeDossiersAdmin');}
            return redirect('listeDossiers');
        }

        return redirect('login')->with('success', "Vous n'etes pas autoriser a acceder à ceci");
    }


/**
 * It logs the user out and redirects them to the login page
 *
 * @return redirect to the login page.
 */
    function logout(){
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
