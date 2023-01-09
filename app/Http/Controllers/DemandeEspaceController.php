<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeEspace;

class DemandeEspaceController extends Controller
{
    public function add(Request $request){
        $user = $request->user();
        $espace = new DemandeEspace;
        $espace->demandeur = $user->name;
        $espace->nom = Request(key :"nom");
        $espace->quotaMax = Request(key :"quota");


        $espace->save();
        return view("demande");
    }

    public function do_delete(Request $request){
        $espace =  DemandeEspace::find(Request(key :"id"));
        $espace->delete();
        return view('validationDeleteDossier',['espace'=>$espace]);
      }

      public function showAll(){
        $demandesespace =  DemandeEspace::all();
        return view('listedemandes',['demandesespace'=>$demandesespace]);

    }
}
