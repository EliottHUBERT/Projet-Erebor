<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\DemandeModifEspace;
use App\Models\DemandeEspace;
use App\Models\User;

class DemandeModifEspaceController extends Controller
{
    /**
     * It takes a request, gets the user, creates a new demande, sets the demande's attributes, and
     * saves it
     *
     * @param Request request The request object.
     */
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

        $count = DemandeEspace::all()->count();
        $count += DemandeModifEspace::all()->count();
        Session::forget('countDemande');
        Session::put('countDemande', htmlspecialchars($count));

        return view('validationEditDossier',['espace'=>$demande]);
    }

    /**
     * It delete a specific demand of the database using the id in parameter
     *
     * @param Request request The request object.
     */
    public function do_delete(Request $request){
        $espace =  DemandeModifEspace::find(Request(key :"id"));
        $espace->delete();
        $count = DemandeEspace::all()->count();
        $count += DemandeModifEspace::all()->count();
        Session::forget('countDemande');
        Session::put('countDemande', htmlspecialchars($count));

        return redirect()->intended('demande');
      }


      /**
       * It gets all the modification demand from the database
       */
      public function showAll(){
        $demandesespace =  DemandeModifEspace::all();
        return view('listedemandes',['demandesespace'=>$demandesespace]);

    }
}
