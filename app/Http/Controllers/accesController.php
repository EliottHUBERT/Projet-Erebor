<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Acces;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\fichierController;

class accesController extends Controller
{
/**
 * It gets all the user from the database that have access on the same Espace as the one passed in the
 * function
 *
 * @param idEspace the id of the space where the file is located
 */
public function showAccessByEspace($idEspace){
    $lesAcces = Acces::where('idEspace', '=', $idEspace)->paginate(10);
    return view('detailDossier',['lesAcces'=>$lesAcces]);

    }


/**
 * It gets all the user from the database that have access on the same Espace as the one passed in the
 * function
 *
 * @param idUser the id of the space where the file is located
 */
public function showAccessByUser(){

    $lesAcces = Acces::where('idUser', '=', Auth::user()->id)->paginate(10);
    foreach($lesAcces as $acces){
        $acces->espace->nbFiles = fichierController::countFiles($acces->espace->id);
        $acces->quota = fichierController::countFileSize($acces->espace->id);
      }
    return view('afficheDossiers',['espaces'=>$lesAcces]);

}

/**
 * It gets the acces from the database that have the same idEspace as the one passed in the
 * function and the same idUser as the one passed in the function
 *
 * @param request the id of the user and of the folder
 */
public function do_delete(Request $request){
    $acces =  Acces::where('idUser', '=', Request(key :"idUser"))
    ->where('idEspace', '=', Request(key :"idEspace"))
    ->first();
    $acces->delete();
return view('validationDeleteAcces',['acces'=>$acces]);
}



/**
 * It gets the acces from the database that have the same idEspace as the one passed in the
 * function and the same idUser as the one passed in the function
 *
 * @param Request request The request object.
 *
 * @return The view validationDeleteAcces.blade.php is being returned.
 */
public function do_update(Request $request){
    $acces =  Acces::where('idUser', '=', Request(key :"idUser"))
    ->where('idEspace', '=', Request(key :"idEspace"))
    ->first();

    $acces->role = $request->role;
    $acces->save();
return view('validationDeleteAcces',['acces'=>$acces]);
}

  /**
 * It creates the acces in the database with the data passed in the
 * function
 *
 * @param request the data of the folder
 */
public function add(Request $request){
    $acces = new Acces;
    $acces->idUser = $request->idUser;
    $acces->idEspace = $request->idEspace;
    $acces->role = $request->role;

    $acces->save();
    return view('validationAddAcces',['acces'=>$acces]);
}

}
