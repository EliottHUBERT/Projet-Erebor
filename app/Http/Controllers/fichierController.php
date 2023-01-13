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
        return view('afficheFichiers',['fichiers'=>$fichiers,'idEspace'=>$idEspace]);

    }

    public function fileUpload(Request $req){

        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $fileModel = new Fichier;

        if($req->file()) {
            $fileName = $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->nom = $fileName;
            $fileModel->taille = ($req->file('file')->getSize())/1000000;
            $fileModel->idEspace = Request(key :"idEspace");
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
            }
    }
}