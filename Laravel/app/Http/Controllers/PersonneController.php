<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Personne as Personne ;
use App\Models\Association as Association ;
use App\Models\Organisateur as Organisateur ;
use App\Models\Participant as Participant ;
use App\Models\Evenement as Evenement ;

//use App\Models\Demandeasso as Demande ;


class PersonneController extends Controller
{
    public function choix(){
        $personnes = Personne::all();

        return view('accueil', ['personnes' =>$personnes]);
    }
    public function connexion(){
        $personnes = Personne::all();
        return view('connexion',['personnes' =>$personnes]);
    }

    public function personne($identifiant){
        $pers=Personne::where('Identifiant','=', $identifiant)->get()[0];
        
        //Pour affichage event organisateur en cours
            //rajouter des verifications si pas d'event
        $soneventencours=Evenement::where('id','=', Organisateur::where('Id_pers','=',$pers['id'])->take(1)->get()[0]['Id_event'])->take(1)->get()[0];
        //dd($soneventencours);  
        //Pour affichage event participant en cours
        $uneventencours['Nom']= 'Gala';
        
        //Pour les événements participant
        //$particiapnt=Evenement::where('id','=', Participant::where('Id_pers','=',$pers['id'])->take(1)->get()[0]['Id_event'])->take(1)->get()[0];
        //Pour l'affichage de ses evenements
        $mesevents=Organisateur::where('Id_pers','=',$pers['id'])->get();
        $sesevents=[];
        foreach($mesevents as $monevent){
            array_push($sesevents, Evenement::where('id','=', $monevent['Id_event'])->get()[0]);
        }
    return view('accueilPersonne', [ 'personne'=>$pers,'soneventencours'=> $soneventencours,'eventencours'=> $uneventencours,'mesevents' => $sesevents ]);
    }


    public function ajoutpersonne($nom, $prenom,$filiere, $mail){
        $personne = New Personne;
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';
        for($i=0; $i<10; $i++){
            $string .= $chars[rand(0, strlen($chars)-1)];
        }

        $personne->Identifiant= $string;
        
        $personne->Nom=$nom;
        $personne->Prenom=$prenom;
        $personne->Filiere=$filiere;
        $personne->mail=$mail;
        return($personne->save());
    }

    public function form( $identifiant, string $type){
        //$personne=Personne::where('Identifiant','=', $identifiant)->take(1)->get();
        //dd($personne[0]['Identifiant']);
        return view('Formulaire', ['type' => $type, 'personne'=>Personne::where('Identifiant','=', $identifiant)->get()[0]]);
    }

    public function ajout_asso($identifiant, $nom_asso,$desc){
        $association = New Association;
        $association->Nom=$nom_asso;
        $association->membre=Personne::where('Identifiant','=', $identifiant)->get()[0]['id'];
        //$association->description=$desc;
        return($association->save());
    }

    public function ajout_event($identifiant, $nom, $desc,$date,$max,$lieu,$Asso){
        $event = New Evenement;
        $event->Nom=$nom;
        $event->Description=$desc;
        $event->Date=$date;
        $event->Lieu=$lieu;
        $event->nb_max=$max;
        $event->Nom_assoc=$Asso;
        if($event->save()){
            $orga = New Organisateur;
            $orga->Id_event=Evenement::where('Nom','=', $nom)->get()[0]['id'];
            $orga->Id_pers=Personne::where('Identifiant','=', $identifiant)->get()[0]['id'];
            return($orga->save());

        }
        return null;
    }
}
