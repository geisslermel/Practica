<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaMercedesbenzController extends Controller
{
    public function index(){
        //return "1 vista de Mercedes Benz";
        return view ('Vista controlador.Mercedesbenz');
    }
}
