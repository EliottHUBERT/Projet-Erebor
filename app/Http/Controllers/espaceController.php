<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espace;
use App\Models\Acces;
use App\Models\DemandeEspace;
use App\Models\DemandeModifEspace;

class espaceController extends Controller
{

    /**
   * It gets the folder from the database that have the same idEspace as the one passed in the
   * function
   *
   * @param request the id of the folder
   */
    public function delete(Request $request){
      $espace =  Espace::find(Request(key :"idEspace"));
      return view('deleteDossier',['espace'=>$espace]);
    }

     /**
   * It gets the folder from the database that have the same idEspace as the one passed in the
   * function
   *
   * @param request the id of the folder
   */
    public function update(Request $request){
      $espace =  Espace::find(Request(key :"idEspace"));
      return view('editDossier',['espace'=>$espace]);
    }

     /**
   * It gets all the folders from the database
   *
   */
    public function showAll(){
        return view('afficheDossiersAdmin',['espaces'=>Espace::paginate(10)]);

    }

  /**
 * It creates the folder in the database with the data passed in the
 * function
 *
 * @param request the data of the folder
 */
  public function add(Request $request){

      $demande =  DemandeEspace::find(Request(key :"id"));
      $espace = new Espace;
      $espace->nom = $demande->nom;
      $espace->quota = 0;
      $espace->quotaMax = $demande->quotaMax;
      $espace->nbFiles = 0;
      $espace->save();

      $acces = new Acces;
      $acces->idUser = $demande->user->id;
      $acces->idEspace = $espace->id;
      $acces->role = "Gestionnaire";


      $acces->save();
      $demande->delete();


      return view('validationAddDossier',['espace'=>$espace]);
  }


  /**
 * It deletes the folder in the database that have the same idEspace as the one passed in the
   * function
 *
 * @param request the id of the folder
 */
  public function do_delete(Request $request){
    $espace =  Espace::find(Request(key :"id"));
    $espace->delete();
    return view('validationDeleteDossier',['espace'=>$espace]);
  }


  /**
 * It update the folder in the database with the data passed in the
 * function
 *
 * @param request the data of the folder
 */
  public function do_update(Request $request){
      $demande =  DemandeModifEspace::find(Request(key :"id"));
      $espace =  Espace::find(Request(key :"idEspace"));
      $espace->nom = $demande->nom;
      $espace->quota = $espace->quota;
      $espace->quotaMax = $demande->quotaMax;
      $espace->nbFiles = $espace->nbFiles;

      $espace->save();
      $demande->delete();
      return view('validationEditDossier',['espace'=>$espace]);
  }

}
