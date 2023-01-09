<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espace;
use Illuminate\Support\Facades\DB;

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
        return view('afficheDossiers',['espaces'=>Espace::paginate(9)]);

    }

  /**
 * It creates the folder in the database with the data passed in the
 * function
 *
 * @param request the data of the folder
 */
  public function add(Request $request){
      $espace = new Espace;
      $espace->nom = Request(key :"nom");
      $espace->quota = 0;
      $espace->quotaMax = Request(key :"quota");
      $espace->nbFiles = 0;

      $espace->save();
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
      $espace =  Espace::find(Request(key :"id"));
      $espace->nom = Request(key :"nom");
      $espace->quota = 0;
      $espace->quotaMax = Request(key :"quota");
      $espace->nbFiles = 0;

      $espace->save();
      return view('validationEditDossier',['espace'=>$espace]);
  }

}
