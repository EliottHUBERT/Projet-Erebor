<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espace;
use Illuminate\Support\Facades\DB;

class espaceController extends Controller
{

    public function showAll(){
        $espaces =  Espace::all();

        $idEspaces = DB::table('espace')
                    ->select('espace.id')
                    ->get();

 //       foreach($idEspaces as $id){
 //           $comptages = DB::table('fichier')
   //                     ->select('* as ',$id)
     //                   ->where('fichier.idEspace','=',$id)
       //                 ->get();

        //}
        return view('afficheDossiers',['espaces'=>$espaces]);

    }

}
