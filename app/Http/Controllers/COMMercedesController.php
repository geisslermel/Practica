<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class COMMercedesController extends Controller
{
    public function index(){
        return view('componentes.Mercedes');
    }
}
