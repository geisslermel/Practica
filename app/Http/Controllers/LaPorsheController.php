<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaPorsheController extends Controller
{
    public function index(){
        //return "Este es el 1 controlador de la porshe";

        $nombre = "Porshe";

        return view('Vista controlador.Porshe1',[
            'nombre' => $nombre
        ]);
    }
}
