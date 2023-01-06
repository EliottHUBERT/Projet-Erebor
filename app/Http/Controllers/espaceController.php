<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espace;
use Illuminate\Support\Facades\DB;

class espaceController extends Controller
{

    public function delete(Request $request){
      $espace =  Espace::find(Request(key :"idEspace"));
      return view('deleteDossier',['espace'=>$espace]);
    }

    public function showAll(){
        $espaces =  Espace::all();
        return view('afficheDossiers',['espaces'=>$espaces]);

    }

  public function add(Request $request){
      $espace = new Espace;
      $espace->nom = Request(key :"nom");
      $espace->quota = 0;
      $espace->quotaMax = Request(key :"quota");
      $espace->nbFiles = 0;

      $espace->save();
      return view('validationAddDossier',['espace'=>$espace]);
  }

  public function do_delete(Request $request){
    $espace =  Espace::find(Request(key :"id"));
    $espace->delete();
    return view('validationDeleteDossier',['espace'=>$espace]);
  }

}
