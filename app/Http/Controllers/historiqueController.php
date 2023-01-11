<?php

namespace App\Http\Controllers;

use App\Models\log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class historiqueController extends Controller
{



/**
 * It gets all the files from the database that have the same idEspace as the one passed in the
 * function
 *
 * @param idEspace the id of the space where the file is located
 */
    public function showAll(){
        $logs =  log::paginate(10);
        return view('historique',['logs'=>$logs]);

    }

}
