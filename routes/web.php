<?php

use App\Http\Controllers\COMBMWController;
use App\Http\Controllers\COMFerrariController;
use App\Http\Controllers\COMMercedesController;
use App\Http\Controllers\COMPorsheController;
use App\Http\Controllers\COMVolvoController;
use App\Http\Controllers\ElBMWController;
use App\Http\Controllers\ElFerrariController;
use App\Http\Controllers\LaMercedesbenzController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaVolvoController;
use App\Http\Controllers\LaPorsheController;
use App\Models\Shoe;
use App\Models\Table;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/melchor', function () {
    return view ('Miprimeravista');
});
//Route::get('/Mercedes-benz', function () {
    //return view('LaMercedes-benz');
//});
//Route::get('/BMW', function () {
//    return view('ElBMW');
//});
//Route::get('/Ferrari', function (){
//    return view('ElFerrari');
//});
//Route::get('/Volvo', function (){
//    return view('LaVolvo');
//});
//Route::get('/Porshe', function(){
//    return view('LaPorshe');
//});
//Route::get('/volvocontrolador',  [LaVolvoController::class, 'index']);
//Route::get('/porshecontrolador', [LaPorsheController::class, 'index']);
//Route::get('/mercedesbenzcontrolador', [LaMercedesbenzController::class, 'index']);
//Route::get('/ferraricontrolador', [ElFerrariController::class, 'index']);
//Route::get('/bmwcontrolador', [ElBMWController::class, 'index']);
Route::get('/BMWCOM', [COMBMWController::class, 'index']);
Route::get('/FerrariCOM', [COMFerrariController::class, 'index']);
Route::get('/Mercedes-benzCOM', [COMMercedesController::class, 'index']);
Route::get('/PorsheCOM', [COMPorsheController::class, 'index']);
Route::get('/VolvoCOM', [COMVolvoController::class, 'index']);

Route::get('/PLANBMW', function(){
    return view('PLANBMW');
});

Route::get('/primeraplantilla', function(){
    return view('primeraplantilla');
});

Route::get('/segundaplantilla', function(){
    return view('segundaplantilla');
});

Route::get('/terceraplantilla', function(){
    return view('terceraplantilla');
});

Route::get('/cuartaplantilla', function(){
    return view('cuartaplantilla');
});

Route::get('/quintaplantilla', function(){
    return view('quintaplantilla');
});

//Route::get('/geissler', function () {
//    $table= new Table;
//    $table->model='No tengo idea';
//    $table->save();
//    return $table;
//});//

/*Route::get('/geissler', function () {
    $shoe= new Shoe;
    $shoe->model='Nike';
    $shoe->mark='Dunk';
    $shoe->size='27';
    $shoe->color='White';
    $shoe->price= 2500.50;
    $shoe->country='USA';
    $shoe->save();
    return $shoe;
});

Route::get('/geissler', function () {
    $shoe= new Shoe;
    $shoe->model='Adidas';
    $shoe->mark='Samba';
    $shoe->size='25';
    $shoe->color='Black';
    $shoe->price= 1500.20;
    $shoe->country='Germany';
    $shoe->save();
    return $shoe;
});

Route::get('/geissler', function () {
    $shoe= new Shoe;
    $shoe->model='Puma';
    $shoe->mark='It King';
    $shoe->size='30';
    $shoe->color='Red';
    $shoe->price= 1800.90;
    $shoe->country='Germany';
    $shoe->save();
    return $shoe;
});*/

/*Route::get('/geissler', function () {
    $shoe = Shoe::find(1);
    return $shoe;
});*/

/*Route::get('/geissler', function () {
    $shoe = Shoe::where('model', 'Puma')->first();
    $shoe->model = 'Puma 301';
    $shoe->save();
    return $shoe;
});*/

/*Route::get('/geissler', function () {
    $shoe = Shoe::all();
    return $shoe;
});*/

/*Route::get('/geissler', function () {
    $shoe = Shoe::find(1);
    $shoe-> delete();
});*/

/*Route::get('/geissler', function () {
    $shoe = new Shoe;
    $shoe->model='Geissler Melchor Gomez Escamilla';
    $shoe->mark='Hijo';
    $shoe->size=1;
    $shoe->color='Brown';
    $shoe->price= 10000;
    $shoe->country='Mexico';
    $shoe->published_at='2024-10-30 14:43:00';
    $shoe->is_active=true;
    $shoe->save();
    return $shoe;
});*/

/*Route::get('/geissler', function () {
    $shoe = Shoe::find(1);
    return $shoe->published_at;
});*/

Route::get('/geissler', function () {
    $shoe = Shoe::find(1);
    /*return $shoe->published_at->format('d-m-Y');*/
    return $shoe->published_at->diffForHumans();
});

