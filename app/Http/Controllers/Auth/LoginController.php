<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;



    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only('email', 'password');
    }

        /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ],[
            
            'email.required' => 'es obligatorio',
            'password.required' => 'es obligatorio',

        ]);
    }



    protected function authenticated(Request $request, $user)
    {
    
        return redirect()->to('test');           
          
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
  * Redirect the user to the Google authentication page.
  *
  * @return \Illuminate\Http\Response
  */
public function redirectToProvider()
{
    return Socialite::driver('google')->redirect();
}

/**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/registrologin');
        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
  
            return redirect()->route('registrologin')->with('warning', 'Este email ya está registrado.');
        } else {
            // create a new user
            $newUser                     = new User;
            $newUser->usuario            = $user->name;
            $newUser->nombreApellido     = $user->name;
            $newUser->email              = $user->email;
            $newUser->telefono           = "";
            $newUser->direccion          = "";
            $newUser->fotoPerfil         = "iconopersona.png";
            $newUser->password           = "";
            $newUser->google_id          = $user->id;
            $newUser->contadorSesion     = 0;
            $newUser->save();
            auth()->login($newUser, true);
        }
        
  
        return redirect()->to('test');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('registrologin');
      }
}
