<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use App\Models\Espace;
use App\Http\Controllers\espaceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class fichierController extends Controller
{

/**
 * It gets all the files from the database that have the same idEspace as the one passed in the
 * function
 *
 * @param idEspace the id of the space where the file is located
 */
    public function showAll(Request $request){
        $fichiers =  Fichier::where('idEspace', '=', Request(key :"idEspace"))->paginate(10);
        return view('afficheFichiers',['fichiers'=>$fichiers,'idEspace'=>Request(key :"idEspace"),'role'=>Request(key :"role")]);

    }

    function downloadFile(Request $request){

        $request->validate([
            'idEspace' => 'required|integer',
            'nom' =>'required|max:50',
        ]);

      $path = storage_path("app/public/".Request(key :"idEspace")."/".Request(key :"nom"));
      $fileName = Request(key :"nom");

      return Response::download($path, $fileName, ['Content-Type: application/sql']);
  }

    public function fileUpload(Request $req){

        $req->validate([
        'idEspace'=> 'required|integer',
        'file' => 'required|file'
        ]);

        $espace = espaceController::find(Request(key: 'idEspace'));
        $quotamax = $espace->quotaMax;
        $espacesize = fichierController::countFileSize(Request(key: 'idEspace'));
        $fileModel = new Fichier;

        if((($req->file('file')->getSize())/1000000)+ $espacesize > $quotamax) {
            return back()
            ->with('Error', 'La montagne est pleine et ne peux pas accueillir votre fichier');
        }

        if($req->file()) {
            $fileName = $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs(Request(key :"idEspace"), $fileName, 'public');
            $fileModel->nom = $fileName;
            $fileModel->taille = ($req->file('file')->getSize())/1000000;
            $fileModel->idEspace = Request(key :"idEspace");
            $fileModel->save();
            return back()
            ->with('Succes','Le fichier a bien rejoin la montagne.')
            ->with('file', $fileName);
            }
    }

      /**
 * It deletes the file in the database that have the same id as the one passed in the
 * function
 *
 * @param request the id of the file
 */
  public function do_delete(Request $request){
    $request->validate([
        'idEspace' => 'required|integer',
        'nom' => 'required|max:50',
        'id' => 'required|integer'
    ]);
    $path = "public/".Request(key :"idEspace")."/".Request(key :"nom");

    $file =  Fichier::find(Request(key :"id"));
    $file->delete();

    Storage::delete($path);

    return back();
  }


      /**
 * It deletes the file in the database that have the same id as the one passed in the
 * function
 *
 * @param request the id of the file
 */
public static function countFiles(int $id){

  $number =  Fichier::where("idEspace","=",$id)->count();

  return $number;
}

public static function countFileSize(int $id){

    $size = Fichier::where("idEspace","=",$id)->sum('taille');

    return $size;
  }

}
