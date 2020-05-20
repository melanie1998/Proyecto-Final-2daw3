<?php

namespace App\Http\Controllers;
use Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Opinion;
use Auth;
use Hash;
use App\Mail\EnviarEnlaceReseteo;
use Illuminate\Support\Facades\Mail;
use Str;

class ControladorUsuario extends Controller
{
     
    public function registrarse(Request $request){
        $validator = Validator::make($request->all(),[
            'usuario' => ['required', 'string', 'max:10', 'unique:users'],
            'nombre' => ['required', 'string', 'max:255'],
            'emailRegis' => ['required', 'string', 'email', 'max:255', 'unique:users,email,$this->id,id'],
            'direccion' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'integer'],
            'password1' => ['required', 'string', 'min:8'],
            'editarPerfil' => ['max:1'],


        ],[

            'string' => 'El/La :attribute no es string.',
            'integer' => 'El/La :attribute no es integer.',
            'telefono.integer' => 'El/La :attribute no es integer.',
            'email' => 'no válido.',
            'unique' => 'Este usuario ya existe.',
            'max' => 'El/la :attribute debe de ser de maximo 255 caracteres.',
            'min' => 'La :attribute debe de tener minimo 8.',

        ]);

        if ($validator->fails()) {
             $datos = "display: block;";
             $displayBlock =  "display: block;";
             return redirect()->back()
             ->with(['datos' => $datos, 'displayBlock'=> $displayBlock])
             ->withErrors($validator)
             ->withInput();

        }else{
            $datos = new User();
            $datos->usuario = $request->input('usuario');
            $datos->nombreApellido = $request->input('nombre');
            $datos->email = $request->input('emailRegis');
            $datos->telefono = $request->input('telefono');
            $datos->direccion = $request->input('direccion');
            $datos->password = (Hash::make($request->input('password1')));
            if($request->input('fotoPerfil') == "")
            {
                $datos->fotoPerfil = 'iconopersona.png'; 
            }else{
                $datos->fotoPerfil =$request->input('fotoPerfil');
            }

            $datos->save();
            return redirect()->route('registrologin')->with('success', 'REGISTRADO CORRECTAMENTE');
        }

    }

    public function pasarDatos($value){
        $datos = User::findOrFail($value);
        $datos = User::select('id', 'usuario','nombreApellido', 'email', 'telefono', 'direccion', 'password', 'fotoPerfil')->where('id', $value)->get();
        return view('editarPerfil', ['datos' => $datos]);
    }

    public function update(Request $request, $id){
        $datos = User::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'usuario' => ['required', 'string', 'max:10'],
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'integer'],

        ],[

            'required' => 'El/La :attribute es obligatorio.',
            'string' => 'El/La :attribute no es string.',
            'max' => 'El/la :attribute debe de ser de maximo 255 caracteres.',
            'integer' => 'El/La :attribute no es integer.',
            'telefono.integer' => 'El/La :attribute no es integer.',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->with('datos', $datos)
            ->withErrors($validator)
            ->withInput();                     
        }else{   
            $datos = User::findOrFail($id);
            $datos->usuario = $request->input('usuario');
            $datos->nombreApellido = $request->input('nombre');
            $datos->email = $request->input('email');
            $datos->telefono = $request->input('telefono');
            $datos->direccion = $request->input('direccion');
            if($request->input('password') == "")
            {
                //se queda la que está

            }else{
                $datos->password =(Hash::make($request->input('password')));
            }
            
            if($request->input('fotoPerfil') == "")
            {
                $datos->fotoPerfil = Auth::user()->fotoPerfil; 
            }else{
                $datos->fotoPerfil =$request->input('fotoPerfil');
            }
            $datos->update();
            return redirect()->route('home');
        
        }
    }


    public function insertaropnion(Request $request){
        $validator = Validator::make($request->all(),[
            'nombreUsuario' => 'required',
            'email' => 'required',
            'opinion' => 'required|max:200',
            'valoracion' => 'required|integer|between:1,5',

            
            ],[

            'required' => 'El/La :attribute es obligatorio.',
            'opinion.max' => 'Máximo 200 palabras',
            'between' => 'La valoracion tiene ser de una a cinco estrellas.',

            ]);

            if ($validator->fails()) {
                return redirect('/sobreheavn#opinion')
                ->withErrors($validator)
                ->withInput();                
            }else{
            $datos = new Opinion();
            $datos->nombreUsuario = Auth::user()->usuario;
            $datos->email = Auth::user()->email;
            $datos->opinion = $request->input('opinion');
            $datos->valoracion = $request->input('valoracion');
            $datos->save();
            return redirect('/sobreheavn#opinion')->with('success', 'Opinion correctamente enviada');

            }
        }

             
    public function contadorSesion(){ 
        if(Auth::check() && Auth::user()->contadorSesion == 0){
            $id = Auth::user()->id;
            $datos = User::findOrFail($id);
            $suma = $datos->contadorSesion;
            $suma  = $suma + 1;
            $datos->contadorSesion = $suma;
            $datos->update();
            return redirect()->to('mostrarTest');

        }else if (Auth::user()->contadorSesion == 1){
            return redirect()->to('home');
        }
        
    }
    
    public function verOpiniones(){
        $datos = Opinion::select('id','nombreUsuario', 'email', 'opinion', 'valoracion')->get();
        return  $datos;
    }


    public function resetearContrasena(Request $request){
        $datos = User::select('email')->get();
            if(is_object($datos) || is_array($datos)){
                foreach($datos as $datos){

                    if($request->input('emailReseteo') === $datos->email){
                        $random = Str::random(60);
                        $id = User::select('id')->where('email', $request->input('emailReseteo'))->get();
                        $guardarId = 0;
                        foreach($id as $id){
                            $guardarId = $id->id;
                
                        }
                        $buscar = User::find($guardarId);
                        $buscar->passwordToken = $random;
                        $buscar->update();
                        $usuario = User::select('usuario')->where('email', $request->input('emailReseteo'))->get();
                        $guardarUsuario = '';
                        foreach($usuario as $usuario){
                            $guardarUsuario = $usuario->usuario;

                        }
                        Mail::to($request->input('emailReseteo'))->send(new EnviarEnlaceReseteo($request->input('emailReseteo'), $random, $guardarUsuario));
                        return redirect()->to('registrologin')->with('success', 'EMAIL ENVIADO CORRECTAMENTE');
                    
                    }
                }
            }

            $datosA = User::select('email')->get();
            if(is_object($datosA) || is_array($datosA)){
                foreach($datosA as $datosA){

                    if($request->input('emailReseteo') != $datosA->email){
                        $mensaje = 'Este email no esta registrado.';
                        $displayBlock = "display: block;";
                        return redirect()->to('registrologin')->with(['mensaje' => $mensaje, 'displayBlock2' => $displayBlock]);
                    
                    }
                }
            }
      
            

       
           
        
    }


    public function nuevaContrasena($email, $random){
        $datos = User::select('passwordToken')->where('email', $email)->get();
            $guardarRandom= "";
            foreach($datos as $datos){
                $guardarRandom = $datos->passwordToken;
    
            }

        if($guardarRandom == $random){
            return view('nuevaContrasena')->with('email', $email);
        }
    }

    public function cambiarContrasena(Request $request, $email){
        $validator = Validator::make($request->all(),[
            'nuevaContraseña' => 'required|string|min:8',
 
            ],[

            'required' => 'El/La :attribute es obligatorio.',
            'string' => 'El/La :attribute no es string.',
            'min' => 'La :attribute debe de tener minimo 8.',

            ]);

            if($request->input('nuevaContraseña') != $request->input('confirmarContraseña')){
                $mensaje = 'Las contraseñas no coinciden';
                $displayBlock = "display: block;";
                return redirect()->back()->with(['mensaje' => $mensaje, 'displayBlock' => $displayBlock]);
            }

            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();                
            }else{
                $datos = User::select('id')->where('email', $email)->get();
                $guardarId= "";
                foreach($datos as $datos){
                    $guardarId = $datos->id;
        
                }
                $buscar = User::find($guardarId);
                $buscar->password = (Hash::make($request->input('nuevaContraseña')));
                $buscar->update();
                return redirect()->route('registrologin')->with('success', 'La contraseña se ha modificado.');

            }
    }
}