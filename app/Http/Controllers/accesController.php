<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Acces;

class accesController extends Controller
{
/**
 * It gets all the access from the database that have the same idEspace and the same idUser as the both passed in the
 * function
 *
 * @param idUser the id of the space where the file is located
 * @param idEspace the id of the space where the file is located
 */
public function showAccessFromUser($idUser,$idEspace){

    $lesAcces = DB::table('acces')
                ->where('idUser', '=', $idUser)
                ->andWhere('idEspace', '=', $idEspace)
                ->get();
    return view('detailDossier',['lesAcces'=>$lesAcces]);

}

/**
 * It gets all the user from the database that have access on the same Espace as the one passed in the
 * function
 *
 * @param idEspace the id of the space where the file is located
 */
public function showAccessByEspace($idEspace){

    $lesAcces = DB::table('acces')
                ->Where('idEspace', '=', $idEspace)
                ->get();
    return view('detailDossier',['lesAcces'=>$lesAcces]);

}

/**
 * It gets all the user from the database that have access on the same Espace as the one passed in the
 * function
 *
 * @param idUser the id of the space where the file is located
 */
public function showAccessByUser($idUser){

    $lesAcces = DB::table('acces')
                ->Where('idUser', '=', $idUser)
                ->get();
    return view('detailDossier',['lesAcces'=>$lesAcces]);

}

}
