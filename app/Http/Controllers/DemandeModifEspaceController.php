<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeModifEspace;
use App\Models\User;

class DemandeModifEspaceController extends Controller
{
    public function add(Request $request){
        $user = $request->user();
        $demande = new DemandeModifEspace;
        $demande->demandeur = $user->id;
        $demande->idEspace = Request(key :"idEspace");
        $demande->nom = Request(key :"nom");
        $demande->quotaMax = Request(key :"quota");
        $demande->Anciennom = Request(key :"Anciennom");
        $demande->AncienquotaMax = Request(key :"Ancienquota");


        $demande->save();
        return view('validationEditDossier',['espace'=>$demande]);
    }

    public function do_delete(Request $request){
        $espace =  DemandeModifEspace::find(Request(key :"id"));
        $espace->delete();
        return redirect()->intended('demande');
      }

      public function showAll(){
        $demandesespace =  DemandeModifEspace::all();
        return view('listedemandes',['demandesespace'=>$demandesespace]);

    }
}
