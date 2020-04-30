<table border="1px" style="text-align:center;">
                           

    <tr>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Usuario</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Artista</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Fecha</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Hora</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Lugar</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Grada/Pista</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Cantidad Entradas</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">Precio</th>
        <th style="background-color:orangered; padding:5px 5px 5px 5px;">idEntrada</th>

    </tr>
    <tr>

        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->idUsuario}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->artista}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->fecha}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->hora}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->lugar}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->gradaPista}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->cantEntradas}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->precio}}</td>
        <td style="background-color:white; padding:5px 5px 5px 5px; width:5%;">{{$datos->idEntrada}}</td>
    </tr>


</table>