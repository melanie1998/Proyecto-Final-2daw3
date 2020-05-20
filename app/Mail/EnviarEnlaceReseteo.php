<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarEnlaceReseteo extends Mailable
{ 
    use Queueable, SerializesModels;

     //declaramos los datos
     public $datos;
     public $random;
     public $usuario;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($datos, $random, $usuario)
  {
      $this->datos=$datos;
      $this->random=$random;
      $this->usuario=$usuario;
  }


  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
      return $this->from('heavnteam@gmail.com')->subject('Enlace para resetear contraseña')->markdown('enlaceReseteo')->with('datos', $this->datos, 'random' ,$this->random, 'usuario', $this->usuario);
  }
}
