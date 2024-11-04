<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class COMFerrariController extends Controller
{
    public function index(){
        return view('componentes.Ferrari');
    }
}
