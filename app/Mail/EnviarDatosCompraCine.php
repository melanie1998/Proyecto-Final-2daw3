<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarDatosCompraCine extends Mailable
{
    use Queueable, SerializesModels;

      //declaramos los datos
      public $datos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        $this->datos=$datos;
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('melaniemiguel16@gmail.com')->subject('DATOS DE COMPRA')->markdown('datosEnviadosEmail')->with('datos', $this->datos);
    }
}
