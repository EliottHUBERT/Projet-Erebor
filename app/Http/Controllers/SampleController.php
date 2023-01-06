<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SampleController extends Controller
{
    function index(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    function validate_registration(Request $request){
        $request->validate([
            'login' => 'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6'
        ]);

        $data = $request->all();
        User::create([
            'name' => $data['login'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success',"Votre demande d'inscription à été envoyer à un admninistrateur");
    }

    function validate_login(Request $request){
        $request->validate([
        'email' =>'required|email',
        'password' =>'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect('dashboard');
        }

        return redirect('login')->with('error', "Votre adresse email ou votre mot de passe n'est pas bon");


    }

    function dashboard(){
        if(Auth::check()){
            return redirect('listeDossiers');
        }

        return redirect('login')->with('success', "Vous n'etes pas autoriser a acceder à ceci");
    }

    function logout(){
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
