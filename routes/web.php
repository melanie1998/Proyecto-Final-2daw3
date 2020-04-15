<?php

use Illuminate\Support\Facades\Route;

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
        return view('reservasConcierto1');
    })->name('reservaConcierto1');

    Route::get('generalConc1', 'ControladorConciertos@generalConc1')->name('generalConc1');
    Route::get('pistaAConc1', 'ControladorConciertos@pistaAConc1')->name('pistaAConc1');
    Route::get('pistaBConc1', 'ControladorConciertos@pistaBConc1')->name('pistaBConc1');
    Route::get('grada1Conc1', 'ControladorConciertos@grada1Conc1')->name('grada1Conc1');
    Route::get('grada2Conc1', 'ControladorConciertos@grada2Conc1')->name('grada2Conc1');
    Route::get('grada3Conc1', 'ControladorConciertos@grada3Conc1')->name('grada3Conc1');


    /*CONCIERTO 2*/
    Route::get('reservaConcierto2', function () {
        return view('reservasConcierto2');
    })->name('reservaConcierto2');

    Route::get('generalConc2', 'ControladorConciertos@generalConc2')->name('generalConc2');
    Route::get('pistaAConc2', 'ControladorConciertos@pistaAConc2')->name('pistaAConc2');
    Route::get('pistaBConc2', 'ControladorConciertos@pistaBConc2')->name('pistaBConc2');
    Route::get('grada1Conc2', 'ControladorConciertos@grada1Conc2')->name('grada1Conc2');
    Route::get('grada2Conc2', 'ControladorConciertos@grada2Conc2')->name('grada2Conc2');
    Route::get('grada3Conc2', 'ControladorConciertos@grada3Conc2')->name('grada3Conc2');

    /*CONCIERTO 3*/
    Route::get('reservaConcierto3', function () {
        return view('reservasConcierto3');
    })->name('reservaConcierto3');

    Route::get('generalConc3', 'ControladorConciertos@generalConc3')->name('generalConc3');
    Route::get('pistaAConc3', 'ControladorConciertos@pistaAConc3')->name('pistaAConc3');
    Route::get('pistaBConc3', 'ControladorConciertos@pistaBConc3')->name('pistaBConc3');
    Route::get('grada1Conc3', 'ControladorConciertos@grada1Conc3')->name('grada1Conc3');
    Route::get('grada2Conc3', 'ControladorConciertos@grada2Conc3')->name('grada2Conc3');
    Route::get('grada3Conc3', 'ControladorConciertos@grada3Conc3')->name('grada3Conc3');
    
    /*CONCIERTO */
    Route::get('reservaConcierto4', function () {
        return view('reservasConcierto4');
    })->name('reservaConcierto4');

    Route::get('generalConc4', 'ControladorConciertos@generalConc4')->name('generalConc4');
    Route::get('pistaAConc4', 'ControladorConciertos@pistaAConc4')->name('pistaAConc4');
    Route::get('pistaBConc4', 'ControladorConciertos@pistaBConc4')->name('pistaBConc4');
    Route::get('grada1Conc4', 'ControladorConciertos@grada1Conc4')->name('grada1Conc4');
    Route::get('grada2Conc4', 'ControladorConciertos@grada2Conc4')->name('grada2Conc4');
    Route::get('grada3Conc4', 'ControladorConciertos@grada3Conc4')->name('grada3Conc4');

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

    Route::get('guardarNumButaca/{butaca}/{dia}/{hora}/{fila}', 'ControladorEntradasCine@guardarNumButaca')->name('guardarNumButaca');
    Route::post('compraEntradas', 'ControladorEntradasCine@compraEntradas')->name('compraEntradas');
    Route::get('cambiarDiaHora/{dia}/{hora}', 'ControladorEntradasCine@cambiarDiaHora')->name('cambiarDiaHora');

    /*HARRY POTTER*/
    Route::get('reservasCine2', function () {
        return view('reservasCine2');
    })->name('reservasCine2');

    /*ANNABELLE*/
    Route::get('reservasCine3', function () {
        return view('reservasCine3');
    })->name('reservasCine3');

    /*SHREK*/
    Route::get('reservasCine4', function () {
        return view('reservasCine4');
    })->name('reservasCine4');

});


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');