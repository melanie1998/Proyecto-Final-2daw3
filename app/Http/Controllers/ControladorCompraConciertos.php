<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EntradasConciertos;
use App\PrecioPistaA;
use App\PrecioPistaB;
use App\PrecioGradas;
use App\ConciertosDisponibles;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Mail\EnviarDatosCompraConcierto;
use Illuminate\Support\Facades\Mail;

class ControladorCompraConciertos extends Controller
{

    /*CONCIERTO 1*/
    public function compraEntradaConc1PistaA(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles1' => ['required'],
            'cantidad1' => ['required'],
            'precioTotal1' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Ed Sheeran';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Wizik Center';    
            $datos->gradaPista = 'Pista A';    
            $datos->cantEntradas = $request->input('cantidad1');
            $datos->precio = $request->input('precioTotal1');
            $datos->idEntrada = $request->input('idEntrada1');
            $datos->save();

            $datos2 = PrecioPistaA::findOrFail(1);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad1');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad1');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(1);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad1');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad1');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado');
        }
    }

    public function compraEntradaConc1PistaB(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles2' => ['required'],
            'cantidad2' => ['required'],
            'precioTotal2' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Ed Sheeran';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Wizik Center';    
            $datos->gradaPista = 'Pista B';    
            $datos->cantEntradas = $request->input('cantidad2');
            $datos->precio = $request->input('precioTotal2');
            $datos->idEntrada = $request->input('idEntrada2');
            $datos->save();

            $datos2 = PrecioPistaB::findOrFail(1);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad2');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad2');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(1);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad2');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad2');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado');
        }
    }

    
    public function compraEntradaConc1Grada1(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles3' => ['required'],
            'cantidad3' => ['required'],
            'precioTotal3' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Ed Sheeran';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Wizik Center';    
            $datos->gradaPista = 'Grada 1';    
            $datos->cantEntradas = $request->input('cantidad3');
            $datos->precio = $request->input('precioTotal3');
            $datos->idEntrada = $request->input('idEntrada3');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(1);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad3');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad3');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(1);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad3');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad3');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado');
        }
    }

    public function compraEntradaConc1Grada2(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles4' => ['required'],
            'cantidad4' => ['required'],
            'precioTotal4' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Ed Sheeran';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Wizik Center';    
            $datos->gradaPista = 'Grada 2';    
            $datos->cantEntradas = $request->input('cantidad4');
            $datos->precio = $request->input('precioTotal4');
            $datos->idEntrada = $request->input('idEntrada4');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(2);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad4');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad4');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(1);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad4');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad4');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado');
        }
    }

    public function compraEntradaConc1Grada3(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles5' => ['required'],
            'cantidad5' => ['required'],
            'precioTotal5' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Ed Sheeran';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Wizik Center';    
            $datos->gradaPista = 'Grada 3';    
            $datos->cantEntradas = $request->input('cantidad5');
            $datos->precio = $request->input('precioTotal5');
            $datos->idEntrada = $request->input('idEntrada5');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(3);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad5');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad5');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(1);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad5');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad5');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado');
        }
    }

    /*CONCIERTO 2*/
    public function compraEntradaConc2PistaA(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles1' => ['required'],
            'cantidad1' => ['required'],
            'precioTotal1' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Hard GZ';
            $datos->fecha = 'Martes, 30 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Palau Sant Jordi';    
            $datos->gradaPista = 'Pista A';    
            $datos->cantEntradas = $request->input('cantidad1');
            $datos->precio = $request->input('precioTotal1');
            $datos->idEntrada = $request->input('idEntrada1');
            $datos->save();

            $datos2 = PrecioPistaA::findOrFail(2);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad1');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad1');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(2);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad1');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad1');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado2');
        }
    }

    public function compraEntradaConc2PistaB(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles2' => ['required'],
            'cantidad2' => ['required'],
            'precioTotal2' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Hard GZ';
            $datos->fecha = 'Martes, 30 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Palau Sant Jordi';  
            $datos->gradaPista = 'Pista B';    
            $datos->cantEntradas = $request->input('cantidad2');
            $datos->precio = $request->input('precioTotal2');
            $datos->idEntrada = $request->input('idEntrada2');
            $datos->save();

            $datos2 = PrecioPistaB::findOrFail(2);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad2');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad2');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(2);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad2');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad2');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado2');
        }
    }

    
    public function compraEntradaConc2Grada1(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles3' => ['required'],
            'cantidad3' => ['required'],
            'precioTotal3' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Hard GZ';
            $datos->fecha = 'Martes, 30 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Palau Sant Jordi';    
            $datos->gradaPista = 'Grada 1';    
            $datos->cantEntradas = $request->input('cantidad3');
            $datos->precio = $request->input('precioTotal3');
            $datos->idEntrada = $request->input('idEntrada3');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(4);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad3');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad3');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(2);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad3');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad3');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado2');
        }
    }

    public function compraEntradaConc2Grada2(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles4' => ['required'],
            'cantidad4' => ['required'],
            'precioTotal4' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Hard GZ';
            $datos->fecha = 'Martes, 30 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Palau Sant Jordi';  
            $datos->gradaPista = 'Grada 2';    
            $datos->cantEntradas = $request->input('cantidad4');
            $datos->precio = $request->input('precioTotal4');
            $datos->idEntrada = $request->input('idEntrada4');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(5);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad4');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad4');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(2);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad4');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad4');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado2');
        }
    }

    public function compraEntradaConc2Grada3(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles5' => ['required'],
            'cantidad5' => ['required'],
            'precioTotal5' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Hard GZ';
            $datos->fecha = 'Martes, 30 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Palau Sant Jordi';     
            $datos->gradaPista = 'Grada 3';    
            $datos->cantEntradas = $request->input('cantidad5');
            $datos->precio = $request->input('precioTotal5');
            $datos->idEntrada = $request->input('idEntrada5');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(6);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad5');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad5');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(2);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad5');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad5');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado2');
        }
    }

    /*CONCIERTO 3*/
    public function compraEntradaConc3PistaA(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles1' => ['required'],
            'cantidad1' => ['required'],
            'precioTotal1' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'The 1975';
            $datos->fecha = 'Martes, 12 de Julio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Bilbao Arena';    
            $datos->gradaPista = 'Pista A';    
            $datos->cantEntradas = $request->input('cantidad1');
            $datos->precio = $request->input('precioTotal1');
            $datos->idEntrada = $request->input('idEntrada1');
            $datos->save();

            $datos2 = PrecioPistaA::findOrFail(3);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad1');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad1');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(3);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad1');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad1');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado3');
        }
    }

    public function compraEntradaConc3PistaB(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles2' => ['required'],
            'cantidad2' => ['required'],
            'precioTotal2' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'The 1975';
            $datos->fecha = 'Martes, 12 de Julio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Bilbao Arena';  
            $datos->gradaPista = 'Pista B';    
            $datos->cantEntradas = $request->input('cantidad2');
            $datos->precio = $request->input('precioTotal2');
            $datos->idEntrada = $request->input('idEntrada2');
            $datos->save();

            $datos2 = PrecioPistaB::findOrFail(3);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad2');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad2');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(3);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad2');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad2');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado3');
        }
    }

    
    public function compraEntradaConc3Grada1(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles3' => ['required'],
            'cantidad3' => ['required'],
            'precioTotal3' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'The 1975';
            $datos->fecha = 'Martes, 12 de Julio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Bilbao Arena';    
            $datos->gradaPista = 'Grada 1';    
            $datos->cantEntradas = $request->input('cantidad3');
            $datos->precio = $request->input('precioTotal3');
            $datos->idEntrada = $request->input('idEntrada3');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(7);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad3');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad3');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(3);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad3');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad3');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado3');
        }
    }

    public function compraEntradaConc3Grada2(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles4' => ['required'],
            'cantidad4' => ['required'],
            'precioTotal4' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'The 1975';
            $datos->fecha = 'Martes, 12 de Julio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Bilbao Arena';   
            $datos->gradaPista = 'Grada 2';    
            $datos->cantEntradas = $request->input('cantidad4');
            $datos->precio = $request->input('precioTotal4');
            $datos->idEntrada = $request->input('idEntrada4');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(8);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad4');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad4');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(3);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad4');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad4');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado3');
        }
    }

    public function compraEntradaConc3Grada3(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles5' => ['required'],
            'cantidad5' => ['required'],
            'precioTotal5' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'The 1975';
            $datos->fecha = 'Martes, 12 de Julio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Bilbao Arena';      
            $datos->gradaPista = 'Grada 3';    
            $datos->cantEntradas = $request->input('cantidad5');
            $datos->precio = $request->input('precioTotal5');
            $datos->idEntrada = $request->input('idEntrada5');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(9);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad5');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad5');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(3);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad5');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad5');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado3');
        }
    }

    /*CONCIERTO 4*/
    public function compraEntradaConc4PistaA(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles1' => ['required'],
            'cantidad1' => ['required'],
            'precioTotal1' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Bad Bunny';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Estadio de la Cartuja';    
            $datos->gradaPista = 'Pista A';    
            $datos->cantEntradas = $request->input('cantidad1');
            $datos->precio = $request->input('precioTotal1');
            $datos->idEntrada = $request->input('idEntrada1');
            $datos->save();

            $datos2 = PrecioPistaA::findOrFail(4);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad1');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad1');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(4);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad1');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad1');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado4');
        }
    }

    public function compraEntradaConc4PistaB(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles2' => ['required'],
            'cantidad2' => ['required'],
            'precioTotal2' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Bad Bunny';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Estadio de la Cartuja'; 
            $datos->gradaPista = 'Pista B';    
            $datos->cantEntradas = $request->input('cantidad2');
            $datos->precio = $request->input('precioTotal2');
            $datos->idEntrada = $request->input('idEntrada2');
            $datos->save();

            $datos2 = PrecioPistaB::findOrFail(4);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad2');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad2');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(4);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad2');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad2');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado4');
        }
    }

    
    public function compraEntradaConc4Grada1(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles3' => ['required'],
            'cantidad3' => ['required'],
            'precioTotal3' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Bad Bunny';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Estadio de la Cartuja';    
            $datos->gradaPista = 'Grada 1';    
            $datos->cantEntradas = $request->input('cantidad3');
            $datos->precio = $request->input('precioTotal3');
            $datos->idEntrada = $request->input('idEntrada3');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(10);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad3');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad3');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(4);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad3');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad3');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado4');
        }
    }

    public function compraEntradaConc4Grada2(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles4' => ['required'],
            'cantidad4' => ['required'],
            'precioTotal4' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Bad Bunny';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Estadio de la Cartuja';   
            $datos->gradaPista = 'Grada 2';    
            $datos->cantEntradas = $request->input('cantidad4');
            $datos->precio = $request->input('precioTotal4');
            $datos->idEntrada = $request->input('idEntrada4');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(11);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad4');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad4');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(4);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad4');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad4');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado4');
        }
    }

    public function compraEntradaConc4Grada3(Request $request){
        $validator = Validator::make($request->all(),[
            'entradasDisponibles5' => ['required'],
            'cantidad5' => ['required'],
            'precioTotal5' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasConciertos();
            $datos->idUsuario = Auth::user()->usuario;
            $datos->artista = 'Bad Bunny';
            $datos->fecha = 'Martes, 16 de Junio 2020';
            $datos->hora = '21:00';
            $datos->lugar = 'Estadio de la Cartuja';      
            $datos->gradaPista = 'Grada 3';    
            $datos->cantEntradas = $request->input('cantidad5');
            $datos->precio = $request->input('precioTotal5');
            $datos->idEntrada = $request->input('idEntrada5');
            $datos->save();

            $datos2 = PrecioGradas::findOrFail(12);
            $datos2->entradasDisponibles = $datos2->entradasDisponibles - $request->input('cantidad5');
            $datos2->entradasCompradas = $datos2->entradasCompradas + $request->input('cantidad5');
            $datos2->update();

            $datos3 = ConciertosDisponibles::findOrFail(4);
            $datos3->entradasDisponibles = $datos3->entradasDisponibles - $request->input('cantidad5');
            $datos3->entradasCompradas = $datos3->entradasCompradas + $request->input('cantidad5');
            $datos3->update();

            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraConcierto($datos));

            return redirect()->to('ponerAgotado4');
        }
    }


}
