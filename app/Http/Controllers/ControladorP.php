<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorP extends Controller
{
    function fGenerales(){
        return view('generales');
    }

    function fEspecificos(){
        return view('especificos');
    }

    function fEquipos(){
        return view('equipos');
    }
    
}
