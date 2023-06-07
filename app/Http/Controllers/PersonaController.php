<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //

    public function get_personas(){

     return persona::all();
    }

    
}
