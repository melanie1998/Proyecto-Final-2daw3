<table border="1px" style="text-align:center;">
                           

    <tr>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Usuario</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Nombre y Apellido</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Pelicula</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Dia</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Hora</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Cantidad de entradas compradas</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Numero de butaca/s</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Fila/s</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Precio</th>

    </tr>
    <tr>

        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->idUsuario}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{Auth::user()->nombreApellido}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->tituloPelicula}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->dia}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->hora}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->numEntradas}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->numButaca}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->fila}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->precio}}</td>
    </tr>


</table>