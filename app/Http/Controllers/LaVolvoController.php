<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaVolvoController extends Controller
{
    public function index(){
        //return "Es mi 1 controlador";
        return view('Vista controlador.Volvo1');
    }
}
