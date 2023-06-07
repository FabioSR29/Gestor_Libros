<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\libro;

class LibroController extends Controller
{
    


    
    public function get_libros(){

        return libro::all();
       }
   
}
