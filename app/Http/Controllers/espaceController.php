<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Fichier;
use App\Http\Controllers\fichierController;
use App\Models\Espace;
use App\Models\Acces;
use App\Models\DemandeEspace;
use App\Models\DemandeModifEspace;
use Illuminate\Support\Facades\Storage;

class espaceController extends Controller
{

    /**
   * It gets the folder from the database that have the same idEspace as the one passed in the
   * function
   *
   * @param request the id of the folder
   */
    public function delete(Request $request){
        if(Auth::user()->hasRole('admin')){
            $espace =  Espace::find(Request(key :"idEspace"));
            return view('deleteDossier',['espace'=>$espace]);
        }
        $role = $this->findAccesForConnectedUser(Request(key :"idEspace"));
        if ($role){
            if ($role->role == 'Gestionnaire'){
                $espace =  Espace::find(Request(key :"idEspace"));
                return view('deleteDossier',['espace'=>$espace]);
            }
            return back()->with('Error','Vous ne passerez pas!');
        }
        return back()->with('Error','Vous ne passerez pas!');
    }

     /**
   * It gets the folder from the database that have the same idEspace as the one passed in the
   * function
   *
   * @param request the id of the folder
   */
    public function update(Request $request){

        if(Auth::user()->hasRole('admin')){
            $espace =  Espace::find(Request(key :"idEspace"));
            $espace->nbFiles = fichierController::countFiles($espace->id);
            $espace->quota = fichierController::countFileSize($espace->id);
            return view('editDossier',['espace'=>$espace]);
        }
        $role = $this->findAccesForConnectedUser(Request(key :"idEspace"));
        if ($role){
            if ($role->role == 'Gestionnaire'){
                $espace =  Espace::find(Request(key :"idEspace"));
                $espace->nbFiles = fichierController::countFiles($espace->id);
                $espace->quota = fichierController::countFileSize($espace->id);
                return view('editDossier',['espace'=>$espace]);
            }
            return back()->with('Error','Vous ne passerez pas!');
        }

        return back()->with('Error','Vous ne passerez pas!');
    }

     /**
   * It gets all the folders from the database for Admins
   *
   */
    public function showAll(){
        $espaces = Espace::paginate(10);
        foreach($espaces as $espace){
          $espace->nbFiles = fichierController::countFiles($espace->id);
          $espace->quota = fichierController::countFileSize($espace->id);
        }
        return view('afficheDossiersAdmin',['espaces'=>$espaces]);

    }

    public static function find(Request $request){

        $espace =  Espace::find(Request(key :"idEspace"));
        return $espace;
    }

  /**
 * It creates the folder in the database with the data passed in the
 * function
 *
 * @param request the data of the folder
 */
  public function add(Request $request){

    $request->validate([
        'id' => 'required|integer',
    ]);


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

      $count = DemandeEspace::all()->count();
      $count += DemandeModifEspace::all()->count();
      Session::forget('countDemande');
      Session::put('countDemande', htmlspecialchars($count));


      return view('validationAddDossier',['espace'=>$espace]);
  }


  /**
 * It deletes the folder in the database that have the same idEspace as the one passed in the
   * function
 *
 * @param request the id of the folder
 */
  public function do_delete(Request $request){

    $request->validate([
        'id' => 'required|integer',
    ]);

    $path = "public/".Request(key :"id");

    $espace =  Espace::find(Request(key :"id"));
    $espace->delete();

    Storage::deleteDirectory($path);
    return view('validationDeleteDossier',['espace'=>$espace]);
  }


  /**
 * It update the folder in the database with the data passed in the
 * function
 *
 * @param request the data of the folder
 */
  public function do_update(Request $request){

    $request->validate([
        'id' => 'required|integer',
        'idEspace' =>'required|integer',
    ]);

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

  public function findAccesForConnectedUser(int $idEspace){
    $role = Acces::where('idUser', '=', Auth::user()->id)->where('idEspace', '=', $idEspace)->first();
    return $role;
}

}
