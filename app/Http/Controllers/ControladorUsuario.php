<?php

namespace App\Http\Controllers;
use Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Opinion;
use Auth;
use Hash;

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

        ]);

        if ($validator->fails()) {
             $datos = "display: block;";
             return redirect()->back()
             ->with('datos', $datos)
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
            'opinion' => ['required','max:200'],
            'valoracion' => ['required'],
            
            ],[

            'required' => 'El/La :attribute es obligatorio.',
            'opinion.max' => 'Máximo 200 palabras',

            ]);

            if ($validator->fails()) {
                return redirect('/sobreheavn#opinion')
                ->withErrors($validator)
                ->withInput();                
            }else{
            $datos = new Opinion();
            $datos->nombreUsuario = $request->input('nombreUsuario');
            $datos->email = $request->input('email');
            $datos->opinion = $request->input('opinion');
            $datos->valoracion = $request->input('valoracion');
            $datos->save();
            return redirect()->to('home');

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

}