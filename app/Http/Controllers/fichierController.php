<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fichierController extends Controller
{
    //TODO: ICI C'est en cours c'est du copier coller on peut tous changer



/**
 * It gets all the files from the database that have the same idEspace as the one passed in the
 * function
 *
 * @param idEspace the id of the space where the file is located
 */
    public function showAll($idEspace){

        $fichiers = DB::table('fichier')
                    ->where('idEspace', '=', $idEspace)
                    ->get();
        return view('afficheFichiers',['fichiers'=>$fichiers]);

    }

}
