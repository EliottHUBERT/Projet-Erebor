<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fichierController extends Controller
{
    //TODO: ICI C'est en cours c'est du copier coller on peut tous changer


    /**
     * Show the profile for a given fichier.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('fichier', [
            'user' => User::findOrFail($id)
        ]);
    }
}
