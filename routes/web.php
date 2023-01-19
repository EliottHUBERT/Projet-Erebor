<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/header', function () {
    return view('header');
});

//Route::get('/listeDossiers', function () {
//    return view('afficheDossiers');
//});

//___LOGIN___

Route::controller(SampleController::class)->group(function(){
    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('sample.logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('access', 'access')->name('access');
});

Route::group(['middleware' => ['auth']], function() {


    //___ESPACES___
    Route::get('/listeDossiers',[\App\Http\Controllers\accesController::class,"showAccessByUser"]);

    Route::get('/addDossier', function () { return view('addDossier'); });
    Route::put('/addDossier',[\App\Http\Controllers\DemandeEspaceController::class,"add"]);

    Route::get('/delDossier/{idEspace}',[\App\Http\Controllers\espaceController::class,"delete"])->where("idEspace", "[0-9]+");
    Route::delete('/delDossier/valider',[\App\Http\Controllers\espaceController::class,"do_delete"]);

    Route::get('/editDossier/{idEspace}',[\App\Http\Controllers\espaceController::class,"update"])->where("idEspace", "[0-9]+");
    Route::put('/editDossier',[\App\Http\Controllers\DemandeModifEspaceController::class,"add"]);



    //___FICHIERS___
    Route::get("/listeFichiers", [\App\Http\Controllers\fichierController::class, "showall"])->where("idEspace", "[0-9]+");
    Route::post('/upload-file', [\App\Http\Controllers\fichierController::class, 'fileUpload'])->name('fileUpload');

    Route::delete('/delFichier/{id}',[\App\Http\Controllers\fichierController::class,"do_delete"])->where("id", "[0-9]+");
    Route::get('download/{nom}', [\App\Http\Controllers\fichierController::class, 'downloadFile']);

    //___ACCES___
    Route::get('/detailDossier/{idEspace}',[\App\Http\Controllers\accesController::class,"showAccessByEspace"])->where("idEspace", "[0-9]+");

    Route::get('/addAcces', function () { return view('addAcces'); });

    
    Route::post('/editAcces', [\App\Http\Controllers\accesController::class,"update"]);
    Route::put('/editAcces/valider', [\App\Http\Controllers\accesController::class,"do_update"]);
    Route::delete('/delAcces/valider', [\App\Http\Controllers\accesController::class,"do_delete"]);

    //___ADMIN___

    Route::group(['middleware' => ['auth', 'admin']], function() {
        Route::get('/listeDossiersAdmin',[\App\Http\Controllers\espaceController::class,"showAll"]);
        Route::get('/historique',[\App\Http\Controllers\historiqueController::class,"showall"]);

        //___DEMANDES___

        Route::get('/demande',[\App\Http\Controllers\DemandeEspaceController::class,"showAll"]);
        Route::delete('/delDemande',[\App\Http\Controllers\DemandeEspaceController::class,"do_delete"]);
        Route::put('/validateDemande',[\App\Http\Controllers\espaceController::class,"add"]);

        Route::delete('/delDemandeModif',[\App\Http\Controllers\DemandeModifEspaceController::class,"do_delete"]);
        Route::put('/validateDemandeModif',[\App\Http\Controllers\espaceController::class,"do_update"]);

});

    //___REDIRECT_IF_NOT_FOUND___
    Route::any('{url}', function(){
        return redirect('/listeDossiers');
    })->where('url', '.*');
});
