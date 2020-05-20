<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de peliculas</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<style>

    :root {
        --azul: rgb(0, 140, 200);
        --fondo: #141414;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }

    body{
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

     /* MENUTXOA */

     .menus{
        font-family: 'Bree Serif', serif;
    }

    .menu{
        position: fixed;
        background-color: #ccc;
        margin-top: 0vh;
        width: 5%;
        height: 100vh;
        overflow-x: hidden;
        z-index: 5;
        box-shadow: inset 0px 1px 50px #555;
    }

    .opcionesmenu{
        margin-top: 4.5vh;
    }

    .menu a{
        display: block;
        margin-top: 15%;
        padding: 0% 0% 20% 0%;
        text-decoration: none;
        color: #222;
        text-align: center;
    }

    .menu .logo{
        margin: 30% 0% 30% 0%;
        padding: 20% 0% 20% 0%;
    }

    .icono{
        font-size: 2.8em;
    }

    /* MENU2 */
    .menu2{
        position: fixed;
        background-color: #ccc;
        margin-top: 0vh;
        width: 11%;
        height: 100vh;
        overflow-x: hidden;
        z-index: 5;
        box-shadow: inset 0px 1px 100px #555;
        
    }
    
    .logo2{
        margin-top: -7vh;
    }

    .menu2 a{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin: 0% 0% 0% 10%;
        padding: 8% 0% 8% 0%;
        text-decoration: none;
        color: #222;
        text-align: center;
        font-family: 'Bree Serif', serif;
    }

    .menu2 a:hover{
        background-color: #777;
        margin: 0;
        padding-left: 15%;
        box-shadow: inset 0px 0px 20px 1px rgba(10,10,10,0.75);
    }

    .menu2 .material-icons{
        margin-right: 10%;
    }

    .menu2 a .active:hover {
        background-color: #222;
        color: #ccc;
    }

    .menu2 img{
        margin-top: 20px;
        padding: 20% 0% 5% 0%;
    }
    
    a{
        text-decoration: none;
    }

    .peliculas{
        position: absolute;
        background-color: #c9c9c9;
        width: 50vw;
        height: 100vh;
        cursor: pointer;
    }

    .peliculas h2{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 46%;
        font-size: 4em;
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000;
        color: white;
    }

    .series{
        position: absolute;
        left: 50%;
        background-color: #222;
        width: 50vw;
        height: 100vh;
        cursor: pointer;
    }

    .series h2{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 46%;
        font-size: 4em;
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000;
        color: white;

    }

    .contenedor {
        width: 90%;
        margin: auto;
    }

    .peliculas2{
        position: absolute;
        background: #c9c9c9;
        font-family: 'Open Sans', sans-serif;
        z-index: 3;
        width: 100%;
    }

    header {
        padding: 30px 0;
    }

    header .contenedor {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header .logotipo {
        font-family: 'Bebas Neue', cursive;
        font-weight: bold;
        letter-spacing: 0.8em;
        color: var(--azul);
        font-size: 60px;
    }

    #menu1 a {
        color: #222;
        text-decoration: none;
        margin-right: 20px;
    }

    #menu1 a:hover,
    #menu1 a.activo {
        color: #000;
    }

    #menu2 a {
        color: #aaa;
        text-decoration: none;
        margin-right: 20px;
    }

    #menu2 a:hover,
    #menu2 a.activo {
        color: #fff;
    }

    /* ---- ----- ----- Pelicula Principal ----- ----- ----- */
    .pelicula-principal {
        font-size: 16px;
        min-height: 40.62em;
        color: #fff;
        background: linear-gradient(rgba(0, 0, 0, .50) 0%, rgba(0,0,0,.50) 100%), url("Imagenes/elhoyo.png");
        background-position: center center;
        background-size: cover;
        margin-bottom: 3.12em;
        display: flex;
        align-items: end;
    }

    .pelicula-principal .contenedor {
        margin: 0 auto;
        margin-bottom: 6.25em;
    }

    .pelicula-principal .titulo {
        margin-top: 10vh;
        font-weight: 600;
        font-size: 3.12em;
        margin-bottom: 0.4em;
    }

    .pelicula-principal .descripcion {
        font-weight: normal;
        font-size: 1em;
        line-height: 1.75em;
        max-width: 50%;
        margin-bottom: 1.25em;
    }

    .pelicula-principal .boton {
        background: rgba(255,255,255,0.7);
        border: none;
        border-radius: 0.31em;
        padding: 0.93em 1.87em;
        color: #000;
        margin-top: 22vh;
        margin-right: 1.25em;
        cursor: pointer;
        transition: .3s ease all;
        font-size: 1.12em;
    }

    .pelicula-principal .boton:hover {
        background: #000;
        color: #fff;
    }

    .pelicula-principal .boton i {
        margin-right: 1.25em;
    }

    .series2{
        position: absolute;
        background: var(--fondo);
        font-family: 'Open Sans', sans-serif;
        z-index: 3;
        width: 100%;
    }

    .pelicula-principal2 {
        font-size: 16px;
        min-height: 40.62em;
        color: #fff;
        background: linear-gradient(rgba(0, 0, 0, .50) 0%, rgba(0,0,0,.50) 100%), url("Imagenes/lacasadepapel.jpg");
        background-position: center center;
        background-size: cover;
        margin-bottom: 3.12em;
        display: flex;
        align-items: end;
    }

    .pelicula-principal2 .contenedor {
        margin: 0 auto;
        margin-bottom: 6.25em;
    }

    .pelicula-principal2 .titulo {
        margin-top: 10vh;
        font-weight: 600;
        font-size: 3.12em;
        margin-bottom: 0.4em;
    }

    .pelicula-principal2 .descripcion {
        font-weight: normal;
        font-size: 1em;
        line-height: 1.75em;
        max-width: 50%;
        margin-bottom: 1.25em;
    }

    .pelicula-principal2 .boton {
        background: rgba(255,255,255,0.7);
        border: none;
        border-radius: 0.31em;
        padding: 0.93em 1.87em;
        color: #000;
        margin-top: 22vh;
        margin-right: 1.25em;
        cursor: pointer;
        transition: .3s ease all;
        font-size: 1.12em;
    }

    .pelicula-principal2 .boton:hover {
        background: #000;
        color: #fff;
    }

    .pelicula-principal2 .boton i {
        margin-right: 1.25em;
    }

    /* ---- ----- ----- Contenedor Titulo y Controles ----- ----- ----- */
    .contenedor-titulo-controles {
        display: flex;
        justify-content: space-between;
        align-items: end;
    }

    #titulo1 {
        color: #000;
        font-size: 30px;
    }

    #titulo2{
        color: #fff;
        font-size: 30px;
    }

    /* ---- ----- ----- Contenedor Principal y Flechas ----- ----- ----- */
    .peliculas-recomendadas {
        margin-bottom: 70px;
    }

    .peliculas-recomendadas .contenedor-principal {
        display: flex;
        align-items: center;
        position: relative;
    }

    .peliculas-recomendadas .contenedor-principal .flecha-izquierda,
    .peliculas-recomendadas .contenedor-principal .flecha-derecha {
        position: absolute;
        border: none;
        background: rgba(0,0,0,0.3);
        font-size: 40px;
        height: 50%;
        top: calc(50% - 25%);
        line-height: 40px;
        width: 50px;
        color: #fff;
        cursor: pointer;
        z-index: 10;
        transition: .2s ease all;
    }

    .peliculas-recomendadas .contenedor-principal .flecha-izquierda:hover,
    .peliculas-recomendadas .contenedor-principal .flecha-derecha:hover {
        background: rgba(0,0,0, .9);
    }

    .peliculas-recomendadas .contenedor-principal .flecha-izquierda {
        left: 0;
    }

    .peliculas-recomendadas .contenedor-principal .flecha-derecha {
        right: 0;
    }

    /* ---- ----- ----- Carousel ----- ----- ----- */
    .peliculas-recomendadas .contenedor-carousel {
        width: 100%;
        padding: 20px 0;
        overflow: hidden;
        scroll-behavior: smooth;
    }

    .peliculas-recomendadas .contenedor-carousel .carousel {
        display: flex;
        flex-wrap: nowrap;
    }

    .peliculas-recomendadas .contenedor-carousel .carousel .pelicula {
        min-width: 20%;
        transition: .3s ease all;
        box-shadow: 5px 5px 10px rgba(0,0,0, .3);
    }

    .peliculas-recomendadas .contenedor-carousel .carousel .pelicula.hover {
        transform: scale(1.2);
        transform-origin: center;
    }

    .peliculas-recomendadas .contenedor-carousel .carousel .pelicula img {
        width: 100%;
        vertical-align: top;
    }

    .contenedor-titulo-controles .indicadores button {
        background: #000;
        height: 3px;
        width: 10px;
        cursor: pointer;
        border: none;
        margin-right: 2px;
    }

    .contenedor-titulo-controles .indicadores button:hover,
    .contenedor-titulo-controles .indicadores button.activo {
        background: rgb(0, 140, 200);
    }

    /* ---- ----- ----- Carousel2 ----- ----- ----- */
    .peliculas-recomendadas .contenedor-carousel2 {
        width: 100%;
        padding: 20px 0;
        overflow: hidden;
        scroll-behavior: smooth;
    }

    .peliculas-recomendadas .contenedor-carousel2 .carousel {
        display: flex;
        flex-wrap: nowrap;
    }

    .peliculas-recomendadas .contenedor-carousel2 .carousel .pelicula2 {
        min-width: 20%;
        transition: .3s ease all;
        box-shadow: 5px 5px 10px rgba(0,0,0, .3);
    }

    .peliculas-recomendadas .contenedor-carousel2 .carousel .pelicula2.hover {
        transform: scale(1.2);
        transform-origin: center;
    }

    .peliculas-recomendadas .contenedor-carousel2 .carousel .pelicula2 img {
        width: 100%;
        vertical-align: top;
    }

    .contenedor-titulo-controles .indicadores2 button {
        background: #fff;
        height: 3px;
        width: 10px;
        cursor: pointer;
        border: none;
        margin-right: 2px;
    }

    .contenedor-titulo-controles .indicadores2 button:hover,
    .contenedor-titulo-controles .indicadores2 button.activo {
        background: rgb(0, 140, 200);
    }

    /* ---- ----- ----- Carousel3 ----- ----- ----- */
    .peliculas-recomendadas .contenedor-carousel3 {
        width: 100%;
        padding: 20px 0;
        overflow: hidden;
        scroll-behavior: smooth;
    }

    .peliculas-recomendadas .contenedor-carousel3 .carousel {
        display: flex;
        flex-wrap: nowrap;
    }

    .peliculas-recomendadas .contenedor-carousel3 .carousel .pelicula3 {
        min-width: 20%;
        transition: .3s ease all;
        box-shadow: 5px 5px 10px rgba(0,0,0, .3);
    }

    .peliculas-recomendadas .contenedor-carousel3 .carousel .pelicula3.hover {
        transform: scale(1.2);
        transform-origin: center;
    }

    .peliculas-recomendadas .contenedor-carousel3 .carousel .pelicula3 img {
        width: 100%;
        vertical-align: top;
    }

    .contenedor-titulo-controles .indicadores3 button {
        background: #fff;
        height: 3px;
        width: 10px;
        cursor: pointer;
        border: none;
        margin-right: 2px;
    }

    .contenedor-titulo-controles .indicadores3 button:hover,
    .contenedor-titulo-controles .indicadores3 button.activo {
        background: rgb(0, 140, 200);
    }

    /* ---- ----- ----- Carousel4 ----- ----- ----- */
    .peliculas-recomendadas .contenedor-carousel4 {
        width: 100%;
        padding: 20px 0;
        overflow: hidden;
        scroll-behavior: smooth;
    }

    .peliculas-recomendadas .contenedor-carousel4 .carousel {
        display: flex;
        flex-wrap: nowrap;
    }

    .peliculas-recomendadas .contenedor-carousel4 .carousel .pelicula4 {
        min-width: 20%;
        transition: .3s ease all;
        box-shadow: 5px 5px 10px rgba(0,0,0, .3);
    }

    .peliculas-recomendadas .contenedor-carousel4 .carousel .pelicula4.hover {
        transform: scale(1.2);
        transform-origin: center;
    }

    .peliculas-recomendadas .contenedor-carousel4 .carousel .pelicula4 img {
        width: 100%;
        vertical-align: top;
    }

    .contenedor-titulo-controles .indicadores4 button {
        background: #000;
        height: 3px;
        width: 10px;
        cursor: pointer;
        border: none;
        margin-right: 2px;
    }

    .contenedor-titulo-controles .indicadores4 button:hover,
    .contenedor-titulo-controles .indicadores4 button.activo {
        background: rgb(0, 140, 200);
    }

     /* ---- ----- ----- Carousel5 ----- ----- ----- */
     .peliculas-recomendadas .contenedor-carousel5 {
        width: 100%;
        padding: 20px 0;
        overflow: hidden;
        scroll-behavior: smooth;
    }

    .peliculas-recomendadas .contenedor-carousel5 .carousel {
        display: flex;
        flex-wrap: nowrap;
    }

    .peliculas-recomendadas .contenedor-carousel5 .carousel .pelicula5 {
        min-width: 20%;
        transition: .3s ease all;
        box-shadow: 5px 5px 10px rgba(0,0,0, .3);
    }

    .peliculas-recomendadas .contenedor-carousel5 .carousel .pelicula5.hover {
        transform: scale(1.2);
        transform-origin: center;
    }

    .peliculas-recomendadas .contenedor-carousel5 .carousel .pelicula5 img {
        width: 100%;
        vertical-align: top;
    }

    .contenedor-titulo-controles .indicadores5 button {
        background: #fff;
        height: 3px;
        width: 10px;
        cursor: pointer;
        border: none;
        margin-right: 2px;
    }

    .contenedor-titulo-controles .indicadores5 button:hover,
    .contenedor-titulo-controles .indicadores5 button.activo {
        background: rgb(0, 140, 200);
    }

     /* ---- ----- ----- Carousel6 ----- ----- ----- */
     .peliculas-recomendadas .contenedor-carousel6 {
        width: 100%;
        padding: 20px 0;
        overflow: hidden;
        scroll-behavior: smooth;
    }

    .peliculas-recomendadas .contenedor-carousel6 .carousel {
        display: flex;
        flex-wrap: nowrap;
    }

    .peliculas-recomendadas .contenedor-carousel6 .carousel .pelicula6 {
        min-width: 20%;
        transition: .3s ease all;
        box-shadow: 5px 5px 10px rgba(0,0,0, .3);
    }

    .peliculas-recomendadas .contenedor-carousel6 .carousel .pelicula6.hover {
        transform: scale(1.2);
        transform-origin: center;
    }

    .peliculas-recomendadas .contenedor-carousel6 .carousel .pelicula6 img {
        width: 100%;
        vertical-align: top;
    }

    .contenedor-titulo-controles .indicadores6 button {
        background: #fff;
        height: 3px;
        width: 10px;
        cursor: pointer;
        border: none;
        margin-right: 2px;
    }

    .contenedor-titulo-controles .indicadores6 button:hover,
    .contenedor-titulo-controles .indicadores6 button.activo {
        background: rgb(0, 140, 200);
    }

    /* Botones Carousel */
    .botoncarousel {
        display: none;
        position: relative;
        background: rgba(255,255,255,0.5);
        border: none;
        border-radius: 0.31em;
        padding: 0.1em;
        color: #000;
        margin-top: -4.5vh;
        margin-left: 5vw;
        float: left;
        cursor: pointer;
        transition: .3s ease all;
        font-size: 1em;
        transform: scale(2);
    }

    .botoncarousel:hover {
        background: rgba(0,0,0,0.5);
        color: #fff;
    }

    .botoncarousel2 {
        display: none;
        position: relative;
        background: rgba(255,255,255,0.5);
        border: none;
        border-radius: 0.31em;
        padding: 0.1em;
        color: #000;
        margin-top: -4.5vh;
        margin-right: 5vw;
        float: right;
        cursor: pointer;
        transition: .3s ease all;
        font-size: 1em;
        transform: scale(2);

    }

    .botoncarousel2:hover {
        background: rgba(0,0,0,0.5);
        color: #fff;
    }


    .botoncarousel3 {
        display: none;
        position: relative;
        background: rgba(255,255,255,0.5);
        border: none;
        border-radius: 0.31em;
        padding: 0.1em;
        color: #000;
        margin-top: -18.5vh;
        margin-right: 5vw;
        float: right;
        cursor: pointer;
        transition: .3s ease all;
        font-size: 1em;
        transform: scale(2);

    }

    .botoncarousel3:hover {
        background: rgba(0,0,0,0.5);
        color: #fff;
    }


    ::-webkit-scrollbar{
    width: 12px;
    }

    ::-webkit-scrollbar-thumb{
    background-color: rgb(0, 140, 200); 
    }

    ::-webkit-scrollbar-track{
    background-color: #222; 
    }

    #trailer{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 3;
        background: rgba(0,0,0,0.95);
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        opacity: 0;
    }

    #trailer.active{
        visibility: visible;
        opacity: 1;
    }

    #trailer video{
        max-width: 1500px;
        outline: close;
    }

    #trailer .close{
        position: absolute;
        top: 30px;
        right: 30px;
        cursor: pointer;
        filter: invert(1);
        max-width: 32px;
    }

    /*BOTON MAS INFO*/
    .masinfo{
        position: fixed;
        top: 0%;
        left: 0%;
        background:rgba(0, 0, 0, .82);
        color: #c9c9c9;
        width: 100%;
        height: 100vh;
        z-index: 3;
        visibility: hidden;
        opacity: 0;
    }

    .masinfo.active{
        visibility: visible;
        opacity: 1;
    }

    .masinfo .close{
        position: absolute;
        top: 30px;
        right: 30px;
        cursor: pointer;
        filter: invert(1);
        max-width: 32px;
    }

    .masinfo .contenido{
        margin: auto;
        width: 80%;
        height: 72vh;
        background:rgba(0, 0, 0, .85);
        border: 2px solid #c9c9c9;
        border-radius: 10px;
        margin-top: 16vh;
        font-family: Arial, Helvetica, sans-serif;
    }

    .masinfo .titulo{
        margin: 5%;
        margin-top: 8%;
        color: #c9c9c9;
        font-size: 2em;
    }

    .masinfo .sinopsis{
        margin: 5%;
        color: #c9c9c9;
        font-size: 1.3em;
    }

    .masinfo .anio{
        margin: 5%;
        color: #c9c9c9;
        font-size: 1.3em;
    }

    .masinfo .duracion{
        margin: 5%;
        color: #c9c9c9;
        font-size: 1.3em;
    }


</style>
<script>
    
    $(document).ready(function(){
        $(".peliculas").click(function(){
                $(".peliculas").animate({width: '100vw'}, 500);
                $(".peliculas").css("z-index", "2");  
                $(".peliculas h2").hide();  
                $(".series h2").hide();  
                $(".peliculas2").fadeIn(1000);
                $(".menu").hide();

        }); 
        $(".series").click(function(){
                $(".series").animate({width: '100vw', left: '0vw'}, 500);
                $(".series").css("z-index", "2"); 
                $(".series h2").hide();    
                $(".peliculas h2").hide(); 
                $(".series2").fadeIn(1000);
                $(".menu").hide();
        }); 
    });


    /*FUNCION AÑADIR PELICULAS A LISTA*/
    function anadirLista(id, titulo, tituloSinEspacios){
        $.get('anadirLista/'+ tituloSinEspacios, function(response) {
        })
        if(($(`#peliculaLista1 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista1 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista1`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();

                   
        }else if(($(`#peliculaLista2 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista2 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista2`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista3 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista3 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista3`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista4 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista4 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista4`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista5 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista5 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista5`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista6 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista6 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista6`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista7 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista7 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista7`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                
        }else if(($(`#peliculaLista8 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista8 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista8`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista9 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista9 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista9`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista10 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista10 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista10`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista11 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista11 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista11`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista12 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista12 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista12`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista13 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista13 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista13`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista14 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista14 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista14`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista15 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista15 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista15`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista16 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista16 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista16`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();
                   
        }else if(($(`#peliculaLista17 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista17 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista17`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista18 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista18 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista18`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista19 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista19 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista19`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista20 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista20 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista20`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista21 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
                $(`#peliculaLista21 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
                $(`#peliculaLista21`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
                $(`#botonAnadirRecomend${id}`).remove();
                $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista22 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista22 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista22`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista23 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista23 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista23`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista24 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista24 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista24`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista25 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista25 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista25`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista26 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista26 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista26`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista27 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista27 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista27`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista28 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista28 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista28`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista29 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista29 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista29`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista30 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista30 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista30`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista31 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista31 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista31`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista32 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista32 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista32`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista33 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista33 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista33`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista34 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista34 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista34`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista35 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista35 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista35`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista36 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista36 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista36`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista37 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista37 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista37`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista38 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista38 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista38`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista39 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista39 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista39`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#peliculaLista40 #imagenLlena${id}`).attr('src') === `Imagenes/fondo_blanco.png`)) {
            $(`#peliculaLista40 #imagenLlena${id}`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista40`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

                    
        }else if(($(`.imagenNueva1`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`.imagenNueva1`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista1`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena1`).removeClass();

        }else if(($(`.imagenNueva2`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`.imagenNueva2`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista2`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena2`).removeClass();


        }else if(($('.imagenNueva3').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva3').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista3`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena3`).removeClass();

        }else if(($('.imagenNueva4').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva4').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $(`#peliculaLista4`).append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena4`).removeClass();

        }else if(($('.imagenNueva5').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva5').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista5').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena5`).removeClass();

        }else if(($('.imagenNueva6').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva6').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista6').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena6`).removeClass();

        }else if(($('.imagenNueva7').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva7').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista7').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena7`).removeClass();
            
        
        }else if(($('.imagenNueva8').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva8').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista8').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button>button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena8`).removeClass();

        }else if(($('.imagenNueva9').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva9').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista9').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena9`).removeClass();

        }else if(($('.imagenNueva10').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva10').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista10').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena10`).removeClass();

        }else if(($('.imagenNueva11').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva11').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista11').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena11`).removeClass();

        }else if(($('.imagenNueva12').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva12').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista12').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena12`).removeClass();

        }else if(($('.imagenNueva13').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva13').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista13').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena13`).removeClass();

        }else if(($('.imagenNueva14').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva14').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista14').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena14`).removeClass();

        }else if(($('.imagenNueva15').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva15').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista15').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena15`).removeClass();

        }else if(($('.imagenNueva16').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva16').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista16').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena16`).removeClass();

        }else if(($('.imagenNueva17').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva17').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista17').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena17`).removeClass();

        }else if(($('.imagenNueva18').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva18').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista18').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena18`).removeClass(); 

        }else if(($('.imagenNueva19').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva19').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista19').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena19`).removeClass();

        }else if(($('.imagenNueva20').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva20').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista20').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena20`).removeClass();

        }else if(($('.imagenNueva21').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva21').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista21').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena21`).removeClass();


        }else if(($('.imagenNueva22').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva22').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista22').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena22`).removeClass();

        }else if(($('.imagenNueva23').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva23').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista23').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena23`).removeClass();

        }else if(($('.imagenNueva24').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva24').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista24').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena24`).removeClass();

        }else if(($('.imagenNueva25').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva25').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista25').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena25`).removeClass();

        }else if(($('.imagenNueva26').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva26').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista26').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena26`).removeClass();

        }else if(($('.imagenNueva27').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva27').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista27').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena27`).removeClass();

        }else if(($('.imagenNueva28').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva28').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista28').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena28`).removeClass();

        }else if(($('.imagenNueva29').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva29').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista29').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena29`).removeClass();

        }else if(($('.imagenNueva30').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva30').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista30').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena30`).removeClass();

        }else if(($('.imagenNueva31').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva31').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista31').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena31`).removeClass();

        }else if(($('.imagenNueva32').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva32').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista32').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena32`).removeClass();

        }else if(($('.imagenNueva33').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva33').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista33').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena33`).removeClass();

        }else if(($('.imagenNueva34').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva34').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista34').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena34`).removeClass();

        }else if(($('.imagenNueva35').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva35').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista35').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena35`).removeClass();

        }else if(($('.imagenNueva36').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva36').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista36').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena36`).removeClass();

        }else if(($('.imagenNueva37').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva37').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista37').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena37`).removeClass();

        }else if(($('.imagenNueva38').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva38').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista38').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena38`).removeClass();

        }else if(($('.imagenNueva39').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva39').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista39').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena39`).removeClass();

        }else if(($('.imagenNueva40').attr('src') === 'Imagenes/fondo_blanco.png')) {
            $('.imagenNueva40').attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#peliculaLista40').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();
            $(`#imagenLlena40`).removeClass();

        }else if(($(`#imagenesBlanco1 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco1 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco1').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#imagenesBlanco2 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco2 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco2').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#imagenesBlanco3 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco3 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco3').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#imagenesBlanco4 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco4 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco4').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#imagenesBlanco5 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco5 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco5').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#imagenesBlanco6 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco6 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco6').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#imagenesBlanco7 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco7 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco7').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#imagenesBlanco8 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco8 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco8').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#imagenesBlanco9 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco9 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco9').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }else if(($(`#imagenesBlanco10 img`).attr('src') === 'Imagenes/fondo_blanco.png')) {
            $(`#imagenesBlanco10 img`).attr('src', `Imagenes/PortadasPeliculas/${titulo}.jpg`);
            $('#imagenesBlanco10').append(`<button role="button" class="botoncarousel" id="botonTrailer${id}" onclick="trailer('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfo${id}" class="botoncarousel2" onclick="verMasInfo('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrar${id}" onclick="borrarLista('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirRecomend${id}`).remove();
            $(`#botonAnadirPeliculas${id}`).remove();

        }
        
           
    }

    /*FUNCION BORRAR PELICULAS DE LISTA*/
    function borrarLista(id, titulo, tituloSinEspacios){
   
        if(($(`#imagenesBlanco1 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco1 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)  
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#imagenesBlanco2 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco2 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#imagenesBlanco3 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco3 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#imagenesBlanco4 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco4 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#imagenesBlanco5 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco5 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#imagenesBlanco6 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco6 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#imagenesBlanco7 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco7 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#imagenesBlanco8 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco8 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#imagenesBlanco9 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco9 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#imagenesBlanco10 img`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#imagenesBlanco10 img`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista1 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista1 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista1 #imagenLlena${id}`).addClass('imagenNueva1');
                $(`#peliculaLista1 .imagenNueva1`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista2 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista2 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista1 #imagenLlena${id}`).addClass('imagenNueva2');
                $(`#peliculaLista2 .imagenNueva2`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista3 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista3 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista1 #imagenLlena${id}`).addClass('imagenNueva3');
                $(`#peliculaLista3 .imagenNueva3`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista4 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista4 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista1 #imagenLlena${id}`).addClass('imagenNueva4');
                $(`#peliculaLista4 .imagenNueva4`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista5 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista5 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista5 #imagenLlena${id}`).addClass('imagenNueva5');
                $(`#peliculaLista5 .imagenNueva5`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista6 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista6 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista6 #imagenLlena${id}`).addClass('imagenNueva6');
                $(`#peliculaLista6 .imagenNueva6`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista7 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista7 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista7 #imagenLlena${id}`).addClass('imagenNueva7');
                $(`#peliculaLista7 .imagenNueva7`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                
        }else if(($(`#peliculaLista8 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista8 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista8 #imagenLlena${id}`).addClass('imagenNueva8');
                $(`#peliculaLista8 .imagenNueva8`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista9 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista9 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista9 #imagenLlena${id}`).addClass('imagenNueva9');
                $(`#peliculaLista9 .imagenNueva9`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista10 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista10 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista10 #imagenLlena${id}`).addClass('imagenNueva10');
                $(`#peliculaLista10 .imagenNueva10`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista11 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista11 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista11 #imagenLlena${id}`).addClass('imagenNueva11');
                $(`#peliculaLista11 .imagenNueva11`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista12 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista12 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista12 #imagenLlena${id}`).addClass('imagenNueva12');
                $(`#peliculaLista12 .imagenNueva12`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista13 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista13 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista13 #imagenLlena${id}`).addClass('imagenNueva13');
                $(`#peliculaLista13 .imagenNueva13`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista14 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista14 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista14 #imagenLlena${id}`).addClass('imagenNueva14');
                $(`#peliculaLista14 .imagenNueva14`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista15 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista15 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista15 #imagenLlena${id}`).addClass('imagenNueva15');
                $(`#peliculaLista15 .imagenNueva15`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista16 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista16 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista16 #imagenLlena${id}`).addClass('imagenNueva16');
                $(`#peliculaLista16 .imagenNueva16`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`#peliculaLista17 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista17 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista17 #imagenLlena${id}`).addClass('imagenNueva17');
                $(`#peliculaLista17 .imagenNueva17`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })

        }else if(($(`#peliculaLista18 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista18 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista18 #imagenLlena${id}`).addClass('imagenNueva18');
            $(`#peliculaLista18 .imagenNueva18`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })       

        }else if(($(`#peliculaLista19 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`#peliculaLista19 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#peliculaLista19 #imagenLlena${id}`).addClass('imagenNueva19');
                $(`#peliculaLista19 .imagenNueva19`).removeAttr('id');
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })

        }else if(($(`#peliculaLista20 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista20 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista20 #imagenLlena${id}`).addClass('imagenNueva20');
            $(`#peliculaLista20 .imagenNueva20`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista21 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista21 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista21 #imagenLlena${id}`).addClass('imagenNueva21');
            $(`#peliculaLista21 .imagenNueva21`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista22 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista22 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista22 #imagenLlena${id}`).addClass('imagenNueva22');
            $(`#peliculaLista22 .imagenNueva22`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista23 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista23 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista23 #imagenLlena${id}`).addClass('imagenNueva23');
            $(`#peliculaLista23 .imagenNueva23`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista24 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista24 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista24 #imagenLlena${id}`).addClass('imagenNueva24');
            $(`#peliculaLista24 .imagenNueva24`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista25 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista25 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista25 #imagenLlena${id}`).addClass('imagenNueva25');
            $(`#peliculaLista25 .imagenNueva25`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista26 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista26 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista26 #imagenLlena${id}`).addClass('imagenNueva26');
            $(`#peliculaLista26 .imagenNueva26`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista27 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista27 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista27 #imagenLlena${id}`).addClass('imagenNueva27');
            $(`#peliculaLista27 .imagenNueva27`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista28 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista28 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista28 #imagenLlena${id}`).addClass('imagenNueva28');
            $(`#peliculaLista28 .imagenNueva28`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista29 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista29 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista29 #imagenLlena${id}`).addClass('imagenNueva29');
            $(`#peliculaLista29 .imagenNueva29`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista30 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista30 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista30 #imagenLlena${id}`).addClass('imagenNueva30');
            $(`#peliculaLista30 .imagenNueva30`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista31 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista31 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista31 #imagenLlena${id}`).addClass('imagenNueva31');
            $(`#peliculaLista31 .imagenNueva31`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista32 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista30 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista32 #imagenLlena${id}`).addClass('imagenNueva32');
            $(`#peliculaLista32 .imagenNueva32`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista33 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista33 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista33 #imagenLlena${id}`).addClass('imagenNueva33');
            $(`#peliculaLista33 .imagenNueva33`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista34 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista30 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista34 #imagenLlena${id}`).addClass('imagenNueva34');
            $(`#peliculaLista34 .imagenNueva34`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista35 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista35 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista35 #imagenLlena${id}`).addClass('imagenNueva35');
            $(`#peliculaLista35 .imagenNueva35`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista36 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista36 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista36 #imagenLlena${id}`).addClass('imagenNueva36');
            $(`#peliculaLista36 .imagenNueva36`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista37 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista37 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista37 #imagenLlena${id}`).addClass('imagenNueva37');
            $(`#peliculaLista37 .imagenNueva37`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista38 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista38 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista38 #imagenLlena${id}`).addClass('imagenNueva38');
            $(`#peliculaLista38 .imagenNueva38`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista39 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista39 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista39 #imagenLlena${id}`).addClass('imagenNueva39');
            $(`#peliculaLista39 .imagenNueva39`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`#peliculaLista40 #imagenLlena${id}`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`#peliculaLista40 #imagenLlena${id}`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#peliculaLista40 #imagenLlena${id}`).addClass('imagenNueva40');
            $(`#peliculaLista40 .imagenNueva40`).removeAttr('id');
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })
                   
        }else if(($(`.imagenNueva1`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva1`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
            
        }else if(($(`.imagenNueva2`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva2`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva3`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva3`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva4`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva4`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva5`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva5`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva6`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva6`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva7`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva7`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva8`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva8`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva9`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva9`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                
        }else if(($(`.imagenNueva10`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva10`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva11`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva11`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva12`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva12`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva13`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva13`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                   
        }else if(($(`.imagenNueva14`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
                $(`.imagenNueva14`).attr('src', 'Imagenes/fondo_blanco.png');
                $(`#botonTrailer${id}`).remove();
                $(`#botonInfo${id}`).remove();
                $(`#botonBorrar${id}`).remove();
                $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
                $.get('borrarLista/'+ tituloSinEspacios, function(response) {
                })
                
        }else if(($(`.imagenNueva15`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva15`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })
                   
        }else if(($(`.imagenNueva16`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva16`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })
                   
        }else if(($(`.imagenNueva17`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva17`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva18`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva18`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva19`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva19`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva20`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva20`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva21`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva21`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva22`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva22`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva23`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva23`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva24`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva24`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva25`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva25`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva26`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva26`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva27`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva27`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva28`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva28`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva29`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva29`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva30`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva30`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva31`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva31`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva32`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva32`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva33`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva33`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva34`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva34`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva35`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva35`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva36`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva36`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva37`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva37`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva38`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva38`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva39`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva39`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

        }else if(($(`.imagenNueva40`).attr('src') === `Imagenes/PortadasPeliculas/${titulo}.jpg`)) {
            $(`.imagenNueva40`).attr('src', 'Imagenes/fondo_blanco.png');
            $(`#botonTrailer${id}`).remove();
            $(`#botonInfo${id}`).remove();
            $(`#botonBorrar${id}`).remove();
            $(`#imagenRecomend${id}`).append(`<button role="button" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodas${id}`).append(`<button role="button" id="botonAnadirPeliculas${id}" onclick="anadirLista('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista/'+ tituloSinEspacios, function(response) {
            })

                   
        }
                
    }

    /*FUNCION AÑADIR SERIES DE LISTA*/
   
    function anadirLista2(id, titulo, tituloSinEspacios){
    $.get('anadirLista2/'+ tituloSinEspacios, function(response) {
    })
    if(($(`#serieLista1 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista1 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista1`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();

               
    }else if(($(`#serieLista2 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista2 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista2`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista3 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista3 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista3`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista4 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista4 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista4`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista5 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista5 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista5`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista6 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista6 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista6`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista7 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista7 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista7`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
            
    }else if(($(`#serieLista8 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista8 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista8`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista9 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista9 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista9`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista10 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista10 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista10`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista11 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista11 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista11`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista12 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista12 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista12`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista13 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista13 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista13`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista14 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista14 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista14`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista15 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista15 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista15`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista16 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista16 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista16`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();
               
    }else if(($(`#serieLista17 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista17 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista17`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista18 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista18 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista18`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista19 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista19 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista19`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista20 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista20 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista20`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista21 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista21 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista21`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista22 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista22 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista22`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista23 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista23 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista23`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista24 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista24 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista24`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista25 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista25 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista25`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista26 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista26 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista26`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista27 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista27 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista27`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista28 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista28 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista28`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista29 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
            $(`#serieLista29 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
            $(`#serieLista29`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
            $(`#botonAnadirSeriesRecomend${id}`).remove();
            $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista30 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista30 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista30`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista31 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista31 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista31`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista32 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista32 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista32`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista33 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista33 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista33`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista34 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista34 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista34`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#serieLista35 #imagenSerieLlena${id}`).attr('src') === `Imagenes/fondo_negro.png`)) {
        $(`#serieLista35 #imagenSerieLlena${id}`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista35`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
                
    }else if(($(`.imagenNuevaSerie1`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`.imagenNuevaSerie1`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista1`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena1`).removeClass();

    }else if(($(`.imagenNuevaSerie2`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`.imagenNuevaSerie2`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista2`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena2`).removeClass();


    }else if(($('.imagenNuevaSerie3').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie3').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista3`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena3`).removeClass();

    }else if(($('.imagenNuevaSerie4').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie4').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $(`#serieLista4`).append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena4`).removeClass();

    }else if(($('.imagenNuevaSerie5').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie5').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista5').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena5`).removeClass();

    }else if(($('.imagenNuevaSerie6').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie6').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista6').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena6`).removeClass();

    }else if(($('.imagenNuevaSerie7').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie7').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista7').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena7`).removeClass();
        
    
    }else if(($('.imagenNuevaSerie8').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie8').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista8').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button>button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena8`).removeClass();

    }else if(($('.imagenNuevaSerie9').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie9').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista9').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena9`).removeClass();

    }else if(($('.imagenNuevaSerie10').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie10').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista10').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena10`).removeClass();

    }else if(($('.imagenNuevaSerie11').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie11').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista11').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena11`).removeClass();

    }else if(($('.imagenNuevaSerie12').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie12').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista12').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena12`).removeClass();

    }else if(($('.imagenNuevaSerie13').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie13').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista13').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena13`).removeClass();

    }else if(($('.imagenNuevaSerie14').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie14').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista14').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena14`).removeClass();

    }else if(($('.imagenNuevaSerie15').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie15').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista15').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena15`).removeClass();

    }else if(($('.imagenNuevaSerie16').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie16').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista16').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena16`).removeClass();

    }else if(($('.imagenNuevaSerie17').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie17').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista17').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena17`).removeClass();

    }else if(($('.imagenNuevaSerie18').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie18').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista18').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena18`).removeClass();

    }else if(($('.imagenNuevaSerie19').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie19').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista19').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena19`).removeClass();

    }else if(($('.imagenNuevaSerie20').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie20').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista20').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena20`).removeClass();

    }else if(($('.imagenNuevaSerie21').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie21').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista21').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena21`).removeClass();

    }else if(($('.imagenNuevaSerie22').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie22').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista22').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena22`).removeClass();

    }else if(($('.imagenNuevaSerie23').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie23').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista23').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena23`).removeClass();

    }else if(($('.imagenNuevaSerie24').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie24').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista24').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena24`).removeClass();

    }else if(($('.imagenNuevaSerie25').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie25').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista25').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena25`).removeClass();

    }else if(($('.imagenNuevaSerie26').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie26').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista26').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena26`).removeClass();

    }else if(($('.imagenNuevaSerie27').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie27').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista27').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena27`).removeClass();

    }else if(($('.imagenNuevaSerie28').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie28').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista28').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena28`).removeClass();

    }else if(($('.imagenNuevaSerie29').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie29').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista29').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena29`).removeClass();

    }else if(($('.imagenNuevaSerie30').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie30').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista30').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena30`).removeClass();

    }else if(($('.imagenNuevaSerie31').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie31').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista31').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena31`).removeClass();

    }else if(($('.imagenNuevaSerie32').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie32').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista32').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena32`).removeClass();

    }else if(($('.imagenNuevaSerie33').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie33').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista33').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena33`).removeClass();

    }else if(($('.imagenNuevaSerie34').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie34').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista34').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena34`).removeClass();

    }else if(($('.imagenNuevaSerie35').attr('src') === 'Imagenes/fondo_negro.png')) {
        $('.imagenNuevaSerie35').attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#serieLista35').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();
        $(`#imagenSerieLlena35`).removeClass();  

    }else if(($(`#imagenNegro1 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro1 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro1').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#imagenNegro2 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro2 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro2').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#imagenNegro3 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro3 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro3').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#imagenNegro4 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro4 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro4').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#imagenNegro5 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro5 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro5').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#imagenNegro6 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro6 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro6').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#imagenNegro7 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro7 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro7').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#imagenNegro8 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro8 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro8').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#imagenNegro9 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro9 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro9').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }else if(($(`#imagenNegro10 img`).attr('src') === 'Imagenes/fondo_negro.png')) {
        $(`#imagenNegro10 img`).attr('src', `Imagenes/PortadasSeries/${titulo}.jpg`);
        $('#imagenNegro10').append(`<button role="button" class="botoncarousel" id="botonTrailerSeries${id}" onclick="trailer2('${tituloSinEspacios}')" title="REPRODUCIR"><i class="fas fa-play"></i></button><button role="button" id="botonInfoSeries${id}" class="botoncarousel2" onclick="verMasInfo2('${tituloSinEspacios}')" title="MAS INFO"><i class="fas fa-info-circle"></i></button><button id="botonBorrarSeries${id}" onclick="borrarLista2('${id}', '${titulo}', '${tituloSinEspacios}')" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>`);
        $(`#botonAnadirSeriesRecomend${id}`).remove();
        $(`#botonAnadirSeries${id}`).remove();

    }
    
       
}


 /*FUNCION BORRAR SERIES DE LISTA*/
    function borrarLista2(id, titulo, tituloSinEspacios){
   
    if(($(`#imagenNegro1 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro1 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)  
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#imagenNegro2 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro2 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#imagenNegro3 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro3 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#imagenNegro4 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro4 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#imagenNegro5 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro5 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#imagenNegro6 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro6 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#imagenNegro7 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro7 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#imagenNegro8 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro8 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#imagenNegro9 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro9 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#imagenNegro10 img`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#imagenNegro10 img`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista1 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista1 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista1 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie1');
            $(`#serieLista1 .imagenNuevaSerie1`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista2 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista2 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista1 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie2');
            $(`#serieLista2 .imagenNuevaSerie2`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista3 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista3 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista1 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie3');
            $(`#serieLista3 .imagenNuevaSerie3`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista4 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista4 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista1 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie4');
            $(`#serieLista4 .imagenNuevaSerie4`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista5 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista5 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista5 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie5');
            $(`#serieLista5 .imagenNuevaSerie5`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista6 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista6 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista6 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie6');
            $(`#serieLista6 .imagenNuevaSerie6`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista7 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista7 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista7 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie7');
            $(`#serieLista7 .imagenNuevaSerie7`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
            
    }else if(($(`#serieLista8 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista8 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista8 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie8');
            $(`#serieLista8 .imagenNuevaSerie8`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista9 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista9 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista9 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie9');
            $(`#serieLista9 .imagenNuevaSerie9`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista10 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista10 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista10 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie10');
            $(`#serieLista10 .imagenNuevaSerie10`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista11 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista11 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista11 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie11');
            $(`#serieLista11 .imagenNuevaSerie11`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista12 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista12 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista12 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie12');
            $(`#serieLista12 .imagenNuevaSerie12`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista13 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista13 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista13 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie13');
            $(`#serieLista13 .imagenNuevaSerie13`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista14 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista14 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista14 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie14');
            $(`#serieLista14 .imagenNuevaSerie14`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista15 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista15 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista15 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie15');
            $(`#serieLista15 .imagenNuevaSerie15`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista16 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista16 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista16 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie16');
            $(`#serieLista16 .imagenNuevaSerie16`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`#serieLista17 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista17 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista17 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie17');
            $(`#serieLista17 .imagenNuevaSerie17`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })

    }else if(($(`#serieLista18 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista18 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista18 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie18');
        $(`#serieLista18 .imagenNuevaSerie18`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista19 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`#serieLista19 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#serieLista19 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie19');
            $(`#serieLista19 .imagenNuevaSerie19`).removeAttr('id');
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })

    }else if(($(`#serieLista20 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista20 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista20 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie20');
        $(`#serieLista20 .imagenNuevaSerie20`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista21 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista21 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista21 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie21');
        $(`#serieLista21 .imagenNuevaSerie21`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista22 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista22 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista22 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie22');
        $(`#serieLista22 .imagenNuevaSerie22`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista23 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista23 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista23 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie23');
        $(`#serieLista23 .imagenNuevaSerie23`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista24 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista24 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista24 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie24');
        $(`#serieLista24 .imagenNuevaSerie24`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista25 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista25 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista25 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie25');
        $(`#serieLista25 .imagenNuevaSerie25`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista26 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista26 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista26 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie26');
        $(`#serieLista26 .imagenNuevaSerie26`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista27 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista27 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista27 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie27');
        $(`#serieLista27 .imagenNuevaSerie27`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista28 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista28 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista28 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie28');
        $(`#serieLista28 .imagenNuevaSerie28`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista29 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista29 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista29 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie29');
        $(`#serieLista29 .imagenNuevaSerie29`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista30 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista30 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista30 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie30');
        $(`#serieLista30 .imagenNuevaSerie30`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista31 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista31 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista31 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie31');
        $(`#serieLista31 .imagenNuevaSerie31`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista32 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista32 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista32 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie32');
        $(`#serieLista32 .imagenNuevaSerie32`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista33 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista33 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista33 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie33');
        $(`#serieLista33 .imagenNuevaSerie33`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`#serieLista34 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista34 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista34 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie34');
        $(`#serieLista34 .imagenNuevaSerie34`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })
        
    }else if(($(`#serieLista35 #imagenSerieLlena${id}`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`#serieLista35 #imagenSerieLlena${id}`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#serieLista35 #imagenSerieLlena${id}`).addClass('imagenNuevaSerie35');
        $(`#serieLista35 .imagenNuevaSerie35`).removeAttr('id');
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })
                
    }else if(($(`.imagenNuevaSerie1`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie1`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
        
    }else if(($(`.imagenNuevaSerie2`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie2`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie3`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie3`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie4`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie4`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie5`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie5`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie6`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie6`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie7`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie7`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie8`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie8`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie9`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie9`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
            
    }else if(($(`.imagenNuevaSerie10`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie10`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie11`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie11`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie12`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie12`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie13`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie13`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie14`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie14`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
            
    }else if(($(`.imagenNuevaSerie15`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie15`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie16`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie16`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })
                
    }else if(($(`.imagenNuevaSerie17`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie17`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })

    }else if(($(`.imagenNuevaSerie18`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie18`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie19`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
            $(`.imagenNuevaSerie19`).attr('src', 'Imagenes/fondo_negro.png');
            $(`#botonTrailerSeries${id}`).remove();
            $(`#botonInfoSeries${id}`).remove();
            $(`#botonBorrarSeries${id}`).remove();
            $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
            $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
            })

    }else if(($(`.imagenNuevaSerie20`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie20`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie21`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie21`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie22`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie22`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie23`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie23`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie24`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie24`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie25`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie25`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie26`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie26`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie27`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie27`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie28`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie28`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie29`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie29`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie30`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie30`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie31`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie31`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie32`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie32`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie33`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie33`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie34`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie34`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })

    }else if(($(`.imagenNuevaSerie35`).attr('src') === `Imagenes/PortadasSeries/${titulo}.jpg`)) {
        $(`.imagenNuevaSerie35`).attr('src', 'Imagenes/fondo_negro.png');
        $(`#botonTrailerSeries${id}`).remove();
        $(`#botonInfoSeries${id}`).remove();
        $(`#botonBorrarSeries${id}`).remove();
        $(`#imagenSeriesRecomend${id}`).append(`<button role="button" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}')" id="botonAnadirSeriesRecomend${id}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $(`#imagenTodasSeries${id}`).append(`<button role="button" id="otonAnadirSeries${id}" onclick="anadirLista2('${id}', '${titulo}', '${tituloSinEspacios}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>`)
        $.get('borrarLista2/'+ tituloSinEspacios, function(response) {
        })
                
    }
           
}

</script>
<body>

    <div class="menus">
        <nav class="menu" >
            <div class="logo">
                <img src="{{asset('Imagenes/'.Auth::user()->fotoPerfil)}}" style="width:100%">
            </div>
            <div class="opcionesmenu">
                <a href="#" >
                    <i class="material-icons icono">
                        home
                    </i></a>
                <a href="#" >
                    <i class="material-icons icono">
                        person
                    </i></a>
                <a href="#" >
                    <i class="material-icons icono">
                        info
                    </i></a>
                <a href="#">
                    <i class="material-icons icono">
                        help_outline
                    </i></a>
                <a href="#" >
                    <i class="material-icons icono">
                        settings
                    </i></a>
                <a href="#" >
                    <i class="material-icons icono">
                        close
                    </i></a>
            </div>
        </nav>
        <nav class="menu2" style="display: none;">
            <center>
            <div class="logo2">
                <img src="{{asset('Imagenes/'.Auth::user()->fotoPerfil)}}" style="width:100%">
            </div>
            <a href="{{url('home') }}">
                <i class="material-icons icono">
                    home
                </i>HOME</h2></a>
            <a href="{{url('editar/'.Auth::user()->id) }}" >
                <i class="material-icons icono">
                    person
                </i>PERFIL</a>
            <a href="/sobreheavn" >
                <i class="material-icons icono">
                    info
                </i>SOBRE<br>HEAVN</a>
            <a href="/verOpiniones" >
                <i class="material-icons icono">
                    help_outline
                </i>OPINIONES</a>
            <a href="/opciones" >
                <i class="material-icons icono">
                    settings
                </i>OPCIONES</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="material-icons icono"> close
                            </i>LOG OUT
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </center>
        </nav>
    </div>
    <div class="peliculas">
        <h2>PELICULAS</h2>    
    </div>

    <div class="peliculas2" style="display: none">
        <header>
            <div class="contenedor">
                <h2 class="logotipo">HEAVN</h2>
                <img id="logo" src="Imagenes/logo2.png" width="7%" alt="">
                <nav id="menu1">
                    <a href="#" class="activo">Inicio</a>
                    <a href="#recomendados">Recomendados</a>
                    <a href="#lista">Mi lista</a>
                    <a href="#todas">Todas</a>
                    <a href="/infoPeliculasSeries">Menú</a>
                    <a href="/verCine">Volver</a>
                </nav>
            </div>
        </header>
    
        <main>
            <div class="pelicula-principal">
                <div class="contenedor">
                    <h3 class="titulo">El Hoyo</h3>
                    <p class="descripcion">
                        En el futuro, los prisioneros se alojan en celdas verticales, observando cómo los presos de las celdas superiores son alimentados mientras los de abajo mueren de hambre. Una jungla de supervivencia donde solo hay tres tipos de personas: los que están arriba, los que están abajo y los que deciden saltar, incapaces de soportar esa agonía por más tiempo.
                    </p>
                    <button role="button" class="boton" onclick="verTrailerPrincipal();"><i class="fas fa-play"></i>Reproducir</button>
                    <button role="button" class="boton" onclick="verMasInfoPrincipal();"><i class="fas fa-info-circle"></i>Más información</button>
                    <div class="trailer" id="trailer">
                        <video id="video" src="Videos/ElHoyo.mp4" controls="true"></video>
                        <img src="Imagenes/close.png" class="close" onclick="verTrailerPrincipal();">
                    </div>
                    <div class="masinfo">
                        <img src="Imagenes/close.png" class="close" onclick="verMasInfoPrincipal();">
                        <div class="contenido">
                            <div class="titulo">
                                <h2>EL HOYO</h2>
                            </div>
                            <div class="sinopsis">
                                En el futuro, los prisioneros se alojan en celdas verticales, observando cómo los presos de las celdas superiores son alimentados mientras los de abajo mueren de hambre. Una jungla de supervivencia donde solo hay tres tipos de personas: los que están arriba, los que están abajo y los que deciden saltar, incapaces de soportar esa agonía por más tiempo.
                            </div>
                            <div class="anio">
                                Año: 2019
                            </div>
                            <div class="duracion">
                                Duración: 1h 34m
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="peliculas-recomendadas contenedor">
                <div class="contenedor-titulo-controles" id="recomendados">
                    <h3 id="titulo1">Películas Recomendadas</h3>
                    <div class="indicadores"></div>
                </div>
    
                <div class="contenedor-principal">
                    <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
    
                    <div class="contenedor-carousel">
                        <div class="carousel">

                            @if(is_object($datos) || is_array($datos))
                                @foreach($datos as $datos)
                                    <div class="pelicula" id="imagenRecomend{{$datos->id}}">
                                            <img src="Imagenes/PortadasPeliculas/{{$datos->titulo}}.jpg" alt="">
                                            <button role="button" class="botoncarousel" onclick="trailer(`{{$datos->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                            <button role="button" class="botoncarousel2" onclick="verMasInfo(`{{$datos->tituloSinEspacios}}`)"><i class="fas fa-info-circle"></i></button>
                                            
                                            @if($datos->anadidaLista === 0)
                                                <button role="button" onclick="anadirLista('{{$datos->id}}', '{{$datos->titulo}}', '{{$datos->tituloSinEspacios}}')" id="botonAnadirRecomend{{$datos->id}}" class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>
                                            @else 
                                                <!--NADA-->
                                            @endif
                                       
                                    </div>
                                    <div class="trailer{{$datos->tituloSinEspacios}}" id="trailer">
                                        <video id="video{{$datos->tituloSinEspacios}}" src="Videos/{{$datos->tituloSinEspacios}}.mp4" controls="true"></video>
                                        <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos->tituloSinEspacios}}`);">
                                    </div>
                                    <div class="masinfo" id="masinfo{{$datos->tituloSinEspacios}}">
                                        <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos->tituloSinEspacios}}`);">
                                        <div class="contenido">
                                            <div class="titulo">
                                                <h2>{{$datos->titulo}}</h2>
                                            </div>
                                            <div class="sinopsis">
                                                {{$datos->sinopsis}}
                                            </div>
                                            <div class="anio">
                                                Año: {{$datos->anio}}
                                            </div>
                                            <div class="duracion">
                                                Duración: {{$datos->duracion}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            
                        </div>
                    </div>
    
                    <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
            <div class="peliculas-recomendadas contenedor">
                <div class="contenedor-titulo-controles" id="lista">
                    <h3 id="titulo1">Mi Lista</h3>
                    <div class="indicadores3"></div>
                </div>
    
                <div class="contenedor-principal">
                    <button role="button" id="flecha-izquierda3" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
    
                    <div class="contenedor-carousel3">
                        <div class="carousel">
                            @if($datos2->count() == 0)
                                <div class="pelicula3" id="imagenesBlanco1">
                                   <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco2">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco3">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco4">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco5">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco6">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                 </div>
                                 <div class="pelicula3" id="imagenesBlanco7">
                                     <img  src="Imagenes/fondo_blanco.png" alt="">
                                 </div>
                                 <div class="pelicula3" id="imagenesBlanco8">
                                     <img  src="Imagenes/fondo_blanco.png" alt="">
                                 </div>
                                 <div class="pelicula3" id="imagenesBlanco9">
                                     <img  src="Imagenes/fondo_blanco.png" alt="">
                                 </div>
                                 <div class="pelicula3" id="imagenesBlanco10">
                                     <img  src="Imagenes/fondo_blanco.png" alt="">
                                 </div>


                            @elseif($datos2->count() == 1)
                                    @foreach($datos2 as $datos2)
                                        <div class="pelicula3" id="peliculaLista{{$datos2->id}}">
                                                <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}" alt="">
                                                <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                                <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>        
                                                <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>
                                
                                        </div>
                                        <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                            <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                            <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                        </div>
                                        <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                            <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`);">
                                            <div class="contenido">
                                                <div class="titulo">
                                                    <h2>{{$datos2->titulo}}</h2>
                                                </div>
                                                <div class="sinopsis">
                                                    {{$datos2->sinopsis}}
                                                </div>
                                                <div class="anio">
                                                    Año: {{$datos2->anio}}
                                                </div>
                                                <div class="duracion">
                                                    Duración: {{$datos2->duracion}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="pelicula3" id="imagenesBlanco2">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco3">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco4">
                                        <img  src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco5">
                                       <img  src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco6">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco7">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco8">
                                        <img  src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco9">
                                       <img  src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco10">
                                        <img  src="Imagenes/fondo_blanco.png" alt="">
                                     </div>
                            @elseif($datos2->count() == 2)
                                @foreach($datos2 as $datos2)
                                    <div class="pelicula3" id="peliculaLista{{$datos2->id}}">
                                            <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}" alt="">
                                            <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                            <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button> 
                                            <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                       
                                    </div>
                                    <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                        <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                        <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                    </div>
                                    <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                        <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`);">
                                        <div class="contenido">
                                            <div class="titulo">
                                                <h2>{{$datos2->titulo}}</h2>
                                            </div>
                                            <div class="sinopsis">
                                                {{$datos2->sinopsis}}
                                            </div>
                                            <div class="anio">
                                                Año: {{$datos2->anio}}
                                            </div>
                                            <div class="duracion">
                                                Duración: {{$datos2->duracion}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="pelicula3" id="imagenesBlanco3">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco4">
                                   <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco5">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco6">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco7">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco8">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco9">
                                   <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco10">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                 </div>
                            @elseif($datos2->count() == 3)
                                @foreach($datos2 as $datos2)
                                    <div class="pelicula3" id="peliculaLista{{$datos2->id}}">
                                            <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}"  alt="">
                                            <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                            <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>     
                                            <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                   
                                    </div>
                                    <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                        <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                        <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                    </div>
                                    <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                        <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`);">
                                        <div class="contenido">
                                            <div class="titulo">
                                                <h2>{{$datos2->titulo}}</h2>
                                            </div>
                                            <div class="sinopsis">
                                                {{$datos2->sinopsis}}
                                            </div>
                                            <div class="anio">
                                                Año: {{$datos2->anio}}
                                            </div>
                                            <div class="duracion">
                                                Duración: {{$datos2->duracion}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="pelicula3" id="imagenesBlanco4">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco5">
                                   <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco6">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco7">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco8">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco9">
                                   <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco10">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                 </div>
                            @elseif($datos2->count() == 4)
                                @foreach($datos2 as $datos2)
                                    <div class="pelicula3" id="peliculaLista{{$datos2->id}}">
                                            <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}" alt="">
                                            <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                            <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>  
                                            <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                      
                                    </div>
                                    <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                        <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                        <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                    </div>
                                    <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                        <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`);">
                                        <div class="contenido">
                                            <div class="titulo">
                                                <h2>{{$datos2->titulo}}</h2>
                                            </div>
                                            <div class="sinopsis">
                                                {{$datos2->sinopsis}}
                                            </div>
                                            <div class="anio">
                                                Año: {{$datos2->anio}}
                                            </div>
                                            <div class="duracion">
                                                Duración: {{$datos2->duracion}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="pelicula3" id="imagenesBlanco5">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco6">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco7">
                                    <img src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco8">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco9">
                                   <img  src="Imagenes/fondo_blanco.png" alt="">
                                </div>
                                <div class="pelicula3" id="imagenesBlanco10">
                                    <img  src="Imagenes/fondo_blanco.png" alt="">
                                 </div>
                            @elseif($datos2->count() == 5)
                                    @foreach($datos2 as $datos2)
                                        <div class="pelicula3" id="peliculaLista{{$datos2->id}}">
                                                <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}" alt="">
                                                <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                                <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                                <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                        </div>
                                        <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                            <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                            <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                        </div>
                                        <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                            <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`);">
                                            <div class="contenido">
                                                <div class="titulo">
                                                    <h2>{{$datos2->titulo}}</h2>
                                                </div>
                                                <div class="sinopsis">
                                                    {{$datos2->sinopsis}}
                                                </div>
                                                <div class="anio">
                                                    Año: {{$datos2->anio}}
                                                </div>
                                                <div class="duracion">
                                                    Duración: {{$datos2->duracion}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="pelicula3" id="imagenesBlanco6">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco7">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco8">
                                       <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco9">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                     </div>
                                     <div class="pelicula3" id="imagenesBlanco10">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                     </div>
                            @elseif($datos2->count() == 6)
                                    @foreach($datos2 as $datos2)
                                        <div class="pelicula3" id="peliculaList{{$datos2->id}}">
                                                <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}" alt="">
                                                <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                                <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                                <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                        </div>
                                        <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                            <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                            <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                        </div>
                                        <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                            <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`);">
                                            <div class="contenido">
                                                <div class="titulo">
                                                    <h2>{{$datos2->titulo}}</h2>
                                                </div>
                                                <div class="sinopsis">
                                                    {{$datos2->sinopsis}}
                                                </div>
                                                <div class="anio">
                                                    Año: {{$datos2->anio}}
                                                </div>
                                                <div class="duracion">
                                                    Duración: {{$datos2->duracion}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="pelicula3" id="imagenesBlanco7">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco8">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco9">
                                       <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco10">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                     </div>
                            @elseif($datos2->count() == 7)
                                   @foreach($datos2 as $datos2)
                                        <div class="pelicula3" id="peliculaLista{{$datos2->id}}">
                                                <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}" alt="">
                                                <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                                <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                                <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                        </div>
                                        <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                            <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                            <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                        </div>
                                        <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                            <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`);">
                                            <div class="contenido">
                                                <div class="titulo">
                                                    <h2>{{$datos2->titulo}}</h2>
                                                </div>
                                                <div class="sinopsis">
                                                    {{$datos2->sinopsis}}
                                                </div>
                                                <div class="anio">
                                                    Año: {{$datos2->anio}}
                                                </div>
                                                <div class="duracion">
                                                    Duración: {{$datos2->duracion}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="pelicula3" id="imagenesBlanco8">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco9">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div>
                                    <div class="pelicula3" id="imagenesBlanco10">
                                        <img src="Imagenes/fondo_blanco.png" alt="">
                                    </div> 
                            @elseif($datos2->count() == 8)
                                    @foreach($datos2 as $datos2)
                                         <div class="pelicula3" id="peliculaLista{{$datos2->id}}">
                                                 <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}" alt="">
                                                 <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                                 <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                                 <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                         </div>
                                         <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                             <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                             <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                         </div>
                                         <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                            <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$dato2->tituloSinEspacios}}`);">
                                            <div class="contenido">
                                                <div class="titulo">
                                                    <h2>{{$datos2->titulo}}</h2>
                                                </div>
                                                <div class="sinopsis">
                                                    {{$datos2->sinopsis}}
                                                </div>
                                                <div class="anio">
                                                    Año: {{$datos2->anio}}
                                                </div>
                                                <div class="duracion">
                                                    Duración: {{$datos2->duracion}}
                                                </div>
                                            </div>
                                        </div>
                                     @endforeach
                                     <div class="pelicula3" id="imagenesBlanco9">
                                        <img  src="Imagenes/fondo_blanco.png" alt="">
                                     </div>
                                     <div class="pelicula3" id="imagenesBlanco10">
                                         <img  src="Imagenes/fondo_blanco.png" alt="">
                                     </div> 
                            @elseif($datos2->count() == 9)
                                     @foreach($datos2 as $datos2)
                                          <div class="pelicula3" id="peliculaLista{{$datos2->id}}">
                                                  <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}" alt="">
                                                  <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                                  <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                                  <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                          </div>
                                          <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                              <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                              <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                          </div>
                                          <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                            <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`);">
                                            <div class="contenido">
                                                <div class="titulo">
                                                    <h2>{{$datos2->titulo}}</h2>
                                                </div>
                                                <div class="sinopsis">
                                                    {{$datos2->sinopsis}}
                                                </div>
                                                <div class="anio">
                                                    Año: {{$datos2->anio}}
                                                </div>
                                                <div class="duracion">
                                                    Duración: {{$datos2->duracion}}
                                                </div>
                                            </div>
                                        </div>
                                      @endforeach
                                      <div class="pelicula3" id="imagenesBlanco10">
                                          <img  src="Imagenes/fondo_blanco.png" alt="">
                                      </div> 
                            @elseif($datos2->count() == 10)
                                     @foreach($datos2 as $datos2)
                                          <div class="pelicula3" id="peliculaLista{{$datos2->id}}">
                                                  <img src="Imagenes/PortadasPeliculas/{{$datos2->titulo}}.jpg" id="imagenLlena{{$datos2->id}}" alt="">
                                                  <button role="button" id="botonTrailer{{$datos2->id}}" class="botoncarousel" onclick="trailer(`{{$datos2->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                                  <button role="button" id="botonInfo{{$datos2->id}}" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                                  <button onclick="borrarLista('{{$datos2->id}}', '{{$datos2->titulo}}', '{{$datos2->tituloSinEspacios}}')" id="botonBorrar{{$datos2->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                          </div>
                                          <div class="trailer{{$datos2->tituloSinEspacios}}" id="trailer">
                                              <video id="video{{$datos2->tituloSinEspacios}}" src="Videos/{{$datos2->tituloSinEspacios}}.mp4" controls="true"></video>
                                              <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos2->tituloSinEspacios}}`);">
                                          </div>
                                          <div class="masinfo" id="masinfo{{$datos2->tituloSinEspacios}}">
                                            <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos2->tituloSinEspacios}}`);">
                                            <div class="contenido">
                                                <div class="titulo">
                                                    <h2>{{$datos2->titulo}}</h2>
                                                </div>
                                                <div class="sinopsis">
                                                    {{$datos2->sinopsis}}
                                                </div>
                                                <div class="anio">
                                                    Año: {{$datos2->anio}}
                                                </div>
                                                <div class="duracion">
                                                    Duración: {{$datos2->duracion}}
                                                </div>
                                            </div>
                                        </div>
                                      @endforeach
                            @endif

                        </div>
                    </div>
    
                    <button role="button" id="flecha-derecha3" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
            <div class="peliculas-recomendadas contenedor">
                <div class="contenedor-titulo-controles" id="todas">
                    <h3 id="titulo1">Todas Las Películas</h3>
                    <div class="indicadores5"></div>
                </div>
    
                <div class="contenedor-principal">
                    <button role="button" id="flecha-izquierda5" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
    
                    <div class="contenedor-carousel5">
                        <div class="carousel">
                            @if(is_object($datos3) || is_array($datos3))
                            @foreach($datos3 as $datos3)
                                <div class="pelicula5" id="imagenTodas{{$datos3->id}}">
                                        <img src="Imagenes/PortadasPeliculas/{{$datos3->titulo}}.jpg" alt="">
                                        <button role="button" class="botoncarousel" onclick="trailer(`{{$datos3->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                        <button role="button" class="botoncarousel2" onclick="verMasInfo(`{{$datos3->tituloSinEspacios}}`)" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                        
                                        @if($datos3->anadidaLista === 0)
                                        <button role="button" id="botonAnadirPeliculas{{$datos3->id}}" onclick="anadirLista('{{$datos3->id}}', '{{$datos3->titulo}}', '{{$datos3->tituloSinEspacios}}') " class="botoncarousel3" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>
                                        @else 

                                        @endif
                                   
                                </div>
                                <div class="trailer{{$datos3->tituloSinEspacios}}" id="trailer">
                                    <video id="video{{$datos3->tituloSinEspacios}}" src="Videos/{{$datos3->tituloSinEspacios}}.mp4" controls="true"></video>
                                    <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos3->tituloSinEspacios}}`);">
                                </div>
                                <div class="masinfo" id="masinfo{{$datos3->tituloSinEspacios}}">
                                    <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos3->tituloSinEspacios}}`);">
                                    <div class="contenido">
                                        <div class="titulo">
                                            <h2>{{$datos3->titulo}}</h2>
                                        </div>
                                        <div class="sinopsis">
                                            {{$datos3->sinopsis}}
                                        </div>
                                        <div class="anio">
                                            Año: {{$datos3->anio}}
                                        </div>
                                        <div class="duracion">
                                            Duración: {{$datos3->duracion}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
    
                    <button role="button" id="flecha-derecha5" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
        </main>
    </div>
    
    <div class="series">
        <h2>SERIES</h2>
    </div>

    <div class="series2" style="display: none">
        <header>
            <div class="contenedor">
                <h2 class="logotipo">HEAVN</h2>
                <img id="logo2" src="Imagenes/logo.png" width="7%" alt="">
                <nav id="menu2">
                    <a href="#" class="activo">Inicio</a>
                    <a href="#recomendados2">Recomendados</a>
                    <a href="#lista2">Mi lista</a>
                    <a href="#todas2">Todas</a>
                    <a href="/infoPeliculasSeries">Menú</a>
                    <a href="/verCine">Volver</a>
                </nav>
            </div>
        </header>
    
        <main>
            <div class="pelicula-principal2">
                <div class="contenedor">
                    <h3 class="titulo">La Casa De Papel</h3>
                    <p class="descripcion">
                        Cuenta la historia de un atraco perfecto, el más grande y sofisticado de la historia, en la Fábrica de Moneda y Timbre. Quien idea este plan es El Profesor, lleva años diseñ&&o hasta el más mínimo detalle y nada tiene que fallar.
                    </p>
                    <button role="button" class="boton" onclick="verTrailerPrincipal2();"><i class="fas fa-play"></i>Reproducir</button>
                    <button role="button" class="boton" onclick="verMasInfoPrincipal2();"><i class="fas fa-info-circle"></i>Más información</button>
                    <div class="trailer2" id="trailer">
                        <video id="video2" src="Videos/LaCasaDePapel4.mp4" controls="true"></video>
                        <img src="Imagenes/close.png" class="close" onclick="verTrailerPrincipal2();">
                    </div>
                    <div class="masinfo" id="masInfo2">
                        <img src="Imagenes/close.png" class="close" onclick="verMasInfoPrincipal2();">
                        <div class="contenido">
                            <div class="titulo">
                                <h2>LA CASA DE PAPEL</h2>
                            </div>
                            <div class="sinopsis">
                              ‘La casa de papel‘ cuenta la historia de un atraco perfecto, el más grande y sofisticado de la historia, en la Fábrica de Moneda y Timbre. Quien idea este plan es El Profesor, lleva años diseñando hasta el más mínimo detalle y nada tiene que fallar. Para ello, recluta a siete personas muy diferentes, pero que tienen algo en común: no tienen nada que perder.
                            </div>
                            <div class="anio">
                                Año: 2017
                            </div>
                            <div class="duracion">
                                Temporadas: 4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="peliculas-recomendadas contenedor">
                <div class="contenedor-titulo-controles" id="recomendados2">
                    <h3 id="titulo2">Series Recomendadas</h3>
                    <div class="indicadores2"></div>
                </div>
    
                <div class="contenedor-principal">
                    <button role="button" id="flecha-izquierda2" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
    
                    <div class="contenedor-carousel2">
                        <div class="carousel">
                            @if(is_object($datos4) || is_array($datos4))
                                @foreach($datos4 as $datos4)
                                    <div class="pelicula2" id="imagenSeriesRecomend{{$datos4->id}}">
                                            <img src="Imagenes/PortadasSeries/{{$datos4->titulo}}.jpg" alt="">
                                            <button role="button" class="botoncarousel" onclick="trailer(`{{$datos4->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                            <button role="button" class="botoncarousel2" onclick="verMasInfo(`{{$datos4->tituloSinEspacios}}`)"><i class="fas fa-info-circle"></i></button>
                                            
                                            @if($datos4->anadidaLista == 0)
                                                <button role="button" class="botoncarousel3" onclick="anadirLista2('{{$datos4->id}}', '{{$datos4->titulo}}', '{{$datos4->tituloSinEspacios}}')" id="botonAnadirSeriesRecomend{{$datos4->id}}"  title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>
                                            @else 
                                                <!--NADA-->
                                            @endif
                                           
                                    </div>
                                    <div class="trailer{{$datos4->tituloSinEspacios}}" id="trailer">
                                        <video id="video{{$datos4->tituloSinEspacios}}" src="Videos/{{$datos4->tituloSinEspacios}}.mp4" controls="true"></video>
                                        <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer(`{{$datos4->tituloSinEspacios}}`);">
                                    </div>
                                    <div class="masinfo" id="masinfo{{$datos4->tituloSinEspacios}}">
                                        <img src="Imagenes/close.png" class="close" onclick="verMasInfo(`{{$datos4->tituloSinEspacios}}`);">
                                        <div class="contenido">
                                            <div class="titulo">
                                                <h2>{{$datos4->titulo}}</h2>
                                            </div>
                                            <div class="sinopsis">
                                                {{$datos4->sinopsis}}
                                            </div>
                                            <div class="anio">
                                                Año: {{$datos4->anio}}
                                            </div>
                                            <div class="duracion">
                                                Temporadas: {{$datos4->temporadas}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
    
                    <button role="button" id="flecha-derecha2" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
            <div class="peliculas-recomendadas contenedor">
                <div class="contenedor-titulo-controles" id="lista2">
                    <h3 id="titulo2">Mi Lista</h3>
                    <div class="indicadores4"></div>
                </div>
    
                <div class="contenedor-principal">
                    <button role="button" id="flecha-izquierda4" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
    
                    <div class="contenedor-carousel4">
                        <div class="carousel">
                            @if($datos5->count() == 0)
                            <div class="pelicula4" id="imagenNegro1">
                               <img src="Imagenes/fondo_negro.png" alt="">
                            </div>
                            <div class="pelicula4" id="imagenNegro2">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                            </div>
                            <div class="pelicula4" id="imagenNegro3">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                            </div>
                            <div class="pelicula4" id="imagenNegro4">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                            </div>
                            <div class="pelicula4" id="imagenNegro5">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                            </div>
                            <div class="pelicula4" id="imagenNegro6">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro7">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro8">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro9">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro10">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>


                             @elseif($datos5->count() == 1)
                             @foreach($datos5 as $datos5)
                                 <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                         <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}" alt="">
                                         <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                         <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>        
                                         <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>
                             
                                 </div>
                                 <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                     <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                     <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                                 </div>
                                 <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                     <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`);">
                                     <div class="contenido">
                                         <div class="titulo">
                                             <h2>{{$datos5->titulo}}</h2>
                                         </div>
                                         <div class="sinopsis">
                                             {{$datos5->sinopsis}}
                                         </div>
                                         <div class="anio">
                                             Año: {{$datos5->anio}}
                                         </div>
                                         <div class="duracion">
                                             Temporadas: {{$datos5->temporadas}}
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                             <div class="pelicula4" id="imagenNegro2">
                                 <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro3">
                                 <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro4">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro5">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro6">
                                 <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro7">
                                 <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro8">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro9">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro10">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                              </div>
                             @elseif($datos5->count() == 2)
                             @foreach($datos5 as $datos5)
                             <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                     <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}" alt="">
                                     <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                     <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button> 
                                     <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                       
                             </div>
                             <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                 <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                 <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                             </div>
                             <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                 <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`);">
                                 <div class="contenido">
                                     <div class="titulo">
                                         <h2>{{$datos5->titulo}}</h2>
                                     </div>
                                     <div class="sinopsis">
                                         {{$datos5->sinopsis}}
                                     </div>
                                     <div class="anio">
                                         Año: {{$datos5->anio}}
                                     </div>
                                     <div class="duracion">
                                         Temporadas: {{$datos5->temporadas}}
                                     </div>
                                 </div>
                             </div>
                             @endforeach
                             <div class="pelicula4" id="imagenNegro3">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro4">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro5">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro6">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro7">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro8">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro9">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro10">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             @elseif($datos5->count() == 3)
                             @foreach($datos5 as $datos5)
                             <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                     <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}"  alt="">
                                     <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                     <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>     
                                     <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                   
                             </div>
                             <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                 <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                 <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                             </div>
                             <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                 <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`);">
                                 <div class="contenido">
                                     <div class="titulo">
                                         <h2>{{$datos5->titulo}}</h2>
                                     </div>
                                     <div class="sinopsis">
                                         {{$datos5->sinopsis}}
                                     </div>
                                     <div class="anio">
                                         Año: {{$datos5->anio}}
                                     </div>
                                     <div class="duracion">
                                         Temporadas: {{$datos5->temporadas}}
                                     </div>
                                 </div>
                             </div>
                             @endforeach
                             <div class="pelicula4" id="imagenNegro4">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro5">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro6">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro7">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro8">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro9">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro10">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             @elseif($datos5->count() == 4)
                             @foreach($datos5 as $datos5)
                             <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                     <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}" alt="">
                                     <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                     <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>  
                                     <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                      
                             </div>
                             <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                 <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                 <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                             </div>
                             <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                 <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`);">
                                 <div class="contenido">
                                     <div class="titulo">
                                         <h2>{{$datos5->titulo}}</h2>
                                     </div>
                                     <div class="sinopsis">
                                         {{$datos5->sinopsis}}
                                     </div>
                                     <div class="anio">
                                         Año: {{$datos5->anio}}
                                     </div>
                                     <div class="duracion">
                                         Temporadas: {{$datos5->temporadas}}
                                     </div>
                                 </div>
                             </div>
                             @endforeach
                             <div class="pelicula4" id="imagenNegro5">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro6">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro7">
                                <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro8">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro9">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro10">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             @elseif($datos5->count() == 5)
                             @foreach($datos5 as $datos5)
                                 <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                         <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}" alt="">
                                         <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                         <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                         <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                 </div>
                                 <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                     <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                     <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                                 </div>
                                 <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                     <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`);">
                                     <div class="contenido">
                                         <div class="titulo">
                                             <h2>{{$datos5->titulo}}</h2>
                                         </div>
                                         <div class="sinopsis">
                                             {{$datos5->sinopsis}}
                                         </div>
                                         <div class="anio">
                                             Año: {{$datos5->anio}}
                                         </div>
                                         <div class="duracion">
                                             Temporadas: {{$datos5->temporadas}}
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                             <div class="pelicula4" id="imagenNegro6">
                                 <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro7">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro8">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro9">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                              </div>
                              <div class="pelicula4" id="imagenNegro10">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                              </div>
                             @elseif($datos5->count() == 6)
                             @foreach($datos5 as $datos5)
                                 <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                         <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}" alt="">
                                         <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                         <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                         <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                 </div>
                                 <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                     <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                     <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                                 </div>
                                 <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                     <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`);">
                                     <div class="contenido">
                                         <div class="titulo">
                                             <h2>{{$datos5->titulo}}</h2>
                                         </div>
                                         <div class="sinopsis">
                                             {{$datos5->sinopsis}}
                                         </div>
                                         <div class="anio">
                                             Año: {{$datos5->anio}}
                                         </div>
                                         <div class="duracion">
                                             Temporadas: {{$datos5->temporadas}}
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                             <div class="pelicula4" id="imagenNegro7">
                                 <img src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro8">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro9">
                                <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro10">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                              </div>
                             @elseif($datos5->count() == 7)
                             @foreach($datos5 as $datos5)
                                 <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                         <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}" alt="">
                                         <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                         <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                         <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                 </div>
                                 <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                     <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                     <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                                 </div>
                                 <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                     <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`);">
                                     <div class="contenido">
                                         <div class="titulo">
                                             <h2>{{$datos5->titulo}}</h2>
                                         </div>
                                         <div class="sinopsis">
                                             {{$datos5->sinopsis}}
                                         </div>
                                         <div class="anio">
                                             Año: {{$datos5->anio}}
                                         </div>
                                         <div class="duracion">
                                             Temporadas: {{$datos5->temporadas}}
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                             <div class="pelicula4" id="imagenNegro8">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro9">
                             <img  src="Imagenes/fondo_negro.png" alt="">
                             </div>
                             <div class="pelicula4" id="imagenNegro10">
                                 <img  src="Imagenes/fondo_negro.png" alt="">
                             </div> 
                             @elseif($datos5->count() == 8)
                             @foreach($datos5 as $datos5)
                                  <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                          <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}" alt="">
                                          <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                          <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                          <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                  </div>
                                  <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                      <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                      <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                                  </div>
                                  <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                     <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$dato2->tituloSinEspacios}}`);">
                                     <div class="contenido">
                                         <div class="titulo">
                                             <h2>{{$datos5->titulo}}</h2>
                                         </div>
                                         <div class="sinopsis">
                                             {{$datos5->sinopsis}}
                                         </div>
                                         <div class="anio">
                                             Año: {{$datos5->anio}}
                                         </div>
                                         <div class="duracion">
                                             Temporadas: {{$datos5->temporadas}}
                                         </div>
                                     </div>
                                 </div>
                              @endforeach
                              <div class="pelicula4" id="imagenNegro9">
                              <img  src="Imagenes/fondo_negro.png" alt="">
                              </div>
                              <div class="pelicula4" id="imagenNegro10">
                                  <img  src="Imagenes/fondo_negro.png" alt="">
                              </div> 
                             @elseif($datos5->count() == 9)
                              @foreach($datos5 as $datos5)
                                   <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                           <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}" alt="">
                                           <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                           <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                           <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                   </div>
                                   <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                       <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                       <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                                   </div>
                                   <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                     <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`);">
                                     <div class="contenido">
                                         <div class="titulo">
                                             <h2>{{$datos5->titulo}}</h2>
                                         </div>
                                         <div class="sinopsis">
                                             {{$datos5->sinopsis}}
                                         </div>
                                         <div class="anio">
                                             Año: {{$datos5->anio}}
                                         </div>
                                         <div class="duracion">
                                             Temporadas: {{$datos5->temporadas}}
                                         </div>
                                     </div>
                                 </div>
                               @endforeach
                               <div class="pelicula4" id="imagenNegro10">
                                   <img  src="Imagenes/fondo_negro.png" alt="">
                               </div> 
                             @elseif($datos5->count() == 10)
                              @foreach($datos5 as $datos5)
                                   <div class="pelicula4" id="serieLista{{$datos5->id}}">
                                           <img src="Imagenes/PortadasSeries/{{$datos5->titulo}}.jpg" id="imagenSerieLlena{{$datos5->id}}" alt="">
                                           <button role="button" id="botonTrailerSeries{{$datos5->id}}" class="botoncarousel" onclick="trailer2(`{{$datos5->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                           <button role="button" id="botonInfoSeries{{$datos5->id}}" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`)" class="botoncarousel2" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                           <button onclick="borrarLista2('{{$datos5->id}}', '{{$datos5->titulo}}', '{{$datos5->tituloSinEspacios}}')" id="botonBorrarSeries{{$datos5->id}}" role="button" class="botoncarousel3" title="ELIMINAR DE MI LISTA"><i class="fas fa-minus"></i></button>                                        
                                   </div>
                                   <div class="trailer{{$datos5->tituloSinEspacios}}" id="trailer">
                                       <video id="video{{$datos5->tituloSinEspacios}}" src="Videos/{{$datos5->tituloSinEspacios}}.mp4" controls="true"></video>
                                       <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos5->tituloSinEspacios}}`);">
                                   </div>
                                   <div class="masinfo" id="masinfo{{$datos5->tituloSinEspacios}}">
                                     <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos5->tituloSinEspacios}}`);">
                                     <div class="contenido">
                                         <div class="titulo">
                                             <h2>{{$datos5->titulo}}</h2>
                                         </div>
                                         <div class="sinopsis">
                                             {{$datos5->sinopsis}}
                                         </div>
                                         <div class="anio">
                                             Año: {{$datos5->anio}}
                                         </div>
                                         <div class="duracion">
                                             Temporadas: {{$datos5->temporadas}}
                                         </div>
                                     </div>
                                 </div>
                               @endforeach
                             @endif

                        </div>
                    </div>
    
                    <button role="button" id="flecha-derecha4" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
            <div class="peliculas-recomendadas contenedor">
                <div class="contenedor-titulo-controles" id="todas2">
                    <h3 id="titulo2">Todas Las Series</h3>
                    <div class="indicadores6"></div>
                </div>
    
                <div class="contenedor-principal">
                    <button role="button" id="flecha-izquierda6" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
    
                    <div class="contenedor-carousel6">
                        <div class="carousel">
                            @if(is_object($datos6) || is_array($datos6))
                                @foreach($datos6 as $datos6)
                                    <div class="pelicula6" id="imagenTodasSeries{{$datos6->id}}">
                                        <img src="Imagenes/PortadasSeries/{{$datos6->titulo}}.jpg" alt="">
                                        <button role="button" class="botoncarousel" onclick="trailer2(`{{$datos6->tituloSinEspacios}}`)" title="REPRODUCIR"><i class="fas fa-play"></i></button>
                                        <button role="button" class="botoncarousel2" onclick="verMasInfo2(`{{$datos6->tituloSinEspacios}}`)" title="MAS INFO"><i class="fas fa-info-circle"></i></button>
                                        
                                        @if($datos6->anadidaLista == 0)
                                        <button role="button" id="botonAnadirSeries{{$datos6->id}}" class="botoncarousel3" onclick="anadirLista2('{{$datos6->id}}', '{{$datos6->titulo}}', '{{$datos6->tituloSinEspacios}}')" title="AÑADIR A MI LISTA"><i class="fas fa-plus"></i></button>
                                        @else 

                                        @endif
                                   
                                    </div>
                                    <div class="trailer{{$datos6->tituloSinEspacios}}" id="trailer">
                                        <video id="video{{$datos6->tituloSinEspacios}}" src="Videos/{{$datos6->tituloSinEspacios}}.mp4" controls="true"></video>
                                        <img src="Imagenes/close.png" class="close" onclick="cerrarTrailer2(`{{$datos6->tituloSinEspacios}}`);">
                                    </div>
                                    <div class="masinfo" id="masinfo{{$datos6->tituloSinEspacios}}">
                                        <img src="Imagenes/close.png" class="close" onclick="verMasInfo2(`{{$datos6->tituloSinEspacios}}`);">
                                        <div class="contenido">
                                            <div class="titulo">
                                                <h2>{{$datos6->titulo}}</h2>
                                            </div>
                                            <div class="sinopsis">
                                                {{$datos6->sinopsis}}
                                            </div>
                                            <div class="anio">
                                                Año: {{$datos6->anio}}
                                            </div>
                                            <div class="duracion">
                                                Temporadas: {{$datos6->temporadas}}
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        @endif
                        </div>
                    </div>
    
                    <button role="button" id="flecha-derecha6" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function() {
            $('.menus').mouseenter(function (){
                $(".menu2").show("slide", { direction: "left" }, 300);
                $(".contenido").css('margin-left', '5%');
                //$(".menu").toggle('slide');
            });  

            $('.menus').mouseleave(function (){
                $(".menu2").hide("slide", { direction: "left" }, 300);
                $(".contenido").css('margin-left', '0%');
                //$(".menu").toggle('slide');
            });

            $('.opcion1').mouseenter(function (){
                $("#concierto").attr("src","Imagenes/prueba.gif");
            });  

            $('.opcion1').mouseleave(function (){
                $("#concierto").attr("src","Imagenes/prueba.jpg");
            });  

            $('.opcion2').mouseenter(function (){
                $("#cine").attr("src","Imagenes/cine.gif");
            });  

            $('.opcion2').mouseleave(function (){
                $("#cine").attr("src","Imagenes/cine.jpg");
            }); 

            $('.pelicula', this).mouseenter(function (){
                $('.botoncarousel', this).fadeIn(500);
                $('.botoncarousel2', this).fadeIn(500);
                $('.botoncarousel3', this).fadeIn(500);
            });

            $('.pelicula', this).mouseleave(function (){
                $('.botoncarousel', this).fadeOut();
                $('.botoncarousel2', this).fadeOut();
                $('.botoncarousel3', this).fadeOut();
            });

            $('.pelicula3', this).mouseenter(function (){
                $('.botoncarousel', this).fadeIn(500);
                $('.botoncarousel2', this).fadeIn(500);
                $('.botoncarousel3', this).fadeIn(500);
            });

            $('.pelicula3', this).mouseleave(function (){
                $('.botoncarousel', this).fadeOut();
                $('.botoncarousel2', this).fadeOut();
                $('.botoncarousel3', this).fadeOut();
            });

            $('.pelicula5', this).mouseenter(function (){
                $('.botoncarousel', this).fadeIn(500);
                $('.botoncarousel2', this).fadeIn(500);
                $('.botoncarousel3', this).fadeIn(500);
            });

            $('.pelicula5', this).mouseleave(function (){
                $('.botoncarousel', this).fadeOut();
                $('.botoncarousel2', this).fadeOut();
                $('.botoncarousel3', this).fadeOut();
            });

            $('.pelicula2', this).mouseenter(function (){
                $('.botoncarousel', this).fadeIn(500);
                $('.botoncarousel2', this).fadeIn(500);
                $('.botoncarousel3', this).fadeIn(500);
            });

            $('.pelicula2', this).mouseleave(function (){
                $('.botoncarousel', this).fadeOut();
                $('.botoncarousel2', this).fadeOut();
                $('.botoncarousel3', this).fadeOut();
            });

            $('.pelicula6', this).mouseenter(function (){
                $('.botoncarousel', this).fadeIn(500);
                $('.botoncarousel2', this).fadeIn(500);
                $('.botoncarousel3', this).fadeIn(500);
            });

            $('.pelicula6', this).mouseleave(function (){
                $('.botoncarousel', this).fadeOut();
                $('.botoncarousel2', this).fadeOut();
                $('.botoncarousel3', this).fadeOut();
            });

            $('.pelicula4', this).mouseenter(function (){
                $('.botoncarousel', this).fadeIn(500);
                $('.botoncarousel2', this).fadeIn(500);
                $('.botoncarousel3', this).fadeIn(500);
            });

            $('.pelicula4', this).mouseleave(function (){
                $('.botoncarousel', this).fadeOut();
                $('.botoncarousel2', this).fadeOut();
                $('.botoncarousel3', this).fadeOut();
            });



        });
        

        function verTrailerPrincipal(){
            var trailer= document.querySelector('.trailer');
            var video= document.getElementById('video');
            trailer.classList.toggle('active');
            video.currentTime = 0;
            video.pause();
            $('#flecha-izquierda').css('z-index', '0');
            $('#flecha-derecha').css('z-index', '0');
            $('#flecha-izquierda3').css('z-index', '0');
            $('#flecha-derecha3').css('z-index', '0');
            $('#flecha-izquierda5').css('z-index', '0');
            $('#flecha-derecha5').css('z-index', '0');
        }

        function verTrailerPrincipal2(){
            var trailer= document.querySelector('.trailer2');
            var video= document.getElementById('video2');
            trailer.classList.toggle('active');
            video.currentTime = 0;
            video.pause();
            $('#flecha-izquierda2').css('z-index', '0');
            $('#flecha-derecha2').css('z-index', '0');
            $('#flecha-izquierda4').css('z-index', '0');
            $('#flecha-derecha4').css('z-index', '0');
            $('#flecha-izquierda6').css('z-index', '0');
            $('#flecha-derecha6').css('z-index', '0');
        }

        function verMasInfoPrincipal(){
            var info= document.querySelector(`.masinfo`);
            info.classList.toggle('active');
            $('#flecha-izquierda').css('z-index', '0');
            $('#flecha-derecha').css('z-index', '0');
            $('#flecha-izquierda3').css('z-index', '0');
            $('#flecha-derecha3').css('z-index', '0');
            $('#flecha-izquierda5').css('z-index', '0');
            $('#flecha-derecha5').css('z-index', '0');
        }

        function verMasInfoPrincipal2(){
            var info= document.querySelector(`#masinfo2`);
            info.classList.toggle('active');
            $('#flecha-izquierda2').css('z-index', '0');
            $('#flecha-derecha2').css('z-index', '0');
            $('#flecha-izquierda4').css('z-index', '0');
            $('#flecha-derecha4').css('z-index', '0');
            $('#flecha-izquierda6').css('z-index', '0');
            $('#flecha-derecha6').css('z-index', '0');
        }

        

        function trailer(titulo){
            var trailer= document.querySelector(`.trailer${titulo}`);
            trailer.classList.toggle('active');
            $('#flecha-izquierda').css('z-index', '0');
            $('#flecha-derecha').css('z-index', '0');
            $('#flecha-izquierda3').css('z-index', '0');
            $('#flecha-derecha3').css('z-index', '0');
            $('#flecha-izquierda5').css('z-index', '0');
            $('#flecha-derecha5').css('z-index', '0');
        }

        function cerrarTrailer(titulo){
            var video= document.getElementById(`video${titulo}`);
            var trailer= document.querySelector(`.trailer${titulo}`);
            trailer.classList.toggle('active');
            video.currentTime = 0;
            video.pause();
            $('#flecha-izquierda').css('z-index', '1');
            $('#flecha-derecha').css('z-index', '1');
            $('#flecha-izquierda3').css('z-index', '1');
            $('#flecha-derecha3').css('z-index', '1');
            $('#flecha-izquierda5').css('z-index', '1');
            $('#flecha-derecha5').css('z-index', '1');
        }

        
        function verMasInfo(titulo){
            var info= document.querySelector(`#masinfo${titulo}`);
            info.classList.toggle('active');
            $('#flecha-izquierda').css('z-index', '0');
            $('#flecha-derecha').css('z-index', '0');
            $('#flecha-izquierda3').css('z-index', '0');
            $('#flecha-derecha3').css('z-index', '0');
            $('#flecha-izquierda5').css('z-index', '0');
            $('#flecha-derecha5').css('z-index', '0');
        }

        function trailer2(titulo){
            var trailer= document.querySelector(`.trailer${titulo}`);
            trailer.classList.toggle('active');
            $('#flecha-izquierda2').css('z-index', '0');
            $('#flecha-derecha2').css('z-index', '0');
            $('#flecha-izquierda4').css('z-index', '0');
            $('#flecha-derecha4').css('z-index', '0');
            $('#flecha-izquierda6').css('z-index', '0');
            $('#flecha-derecha6').css('z-index', '0');
        }

        function cerrarTrailer2(titulo){
        var video= document.getElementById(`video${titulo}`);
        var trailer= document.querySelector(`.trailer${titulo}`);
        trailer.classList.toggle('active');
        video.currentTime = 0;
        video.pause();
        $('#flecha-izquierda2').css('z-index', '1');
        $('#flecha-derecha2').css('z-index', '1');
        $('#flecha-izquierda4').css('z-index', '1');
        $('#flecha-derecha4').css('z-index', '1');
        $('#flecha-izquierda6').css('z-index', '1');
        $('#flecha-derecha6').css('z-index', '1');
        }

        
        function verMasInfo2(titulo){
            var info= document.querySelector(`#masinfo${titulo}`);
            info.classList.toggle('active');
            $('#flecha-izquierda2').css('z-index', '0');
            $('#flecha-derecha2').css('z-index', '0');
            $('#flecha-izquierda4').css('z-index', '0');
            $('#flecha-derecha4').css('z-index', '0');
            $('#flecha-izquierda6').css('z-index', '0');
            $('#flecha-derecha6').css('z-index', '0');
        }



        const fila = document.querySelector('.contenedor-carousel');
        const peliculas = document.querySelectorAll('.pelicula');

        const flechaIzquierda = document.getElementById('flecha-izquierda');
        const flechaDerecha = document.getElementById('flecha-derecha');

        // ? ----- ----- Event Listener para la flecha derecha. ----- -----
        flechaDerecha.addEventListener('click', () => {
            fila.scrollLeft += fila.offsetWidth;

            const indicadorActivo = document.querySelector('.indicadores .activo');
            if(indicadorActivo.nextSibling){
                indicadorActivo.nextSibling.classList.add('activo');
                indicadorActivo.classList.remove('activo');
            }
        });

        // ? ----- ----- Event Listener para la flecha izquierda. ----- -----
        flechaIzquierda.addEventListener('click', () => {
            fila.scrollLeft -= fila.offsetWidth;

            const indicadorActivo = document.querySelector('.indicadores .activo');
            if(indicadorActivo.previousSibling){
                indicadorActivo.previousSibling.classList.add('activo');
                indicadorActivo.classList.remove('activo');
            }
        });

        // ? ----- ----- Paginacion ----- -----
        const numeroPaginas = Math.ceil(peliculas.length / 5);
        for(let i = 0; i < numeroPaginas; i++){
            const indicador = document.createElement('button');

            if(i === 0){
                indicador.classList.add('activo');
            }

            document.querySelector('.indicadores').appendChild(indicador);
            indicador.addEventListener('click', (e) => {
                fila.scrollLeft = i * fila.offsetWidth;

                document.querySelector('.indicadores .activo').classList.remove('activo');
                e.target.classList.add('activo');
            });
        }

        // ? ----- ----- Hover ----- -----
        peliculas.forEach((pelicula) => {
            pelicula.addEventListener('mouseenter', (e) => {
                const elemento = e.currentTarget;
                setTimeout(() => {
                    peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
                    elemento.classList.add('hover');
                }, 300);
            });
        });

        fila.addEventListener('mouseleave', () => {
            peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
        });



        const fila2 = document.querySelector('.contenedor-carousel2');
        const peliculas2 = document.querySelectorAll('.pelicula2');

        const flechaIzquierda2 = document.getElementById('flecha-izquierda2');
        const flechaDerecha2 = document.getElementById('flecha-derecha2');

        // ? ----- ----- Event Listener para la flecha derecha. ----- -----
        flechaDerecha2.addEventListener('click', () => {
            fila2.scrollLeft += fila2.offsetWidth;

            const indicadorActivo2 = document.querySelector('.indicadores2 .activo');
            if(indicadorActivo2.nextSibling){
                indicadorActivo2.nextSibling.classList.add('activo');
                indicadorActivo2.classList.remove('activo');
            }
        });

        // ? ----- ----- Event Listener para la flecha izquierda. ----- -----
        flechaIzquierda2.addEventListener('click', () => {
            fila2.scrollLeft -= fila2.offsetWidth;

            const indicadorActivo2 = document.querySelector('.indicadores2 .activo');
            if(indicadorActivo2.previousSibling){
                indicadorActivo2.previousSibling.classList.add('activo');
                indicadorActivo2.classList.remove('activo');
            }
        });

        // ? ----- ----- Paginacion ----- -----
        const numeroPaginas2 = Math.ceil(peliculas2.length / 5);
        for(let i = 0; i < numeroPaginas2; i++){
            const indicador2 = document.createElement('button');

            if(i === 0){
                indicador2.classList.add('activo');
            }

            document.querySelector('.indicadores2').appendChild(indicador2);
            indicador2.addEventListener('click', (e) => {
                fila2.scrollLeft = i * fila2.offsetWidth;

                document.querySelector('.indicadores2 .activo').classList.remove('activo');
                e.target.classList.add('activo');
            });
        }

        // ? ----- ----- Hover ----- -----
        peliculas2.forEach((pelicula2) => {
            pelicula2.addEventListener('mouseenter', (e) => {
                const elemento2 = e.currentTarget;
                setTimeout(() => {
                    peliculas2.forEach(pelicula2 => pelicula2.classList.remove('hover'));
                    elemento2.classList.add('hover');
                }, 300);
            });
        });

        fila2.addEventListener('mouseleave', () => {
            peliculas2.forEach(pelicula2 => pelicula2.classList.remove('hover'));
        });




        const fila3 = document.querySelector('.contenedor-carousel3');
        const peliculas3 = document.querySelectorAll('.pelicula3');

        const flechaIzquierda3 = document.getElementById('flecha-izquierda3');
        const flechaDerecha3 = document.getElementById('flecha-derecha3');

        // ? ----- ----- Event Listener para la flecha derecha. ----- -----
        flechaDerecha3.addEventListener('click', () => {
            fila3.scrollLeft += fila3.offsetWidth;

            const indicadorActivo3 = document.querySelector('.indicadores3 .activo');
            if(indicadorActivo3.nextSibling){
                indicadorActivo3.nextSibling.classList.add('activo');
                indicadorActivo3.classList.remove('activo');
            }
        });

        // ? ----- ----- Event Listener para la flecha izquierda. ----- -----
        flechaIzquierda3.addEventListener('click', () => {
            fila3.scrollLeft -= fila3.offsetWidth;

            const indicadorActivo3 = document.querySelector('.indicadores3 .activo');
            if(indicadorActivo3.previousSibling){
                indicadorActivo3.previousSibling.classList.add('activo');
                indicadorActivo3.classList.remove('activo');
            }
        });

        // ? ----- ----- Paginacion ----- -----
        const numeroPaginas3 = Math.ceil(peliculas3.length / 5);
        for(let i = 0; i < numeroPaginas3; i++){
            const indicador3 = document.createElement('button');

            if(i === 0){
                indicador3.classList.add('activo');
            }

            document.querySelector('.indicadores3').appendChild(indicador3);
            indicador3.addEventListener('click', (e) => {
                fila3.scrollLeft = i * fila3.offsetWidth;

                document.querySelector('.indicadores3 .activo').classList.remove('activo');
                e.target.classList.add('activo');
            });
        }

        // ? ----- ----- Hover ----- -----
        peliculas3.forEach((pelicula3) => {
            pelicula3.addEventListener('mouseenter', (e) => {
                const elemento3 = e.currentTarget;
                setTimeout(() => {
                    peliculas3.forEach(pelicula3 => pelicula3.classList.remove('hover'));
                    elemento3.classList.add('hover');
                }, 300);
            });
        });

        fila3.addEventListener('mouseleave', () => {
            peliculas3.forEach(pelicula3 => pelicula3.classList.remove('hover'));
        });



        const fila4 = document.querySelector('.contenedor-carousel4');
        const peliculas4 = document.querySelectorAll('.pelicula4');

        const flechaIzquierda4 = document.getElementById('flecha-izquierda4');
        const flechaDerecha4 = document.getElementById('flecha-derecha4');

        // ? ----- ----- Event Listener para la flecha derecha. ----- -----
        flechaDerecha4.addEventListener('click', () => {
            fila4.scrollLeft += fila4.offsetWidth;

            const indicadorActivo4 = document.querySelector('.indicadores4 .activo');
            if(indicadorActivo4.nextSibling){
                indicadorActivo4.nextSibling.classList.add('activo');
                indicadorActivo4.classList.remove('activo');
            }
        });

        // ? ----- ----- Event Listener para la flecha izquierda. ----- -----
        flechaIzquierda4.addEventListener('click', () => {
            fila4.scrollLeft -= fila4.offsetWidth;

            const indicadorActivo4 = document.querySelector('.indicadores4 .activo');
            if(indicadorActivo4.previousSibling){
                indicadorActivo4.previousSibling.classList.add('activo');
                indicadorActivo4.classList.remove('activo');
            }
        });

        // ? ----- ----- Paginacion ----- -----
        const numeroPaginas4 = Math.ceil(peliculas4.length / 5);
        for(let i = 0; i < numeroPaginas4; i++){
            const indicador4 = document.createElement('button');

            if(i === 0){
                indicador4.classList.add('activo');
            }

            document.querySelector('.indicadores4').appendChild(indicador4);
            indicador4.addEventListener('click', (e) => {
                fila4.scrollLeft = i * fila4.offsetWidth;

                document.querySelector('.indicadores4 .activo').classList.remove('activo');
                e.target.classList.add('activo');
            });
        }

        // ? ----- ----- Hover ----- -----
        peliculas4.forEach((pelicula4) => {
            pelicula4.addEventListener('mouseenter', (e) => {
                const elemento4 = e.currentTarget;
                setTimeout(() => {
                    peliculas4.forEach(pelicula4 => pelicula4.classList.remove('hover'));
                    elemento4.classList.add('hover');
                }, 300);
            });
        });

        fila4.addEventListener('mouseleave', () => {
            peliculas4.forEach(pelicula4 => pelicula4.classList.remove('hover'));
        });


        const fila5 = document.querySelector('.contenedor-carousel5');
        const peliculas5 = document.querySelectorAll('.pelicula5');

        const flechaIzquierda5 = document.getElementById('flecha-izquierda5');
        const flechaDerecha5 = document.getElementById('flecha-derecha5');

        // ? ----- ----- Event Listener para la flecha derecha. ----- -----
        flechaDerecha5.addEventListener('click', () => {
            fila5.scrollLeft += fila5.offsetWidth;

            const indicadorActivo5 = document.querySelector('.indicadores5 .activo');
            if(indicadorActivo5.nextSibling){
                indicadorActivo5.nextSibling.classList.add('activo');
                indicadorActivo5.classList.remove('activo');
            }
        });

        // ? ----- ----- Event Listener para la flecha izquierda. ----- -----
        flechaIzquierda5.addEventListener('click', () => {
            fila5.scrollLeft -= fila5.offsetWidth;

            const indicadorActivo5 = document.querySelector('.indicadores5 .activo');
            if(indicadorActivo5.previousSibling){
                indicadorActivo5.previousSibling.classList.add('activo');
                indicadorActivo5.classList.remove('activo');
            }
        });

        // ? ----- ----- Paginacion ----- -----
        const numeroPaginas5 = Math.ceil(peliculas5.length / 5);
        for(let i = 0; i < numeroPaginas5; i++){
            const indicador5 = document.createElement('button');

            if(i === 0){
                indicador5.classList.add('activo');
            }

            document.querySelector('.indicadores5').appendChild(indicador5);
            indicador5.addEventListener('click', (e) => {
                fila5.scrollLeft = i * fila5.offsetWidth;

                document.querySelector('.indicadores5 .activo').classList.remove('activo');
                e.target.classList.add('activo');
            });
        }

        // ? ----- ----- Hover ----- -----
        peliculas5.forEach((pelicula5) => {
            pelicula5.addEventListener('mouseenter', (e) => {
                const elemento5 = e.currentTarget;
                setTimeout(() => {
                    peliculas5.forEach(pelicula5 => pelicula5.classList.remove('hover'));
                    elemento5.classList.add('hover');
                }, 300);
            });
        });

        fila5.addEventListener('mouseleave', () => {
            peliculas5.forEach(pelicula5 => pelicula5.classList.remove('hover'));
        });

        const fila6 = document.querySelector('.contenedor-carousel6');
        const peliculas6 = document.querySelectorAll('.pelicula6');

        const flechaIzquierda6 = document.getElementById('flecha-izquierda6');
        const flechaDerecha6 = document.getElementById('flecha-derecha6');

        // ? ----- ----- Event Listener para la flecha derecha. ----- -----
        flechaDerecha6.addEventListener('click', () => {
            fila6.scrollLeft += fila6.offsetWidth;

            const indicadorActivo6 = document.querySelector('.indicadores6 .activo');
            if(indicadorActivo6.nextSibling){
                indicadorActivo6.nextSibling.classList.add('activo');
                indicadorActivo6.classList.remove('activo');
            }
        });

        // ? ----- ----- Event Listener para la flecha izquierda. ----- -----
        flechaIzquierda6.addEventListener('click', () => {
            fila6.scrollLeft -= fila6.offsetWidth;

            const indicadorActivo6 = document.querySelector('.indicadores6 .activo');
            if(indicadorActivo6.previousSibling){
                indicadorActivo6.previousSibling.classList.add('activo');
                indicadorActivo6.classList.remove('activo');
            }
        });

        // ? ----- ----- Paginacion ----- -----
        const numeroPaginas6 = Math.ceil(peliculas6.length / 5);
        for(let i = 0; i < numeroPaginas6; i++){
            const indicador6 = document.createElement('button');

            if(i === 0){
                indicador6.classList.add('activo');
            }

            document.querySelector('.indicadores6').appendChild(indicador6);
            indicador6.addEventListener('click', (e) => {
                fila6.scrollLeft = i * fila6.offsetWidth;

                document.querySelector('.indicadores6 .activo').classList.remove('activo');
                e.target.classList.add('activo');
            });
        }

        // ? ----- ----- Hover ----- -----
        peliculas6.forEach((pelicula6) => {
            pelicula6.addEventListener('mouseenter', (e) => {
                const elemento6 = e.currentTarget;
                setTimeout(() => {
                    peliculas6.forEach(pelicula6 => pelicula6.classList.remove('hover'));
                    elemento6.classList.add('hover');
                }, 300);
            });
        });

        fila6.addEventListener('mouseleave', () => {
            peliculas6.forEach(pelicula6 => pelicula6.classList.remove('hover'));
        });


    </script>
</body>
</html>