<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use Illuminate\Http\Request;

class fichierController extends Controller
{

/**
 * It gets all the files from the database that have the same idEspace as the one passed in the
 * function
 *
 * @param idEspace the id of the space where the file is located
 */
    public function showAll($idEspace){
        $fichiers =  Fichier::where('idEspace', '=', $idEspace)->paginate(10);
        return view('afficheFichiers',['fichiers'=>$fichiers]);

    }

}
