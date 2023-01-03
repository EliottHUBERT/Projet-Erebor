<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espace;

class espaceController extends Controller
{

    public function showAll(){
        $espaces =  Espace::all();
        return view('afficheDossiers',['espaces'=>$espaces]);

    }
}
