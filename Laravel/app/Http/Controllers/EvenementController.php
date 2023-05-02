<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evenement as Event ;

class EvenementController extends Controller
{
    //
    public function events(){
        return view('evenement', ['events' =>Event::all()]);
    }
}
