<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;
use Hash;

class ControladorUsuario extends Controller
{
     
     public function registrarse(Request $request){

        $validator = Validator::make($request->all(),[

            'nombreUsuario' => ['required', 'string', 'max:10', 'unique:users'],
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'direccion' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'integer'],
            'password' => ['required', 'string', 'min:8'],
    

        ],[

        'required' => 'El/La :attribute es obligatorio.',
        'string' => 'El/La :attribute no es string.',
        'integer' => 'El/La :attribute no es integer.',
        'telefono.integer' => 'El/La :attribute no es integer.',

        ]);

        if ($validator->fails()) {
             $datos = "display: block;";
             return redirect()->back()
             ->with('datos', $datos)
             ->withErrors($validator)
             ->withInput();
                        
        }else{
         
            $datos = new User();
            $datos->NombreUsuario = $request->input('nombreUsuario');
            $datos->nombreApellido = $request->input('nombre');
            $datos->email = $request->input('email');
            $datos->telefono = $request->input('telefono');
            $datos->direccion = $request->input('direccion');
            $datos->password = (Hash::make($request->input('password')));

            $datos->save();
            return redirect()->route('registrologin')->with('success', 'REGISTRADO CORRECTAMENTE');
        
        }
        
    }

}