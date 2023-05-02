<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association as Asso ;

class AssociationController extends Controller
{
    //
    public function associations(){
        return view('association', ['Assos' =>Asso::all()]);
    }
}
