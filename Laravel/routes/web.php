<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Models;


use App\Models\Personne as Personnes ;

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
/*
Route::get('/{identifiant}/{action}', function ($id,$action) {
    if($action='accueil')
        return App\Http\Controllers\PersonneController::class.personnes();
    if($action=='accueil')
        return view('acceuil');
    if($action=='event')
        return view('eventwithid');
    if($action=='asso')
        return view('assowithid');
    
});

Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/accueil', function () {
    return view('acceuil');
});
*/
Route::get('/', [App\Http\Controllers\PersonneController::class, 'choix'] )->name('choix');

Route::get('/ajout_association', [App\Http\Controllers\PersonneController::class, 'connexion'] );
Route::get('/ajout_event', [App\Http\Controllers\PersonneController::class, 'connexion'] );


Route::get('/{identifiant}', [App\Http\Controllers\PersonneController::class, 'personne'] )->name('principale');

//Route::post('/{identifiant}/ajout_association', [App\Http\Controllers\AssociationController::class, 'ajout'] );
//Route::post('/{identifiant}/ajout_association', [App\Http\Controllers\PersonneController::class, 'ajout'] );

Route::get('/{identifiant}/ajout_association', function($identifiant) {
    $control = new App\Http\Controllers\PersonneController;
    return $control->form($identifiant, 'asso');
})->name('ajout_asso');

Route::get('/{identifiant}/ajout_event', function($identifiant) {
    $control = new App\Http\Controllers\PersonneController;
    return$control->form($identifiant, 'event');
})->name('ajout_event');


Route::post('/{identifiant}/ajout_event', function($id) {
    $control = new App\Http\Controllers\PersonneController;
    if($control->ajout_event($id, request('nom'), request('description'),request('date'),request('max'),request('lieu'),request('Asso')))
    return view('test', ['message' => 'Ajout de l\'événement '.request('nom')]);

})->name('ajout_event');

Route::post('/{identifiant}/ajout_association', function($identifiant) {
    $control = new App\Http\Controllers\PersonneController;
    if($control->ajout_asso($identifiant, request('nom'), request('description')))
    return view('test', ['message' => 'Ajout de l\'association '.request('nom')]);

});

Route::post('/ajout_personne', function() {
    $control = new App\Http\Controllers\PersonneController;
    if($control->ajoutpersonne(request('nom'),request('prenom'),request('filiere'),request('mail')))
    return view('test',['message' => 'Ajout de '.request('nom').request('prenom')]);
} 
);
