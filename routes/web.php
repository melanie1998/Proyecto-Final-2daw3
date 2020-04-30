<?php

use Illuminate\Support\Facades\Route;
use App\EntradasConciertos;
use App\PrecioPistaA;
use App\PrecioPistaB;
use App\PrecioGradas;
use App\ConciertosDisponibles;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::get('/registrologin', function () {
    return view('registrologin');
})->name('registrologin');

Route::post('/registro', 'ControladorUsuario@registrarse')->name('registro');

//inicio sesion con google
Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/sobreheavn', function () {
    return view('sobreheavn');
})->name('sobreheavn');

Route::get('verOpiniones', function () {
    return view('verOpiniones');
})->name('verOpiniones');

Route::get('opciones', function () {
    return view('opciones');
})->name('opciones');



Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('test', 'ControladorUsuario@contadorSesion')->name('test');
    Route::get('mostrarTest', function () {
        return view('test');
    })->name('mostrarTest');
    
    Route::get('/editar/{value}', 'ControladorUsuario@pasarDatos');
    Route::post('/modificarPerfil/{id}', 'ControladorUsuario@update');

    Route::get('realizarTest', function () {
        return view('realizarTest');
    })->name('realizarTest');

    Route::get('opiniones','ControladorUsuario@verOpiniones');

    Route::post('/instertarOpinion', 'ControladorUsuario@insertaropnion')->name('instertarOpinion');

    //test
    Route::get('pregunta1/{genero}','ControladorTest@pregunta1');
    Route::get('pregunta2/{pelicula}','ControladorTest@pregunta2');
    Route::get('pregunta3/{serie}','ControladorTest@pregunta3');
    Route::get('pregunta4/{generomusica}','ControladorTest@pregunta4');
    Route::get('pregunta5/{cancion}','ControladorTest@pregunta5');
    Route::get('pregunta6/{artista}','ControladorTest@pregunta6');

    Route::get('verConciertos', function () {
        return view('conciertos');
    })->name('verConciertos');

    Route::get('conciertos','ControladorConciertos@verConciertos');

    Route::get('infoArtistas', function () {
        return view('infoArtistas');
    })->name('infoArtistas');

    /*CONCIERTO 1*/
    Route::get('reservaConcierto1', function () {
        $agotado6 = '';
        $colorRojo6 = '';
        $agotado7 = '';
        $colorRojo7 = '';
        $agotado8 = '';
        $colorRojo8 = '';
        $agotado9 = '';
        $colorRojo9 = '';
        $agotado10 = '';
        $colorRojo10 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado6 = 'pointer-events: none;';
                    $colorRojo6 = 'background-color: red;';
                }else{
                    $agotado6 = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado7 = 'pointer-events: none;';
                    $colorRojo7 = 'background-color: red;';
                }else{
                    $agotado7 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado8 = 'pointer-events: none;';
                    $colorRojo8 = 'background-color: red;';
                }else{
                    $agotado8 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado9 = 'pointer-events: none;';
                    $colorRojo9 = 'background-color: red;';
                }else{
                    $agotado9 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado10 = 'pointer-events: none;';
                    $colorRojo10 = 'background-color: red;';
                }else{
                    $agotado10 = '';
                }
            }
            
        }
        return view('reservasConcierto1')->with(['colorAgotado6'=>$colorRojo6, 'agotado6'=>$agotado6, 'colorAgotado7'=>$colorRojo7, 'agotado7'=>$agotado7, 'colorAgotado8'=>$colorRojo8, 'agotado8'=>$agotado8, 'colorAgotado9'=>$colorRojo9, 'agotado9'=>$agotado9, 'colorAgotado10'=>$colorRojo10, 'agotado10'=>$agotado10]);
    })->name('reservaConcierto1');

    Route::get('ponerAgotado', 'ControladorConciertos@ponerAgotado')->name('ponerAgotado');

    Route::get('generalConc1', 'ControladorConciertos@generalConc1')->name('generalConc1');
    Route::get('pistaAConc1', 'ControladorConciertos@pistaAConc1')->name('pistaAConc1');
    Route::get('pistaBConc1', 'ControladorConciertos@pistaBConc1')->name('pistaBConc1');
    Route::get('grada1Conc1', 'ControladorConciertos@grada1Conc1')->name('grada1Conc1');
    Route::get('grada2Conc1', 'ControladorConciertos@grada2Conc1')->name('grada2Conc1');
    Route::get('grada3Conc1', 'ControladorConciertos@grada3Conc1')->name('grada3Conc1');

    Route::post('compraEntradaConc1PistaA', 'ControladorCompraConciertos@compraEntradaConc1PistaA')->name('compraEntradaConc1PistaA');
    Route::post('compraEntradaConc1PistaB', 'ControladorCompraConciertos@compraEntradaConc1PistaB')->name('compraEntradaConc1PistaB');
    Route::post('compraEntradaConc1Grada1', 'ControladorCompraConciertos@compraEntradaConc1Grada1')->name('compraEntradaConc1Grada1');
    Route::post('compraEntradaConc1Grada2', 'ControladorCompraConciertos@compraEntradaConc1Grada2')->name('compraEntradaConc1Grada2');
    Route::post('compraEntradaConc1Grada3', 'ControladorCompraConciertos@compraEntradaConc1Grada3')->name('compraEntradaConc1Grada3');

    /*CONCIERTO 2*/
    Route::get('reservaConcierto2', function () {
        $agotado6 = '';
        $colorRojo6 = '';
        $agotado7 = '';
        $colorRojo7 = '';
        $agotado8 = '';
        $colorRojo8 = '';
        $agotado9 = '';
        $colorRojo9 = '';
        $agotado10 = '';
        $colorRojo10 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado6 = 'pointer-events: none;';
                    $colorRojo6 = 'background-color: red;';
                }else{
                    $agotado6 = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado7 = 'pointer-events: none;';
                    $colorRojo7 = 'background-color: red;';
                }else{
                    $agotado7 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado8 = 'pointer-events: none;';
                    $colorRojo8 = 'background-color: red;';
                }else{
                    $agotado8 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado9 = 'pointer-events: none;';
                    $colorRojo9 = 'background-color: red;';
                }else{
                    $agotado9 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado10 = 'pointer-events: none;';
                    $colorRojo10 = 'background-color: red;';
                }else{
                    $agotado10 = '';
                }
            }
            
        }
        return view('reservasConcierto2')->with(['colorAgotado6'=>$colorRojo6, 'agotado6'=>$agotado6, 'colorAgotado7'=>$colorRojo7, 'agotado7'=>$agotado7, 'colorAgotado8'=>$colorRojo8, 'agotado8'=>$agotado8, 'colorAgotado9'=>$colorRojo9, 'agotado9'=>$agotado9, 'colorAgotado10'=>$colorRojo10, 'agotado10'=>$agotado10]);
    })->name('reservaConcierto2');

    Route::get('ponerAgotado2', 'ControladorConciertos@ponerAgotado2')->name('ponerAgotado2');

    Route::get('generalConc2', 'ControladorConciertos@generalConc2')->name('generalConc2');
    Route::get('pistaAConc2', 'ControladorConciertos@pistaAConc2')->name('pistaAConc2');
    Route::get('pistaBConc2', 'ControladorConciertos@pistaBConc2')->name('pistaBConc2');
    Route::get('grada1Conc2', 'ControladorConciertos@grada1Conc2')->name('grada1Conc2');
    Route::get('grada2Conc2', 'ControladorConciertos@grada2Conc2')->name('grada2Conc2');
    Route::get('grada3Conc2', 'ControladorConciertos@grada3Conc2')->name('grada3Conc2');

    Route::post('compraEntradaConc2PistaA', 'ControladorCompraConciertos@compraEntradaConc2PistaA')->name('compraEntradaConc2PistaA');
    Route::post('compraEntradaConc2PistaB', 'ControladorCompraConciertos@compraEntradaConc2PistaB')->name('compraEntradaConc2PistaB');
    Route::post('compraEntradaConc2Grada1', 'ControladorCompraConciertos@compraEntradaConc2Grada1')->name('compraEntradaConc2Grada1');
    Route::post('compraEntradaConc2Grada2', 'ControladorCompraConciertos@compraEntradaConc2Grada2')->name('compraEntradaConc2Grada2');
    Route::post('compraEntradaConc2Grada3', 'ControladorCompraConciertos@compraEntradaConc2Grada3')->name('compraEntradaConc2Grada3');

    /*CONCIERTO 3*/
    Route::get('reservaConcierto3', function () {
        $agotado6 = '';
        $colorRojo6 = '';
        $agotado7 = '';
        $colorRojo7 = '';
        $agotado8 = '';
        $colorRojo8 = '';
        $agotado9 = '';
        $colorRojo9 = '';
        $agotado10 = '';
        $colorRojo10 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado6 = 'pointer-events: none;';
                    $colorRojo6 = 'background-color: red;';
                }else{
                    $agotado6 = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado7 = 'pointer-events: none;';
                    $colorRojo7 = 'background-color: red;';
                }else{
                    $agotado7 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado8 = 'pointer-events: none;';
                    $colorRojo8 = 'background-color: red;';
                }else{
                    $agotado8 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado9 = 'pointer-events: none;';
                    $colorRojo9 = 'background-color: red;';
                }else{
                    $agotado9 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado10 = 'pointer-events: none;';
                    $colorRojo10 = 'background-color: red;';
                }else{
                    $agotado10 = '';
                }
            }
            
        }
        return view('reservasConcierto3')->with(['colorAgotado6'=>$colorRojo6, 'agotado6'=>$agotado6, 'colorAgotado7'=>$colorRojo7, 'agotado7'=>$agotado7, 'colorAgotado8'=>$colorRojo8, 'agotado8'=>$agotado8, 'colorAgotado9'=>$colorRojo9, 'agotado9'=>$agotado9, 'colorAgotado10'=>$colorRojo10, 'agotado10'=>$agotado10]);
    })->name('reservaConcierto3');

    Route::get('ponerAgotado3', 'ControladorConciertos@ponerAgotado3')->name('ponerAgotado3');

    Route::get('generalConc3', 'ControladorConciertos@generalConc3')->name('generalConc3');
    Route::get('pistaAConc3', 'ControladorConciertos@pistaAConc3')->name('pistaAConc3');
    Route::get('pistaBConc3', 'ControladorConciertos@pistaBConc3')->name('pistaBConc3');
    Route::get('grada1Conc3', 'ControladorConciertos@grada1Conc3')->name('grada1Conc3');
    Route::get('grada2Conc3', 'ControladorConciertos@grada2Conc3')->name('grada2Conc3');
    Route::get('grada3Conc3', 'ControladorConciertos@grada3Conc3')->name('grada3Conc3');
    
    Route::post('compraEntradaConc3PistaA', 'ControladorCompraConciertos@compraEntradaConc3PistaA')->name('compraEntradaConc3PistaA');
    Route::post('compraEntradaConc3PistaB', 'ControladorCompraConciertos@compraEntradaConc3PistaB')->name('compraEntradaConc3PistaB');
    Route::post('compraEntradaConc3Grada1', 'ControladorCompraConciertos@compraEntradaConc3Grada1')->name('compraEntradaConc3Grada1');
    Route::post('compraEntradaConc3Grada2', 'ControladorCompraConciertos@compraEntradaConc3Grada2')->name('compraEntradaConc3Grada2');
    Route::post('compraEntradaConc3Grada3', 'ControladorCompraConciertos@compraEntradaConc3Grada3')->name('compraEntradaConc3Grada3');

    /*CONCIERTO 4*/
    Route::get('reservaConcierto4', function () {
        $agotado6 = '';
        $colorRojo6 = '';
        $agotado7 = '';
        $colorRojo7 = '';
        $agotado8 = '';
        $colorRojo8 = '';
        $agotado9 = '';
        $colorRojo9 = '';
        $agotado10 = '';
        $colorRojo10 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado6 = 'pointer-events: none;';
                    $colorRojo6 = 'background-color: red;';
                }else{
                    $agotado6 = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado7 = 'pointer-events: none;';
                    $colorRojo7 = 'background-color: red;';
                }else{
                    $agotado7 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado8 = 'pointer-events: none;';
                    $colorRojo8 = 'background-color: red;';
                }else{
                    $agotado8 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado9 = 'pointer-events: none;';
                    $colorRojo9 = 'background-color: red;';
                }else{
                    $agotado9 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado10 = 'pointer-events: none;';
                    $colorRojo10 = 'background-color: red;';
                }else{
                    $agotado10 = '';
                }
            }
            
        }
        return view('reservasConcierto4')->with(['colorAgotado6'=>$colorRojo6, 'agotado6'=>$agotado6, 'colorAgotado7'=>$colorRojo7, 'agotado7'=>$agotado7, 'colorAgotado8'=>$colorRojo8, 'agotado8'=>$agotado8, 'colorAgotado9'=>$colorRojo9, 'agotado9'=>$agotado9, 'colorAgotado10'=>$colorRojo10, 'agotado10'=>$agotado10]);
    })->name('reservaConcierto4');

    Route::get('ponerAgotado4', 'ControladorConciertos@ponerAgotado4')->name('ponerAgotado4');

    Route::get('generalConc4', 'ControladorConciertos@generalConc4')->name('generalConc4');
    Route::get('pistaAConc4', 'ControladorConciertos@pistaAConc4')->name('pistaAConc4');
    Route::get('pistaBConc4', 'ControladorConciertos@pistaBConc4')->name('pistaBConc4');
    Route::get('grada1Conc4', 'ControladorConciertos@grada1Conc4')->name('grada1Conc4');
    Route::get('grada2Conc4', 'ControladorConciertos@grada2Conc4')->name('grada2Conc4');
    Route::get('grada3Conc4', 'ControladorConciertos@grada3Conc4')->name('grada3Conc4');

    Route::post('compraEntradaConc4PistaA', 'ControladorCompraConciertos@compraEntradaConc4PistaA')->name('compraEntradaConc4PistaA');
    Route::post('compraEntradaConc4PistaB', 'ControladorCompraConciertos@compraEntradaConc4PistaB')->name('compraEntradaConc4PistaB');
    Route::post('compraEntradaConc4Grada1', 'ControladorCompraConciertos@compraEntradaConc4Grada1')->name('compraEntradaConc4Grada1');
    Route::post('compraEntradaConc4Grada2', 'ControladorCompraConciertos@compraEntradaConc4Grada2')->name('compraEntradaConc4Grada2');
    Route::post('compraEntradaConc4Grada3', 'ControladorCompraConciertos@compraEntradaConc4Grada3')->name('compraEntradaConc4Grada3');


    /**/
    Route::get('playlist','ControladorInfoArtistas@playlist')->name('playlist');

    Route::get('escuchadaRec/{id}', 'ControladorInfoArtistas@escuchadaRec')->name('escuchadaRec');
    Route::get('escuchadasRecientemente','ControladorInfoArtistas@escuchadasRecientemente')->name('escuchadasRecientemente');
    
    Route::get('meterLike/{id}', 'ControladorInfoArtistas@meterLike')->name('meterLike');
    Route::get('borrarLike/{id}', 'ControladorInfoArtistas@borrarLike')->name('borrarLike');

    Route::get('cancionesFav', 'ControladorInfoArtistas@cancionesFav')->name('cancionesFav');
    Route::get('fotoLikeFull', 'ControladorInfoArtistas@fotoLikeFull')->name('fotoLikeFull');


    /* CINE */
    Route::get('verCine', function () {
        return view('cine');
    })->name('verCine');

    /*JOKER*/
    Route::get('reservasCine1', function () {
        return view('reservasCine1');
    })->name('reservasCine1');

    Route::get('guardarNumButaca/{butaca}/{dia}/{hora}/{fila}/{idEntrada}', 'ControladorEntradasCine@guardarNumButaca')->name('guardarNumButaca');
    Route::post('compraEntradas', 'ControladorEntradasCine@compraEntradas')->name('compraEntradas');
    Route::get('cambiarDiaHora/{dia}/{hora}', 'ControladorEntradasCine@cambiarDiaHora')->name('cambiarDiaHora');

    /*HARRY POTTER*/
    Route::get('reservasCine2', function () {
        return view('reservasCine2');
    })->name('reservasCine2');

    Route::get('guardarNumButaca2/{butaca}/{dia}/{hora}/{fila}/{idEntrada}', 'ControladorEntradasCine2@guardarNumButaca')->name('guardarNumButaca2');
    Route::post('compraEntradas2', 'ControladorEntradasCine2@compraEntradas')->name('compraEntradas2');
    Route::get('cambiarDiaHora2/{dia}/{hora}', 'ControladorEntradasCine2@cambiarDiaHora')->name('cambiarDiaHora2');

    /*ANNABELLE*/
    Route::get('reservasCine3', function () {
        return view('reservasCine3');
    })->name('reservasCine3');

    Route::get('guardarNumButaca3/{butaca}/{dia}/{hora}/{fila}/{idEntrada}', 'ControladorEntradasCine3@guardarNumButaca')->name('guardarNumButaca3');
    Route::post('compraEntradas3', 'ControladorEntradasCine3@compraEntradas')->name('compraEntradas3');
    Route::get('cambiarDiaHora3/{dia}/{hora}', 'ControladorEntradasCine3@cambiarDiaHora')->name('cambiarDiaHora3');

    /*SHREK*/
    Route::get('reservasCine4', function () {
        return view('reservasCine4');
    })->name('reservasCine4');

    Route::get('guardarNumButaca4/{butaca}/{dia}/{hora}/{fila}/{idEntrada}', 'ControladorEntradasCine4@guardarNumButaca')->name('guardarNumButaca4');
    Route::post('compraEntradas4', 'ControladorEntradasCine4@compraEntradas')->name('compraEntradas4');
    Route::get('cambiarDiaHora4/{dia}/{hora}', 'ControladorEntradasCine4@cambiarDiaHora')->name('cambiarDiaHora4');

});


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');