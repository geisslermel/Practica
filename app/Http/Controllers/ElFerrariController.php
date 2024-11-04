<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElFerrariController extends Controller
{
    public function index(){
        $coche = "Ferrari";
        $velocidad = "372 km/h";

        return view('Vista controlador.Ferrari')
        ->with('coche' , $coche)
        ->with('velocidad' , $velocidad);
    }
}
