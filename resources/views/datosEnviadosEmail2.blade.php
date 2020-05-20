<center>          

    <div style="background-color:rgb(177, 223, 252); border-top: 6px solid #368BC1; height: 62vh;">
        <div style="background-color: rgb(255, 255, 255); width: 50%; heigh: 20%; margin-top: 5vh; padding-bottom: 2vh;">
            <h1 style="background-color: rgb(127, 198, 241); color: rgb(99, 99, 99)">CONFIRMACION DEL PEDIDO</h1>
            <br>
            <p style="color: grey; margin-left: 5%;">Hola <b>{{Auth::user()->usuario}},<b></p>
            <p style="color: grey; margin-left: 5%;">¡Muchas gracias por realizar tu pedido nº{{$datos->idEntrada}} en <b>HEAVN</b>!<p>
            <p style="color: grey; margin-left: 5%;">Recibiras otro email en cuanto tu pedido esté listo para notificarte el envio.</p>
            <p style="color: grey; margin-left: 5%;">A continuación, verás los datos de tu pedido.</p> 
        </div>
    
        <br>
    
        <div style="background-color: rgb(255, 255, 255); width: 50%; heigh: 20%; padding-bottom: 1vh;">
            <h1 style="background-color: rgb(127, 198, 241); color: rgb(99, 99, 99)">DATOS DEL PEDIDO</h1>
            <ul>
                <li style="color: grey">Usuario: {{$datos->idUsuario}}</li>
                <li style="color: grey">Artista: {{$datos->artista}}</li>
                <li style="color: grey">Fecha: {{$datos->fecha}}</li>
                <li style="color: grey">Hora: {{$datos->hora}}</li>
                <li style="color: grey">Lugar: {{$datos->lugar}}</li>
                <li style="color: grey">Grada/Pista: {{$datos->gradaPista}}</li>
                <li style="color: grey">Cantidad Entradas: {{$datos->cantEntradas}}</li>
                <li style="color: grey">Precio: {{$datos->precio}}</li>

            </ul>
        </div>
    <div>
    </center>