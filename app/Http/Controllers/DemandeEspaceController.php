<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeEspace;
use App\Models\DemandeModifEspace;
use App\Models\User;

class DemandeEspaceController extends Controller
{
    /**
     * It adds a new demande espace
     *
     * @param Request request The request object.
     */
    public function add(Request $request){
        $user = $request->user();
        $espace = new DemandeEspace;
        $espace->demandeur = $user->id;
        $espace->nom = Request(key :"nom");
        $espace->quotaMax = Request(key :"quota");


        $espace->save();
        return view('validationDemandeAddDossier',['espace'=>$espace]);
    }

    /**
     * It delete a specific demand of the database using the id in parameter
     *
     * @param Request request The request object.
     */
    public function do_delete(Request $request){
        $espace =  DemandeEspace::find(Request(key :"id"));
        $espace->delete();
        return redirect()->intended('demande');
      }

      /**
       * It gets all the folder demand from the database
       */
      public function showAll(){
        $demandesespace =  DemandeEspace::all();
        $demandemodifespace = DemandeModifespace::all();
        return view('listedemandes',['demandesespace'=>$demandesespace,'demandemodifespace'=>$demandemodifespace]);

    }
}
