<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
public function showAccessByEspace(Request $request){
        if(Auth::user()->hasRole('admin')){
            $lesAcces = Acces::where('idEspace', '=', Request(key: 'idEspace'))->get();
            return view('detailDossier',['lesAcces'=>$lesAcces, 'idEspace'=>Request(key: 'idEspace')]);
        }
        $role = $this->findAccesForConnectedUser(Request(key :"idEspace"));
        if ($role){
            if ($role->role == 'Gestionnaire'){
                $lesAcces = Acces::where('idEspace', '=', Request(key: 'idEspace'))->get();
                return view('detailDossier',['lesAcces'=>$lesAcces,'idEspace'=>Request(key: 'idEspace')]);
            }
            return back()->with('Error','Vous ne passerez pas!');
        }

        return back()->with('Error','Vous ne passerez pas!');
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
        $acces->espace->quota = fichierController::countFileSize($acces->espace->id);
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
return back();
}

/**
 * It gets the acces from the database that have the same idEspace as the one passed in the
 * function and the same idUser as the one passed in the function
 *
 * @param Request request The request object.
 *
 * @return The view editAcces.blade.php is being returned.
 */
public function update(Request $request){
    $acces =  Acces::where('idUser', '=', Request(key :"idUser"))
    ->where('idEspace', '=', Request(key :"idEspace"))
    ->first();
return view('editAcces',['acces'=>$acces]);
}


/**
 * It gets the acces from the database that have the same idEspace as the one passed in the
 * function and the same idUser as the one passed in the function
 *
 * @param Request request The request object.
 *
 * @return The view detailDossier.blade.php is being returned.
 */
public function do_update(Request $request){

    Acces::where('idUser', '=', Request(key :"idUser"))
    ->where('idEspace', '=', Request(key :"idEspace"))
    ->update(['role'=>Request(key :"role")]);
    return back();
}

  /**
 * It creates the acces in the database with the data passed in the
 * function
 *
 * @param request the data of the folder
 */
public function add(Request $request){

return view('addAcces',['espace'=>Request(key :"idEspace")]);
}

  /**
 * It creates the acces in the database with the data passed in the
 * function
 *
 * @param request the data of the folder
 */
public function do_add(Request $request){

    $acces = new Acces;
    $acces->idUser = $request->idUser;
    $acces->idEspace = $request->idEspace;
    $acces->role = $request->role;

    $acces->save();
    return view('validationAddAcces',['acces'=>$request->search]);
}

public function findAccesForConnectedUser(int $idEspace){
    $role = Acces::where('idUser', '=', Auth::user()->id)->where('idEspace', '=', $idEspace)->first();
    return $role;
}


}
