<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/logincomf',[\App\Http\Controllers\AuthController::class, "login"]);


//___ESPACES___
Route::get('/listeDossiers',[\App\Http\Controllers\espaceController::class,"showAll"]);


//___FICHIERS___
Route::get("/listeFichiers/{idEspace}", [\App\Http\Controllers\fichierController::class, "showall"])->where("idEspace", "[0-9]+");


//___ACCES___
Route::get('/detailDossier/{idEspace}',[\App\Http\Controllers\accesController::class,"showAccessByEspace"])->where("idEspace", "[0-9]+");
Route::get('/addAcces', function () {
    return view('addAcces');
});
