<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeEspace;
use App\Models\User;

class DemandeEspaceController extends Controller
{
    public function add(Request $request){
        $user = $request->user();
        $espace = new DemandeEspace;
        $espace->demandeur = $user->id;
        $espace->nom = Request(key :"nom");
        $espace->quotaMax = Request(key :"quota");


        $espace->save();
        return redirect()->intended('listeDossiers');
    }

    public function do_delete(Request $request){
        $espace =  DemandeEspace::find(Request(key :"id"));
        $espace->delete();
        return redirect()->intended('demande');
      }

      public function showAll(){
        $demandesespace =  DemandeEspace::all();
        return view('listedemandes',['demandesespace'=>$demandesespace]);

    }
}
