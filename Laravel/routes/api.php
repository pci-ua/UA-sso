<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Evenement as Evenement ;
    
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('stock', function(){
    $test=Evenement::where('id','=', $_GET['event'])->get()['0']['stock'];
    return $test;
});


// à finir
Route::get('refuser', function(){
    //On supprimer de la table demande sans l'ajouter dans membre
    $control->refuser($id);
    /*
    $test='essai';
    return $test;*/
});


Route::get('accepter', function(){
    return 'accepter bien sur'; 
    //On supprimer de la table demande et on l'ajouter dans membre de l'asso
    $control->accepter($id, $nomAsso);
});