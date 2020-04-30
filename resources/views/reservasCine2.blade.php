<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter</title>
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/d2b83bcd28.js" crossorigin="anonymous"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js"></script>

</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background-image: url('Imagenes/fondoharrypotter2.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'Bree Serif', serif;

    }

    .formulario{
        position: absolute;
        background-color: rgba(255,255,255,0.15);
        width: 40vw;
        height: 90vh;
        margin-top: 5vh;
        margin-left: 3vw;
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,1);
        border-radius: 15px; 
        border: 3px solid white;

    }

    .titulo{
        position: relative;
        width: 100%;
        color: white;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000, 0 0 25px #000, 0 0 30px #000, 0 0 35px #000, 0 0 40px #000;
        font-size: 2.2em;
        letter-spacing: 0.1em;
        text-align: center;
    }

    .formulario p{
        position: relative;
        margin-left: 3vw;
        font-family: Arial, Helvetica, sans-serif;
    }

    .formulario label{
        font-size: 1.8em;
        font-weight: bold;
        color: white;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000;
    }


    .formulario input{
        background: transparent;
        border: none;
        outline: none;
        color: white;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000;
        margin-left: 1vw;
        font-size: 1.7em;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }

    .btncomprar{
        position: absolute;
        margin-top: 3vh; 
        margin-left: 25%;
        width: 50%;
        padding: 1%;
        font-size: 2em;
        background-color: rgba(23, 23, 23, 0.9);
        color: whitesmoke;
        border: none;
        border-top: 5px solid #c9c9c9;
        border-bottom: 5px solid #c9c9c9;
        cursor: pointer;
        text-align: center;
        font-family: 'Bree Serif', serif;
        pointer-events: none;

    }

    .encabezado{
        position: absolute;
        width: 46vw;
        height: 8vh;
        margin-left: 50vw;
        margin-top: 5vh;
        background-color: rgb(255, 255, 255,0.2);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        border-radius: 15px; 
        color: whitesmoke;
        text-align: center;   
        border: 3px solid rgb(82, 7, 23);
    }

    .encabezado h3{
        position: absolute;
        top: 7%;
        left: 5%;
        color: white;
    }

     /* SELECT DIA */
     .box{
        position: absolute;
        top: 50%;
        left: 46%;
        transform: translate(-50%, -50%);
    }

    .box:hover{
        border: 3px solid white;
    }

    .box select{
        background-color: rgb(52, 7, 23);
        color: white;
        padding: 10px;
        width: 240px;
        height: 50px;
        border: none;
        font-size: 20px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.5);
        -webkit-appearance: button;
        outline: none;
    }

    .box:before{
        content: '\f358';
        font-family: "Font Awesome 5 Free";
        position: absolute;
        top: 0;
        right: 0;
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 50px;
        color: #fff;
        font-size: 28px;
        background-color: rgb(82, 7, 23);
        pointer-events: none;
    }

    .box:hover:before{
        background-color: rgb(152, 7, 23);
    }

     /* SELECT HORA */
     .box2{
        position: absolute;
        top: 50%;
        left: 76%;
        transform: translate(-50%, -50%);
    }

    .box2:hover{
        border: 3px solid white;
    }

    .box2 select{
        background-color: rgb(52, 7, 23);
        color: white;
        padding: 10px;
        width: 240px;
        height: 50px;
        border: none;
        font-size: 20px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.5);
        -webkit-appearance: button;
        outline: none;
    }

    .box2:before{
        content: '\f358';
        font-family: "Font Awesome 5 Free";
        position: absolute;
        top: 0;
        right: 0;
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 50px;
        color: #fff;
        font-size: 28px;
        background-color: rgb(82, 7, 23);
        pointer-events: none;
    }

    .box2:hover:before{
        background-color: rgb(152, 7, 23);
    }

    /* Tick */
    .tick{
        position: absolute;
        top: 50%;
        left: 94.5%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        background-color: rgb(52, 7, 23);
    }

    .tick:hover{
        border: 3px solid rgb(255, 255, 255);
    }

    .tick i{
        margin-top: 1vh;
        font-size: 2em;
    }
    .selectorSillas{
        position: absolute;
        padding: 2%;
        padding-top: 3%;
        padding-right: 1%;
        width: 43vw;
        height: 56vh;
        margin-left: 50vw;
        margin-top: 14.5vh;
        background-color: rgb(255, 255, 255,0.2);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,1);
        border-radius: 15px; 
        color: whitesmoke;
        border: 3px solid rgb(82, 7, 23);
        user-select: none;
        pointer-events: none;
    }

    .sillas{
        position: relative;
        display: inline;
        margin-left: 0vw;
    }

    .sillas img{
        width: 4.11%;
        cursor: pointer;
    }

    [id*="butaca"] {
        display: inline;
    }

    .alfombra{
        position: absolute;
        width: 2vw;
        height: 48vh;
        background-color: darkred;
        margin-left: 47.5%;
    }

    .pantalla{
        position: absolute;
        width: 40vw;
        height: 7vh;
        background-color: whitesmoke;
        border: 2px solid #222;
        margin-left: 3%;
        margin-top: 58%;
    }

    .pantalla h2{
        text-align: center;
        font-family: 'Bree Serif', serif;
        margin-top: 1.5vh;
        color: black;
    }

    .exit{
        position: absolute;
        margin-top: -4vh;
        margin-left: 42.5%;  
    }

    .exit img{
        width: 12%;
    }

    .info{
        position: absolute;
        width: 46vw;
        margin-left: 50vw;
        margin-top: 82vh;
        background-color: rgb(255, 255, 255,0.2);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        border-radius: 15px; 
        color: whitesmoke;
        border: 3px solid rgb(82, 7, 23);

    }

    .info h3{
        display: inline-block;
        font-size: 1.2em;
        font-family: 'Bree Serif', serif;
        justify-content: center;
        margin-right: 2.5vw;
        margin-left: 2.5vw;
    }

    .cuadroGranate{
        margin-top: -2.3vh;
        margin-left: 7vw;
        width: 20px;
        height: 20px;
        background-color: rgb(52, 7, 23);
        border: 2px solid black;
    }

    .cuadroRojo{
        margin-top: -2.3vh;
        margin-left: 8.5vw;
        width: 20px;
        height: 20px;
        background-color: rgb(255, 0, 0);
        border: 2px solid black;
    }

    .cuadroVerde{
        margin-top: -2.3vh;
        margin-left: 10.5vw;
        width: 20px;
        height: 20px;
        background-color: rgb(50, 150, 0);
        border: 2px solid black;
    }

    .confirmar{
        position: absolute;
        top: 92%;
        left: 64.5%;
        width: 8vw;
        height: 4vh;
        background-color: rgb(50, 150, 0);
        border: 3px solid rgb(82, 7, 23);
        border-radius: 15px;
        font-size: 1.5em;
        color: white;
        font-weight: bold;
        text-align: center;
    }

    .cancelar{
        position: absolute;
        top: 92%;
        left: 63.8%;
        width: 8vw;
        height: 4vh;
        background-color: rgb(255, 0, 0);
        border: 3px solid rgb(82, 7, 23);
        border-radius: 15px;
        font-size: 1.5em;
        color: white;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
    }

    .volver{
        position: absolute;
        top: 92%;
        left: 75%;
        width: 8vw;
        height: 4vh;
        background-color: royalblue;
        border: 3px solid rgb(82, 7, 23);
        border-radius: 15px;
        font-size: 1.5em;
        color: white;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
    }

    #a p{
        position: absolute;
        margin-top: 0vw;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #b p{
        position: absolute;
        margin-top: 4vh;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #c p{
        position: absolute;
        margin-top: 8vh;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #d p{
        position: absolute;
        margin-top: 12vh;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #e p{
        position: absolute;
        margin-top: 16vh;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #f p{
        position: absolute;
        margin-top: 20vh;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #g p{
        position: absolute;
        margin-top: 24vh;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #h p{
        position: absolute;
        margin-top: 28vh;
        margin-left: -23px;
        font-size: 1.2em;
    }
 


    #i p{
        position: absolute;
        margin-top: 32vh;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #j p{

        position: absolute;
        margin-top: 36vh;
        margin-left: -23px;
        font-size: 1.2em;
    }
    #k p{
        position: absolute;
        margin-top: 40vh;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #l p{
        position: absolute;
        margin-top: 44vh;
        margin-left: -23px;
        font-size: 1.2em;
    }

    #s01 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 0.7vh;
        font-size: 1.2em;
    }

    #s02 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 4.65vh;

        font-size: 1.2em;
    }
    #s03 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 8.6vh;

        font-size: 1.2em;
    }

    #s04 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 12.55vh;

        font-size: 1.2em;
    }

    #s05 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 16.50vh;

        font-size: 1.2em;
    }

    #s06 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 20.45vh;
        font-size: 1.2em;
    }

    #s07 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 24.40vh;
        font-size: 1.2em;
    }

    #s08 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 28.35vh;
        font-size: 1.2em;
    }

    #s09 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 32.30vh;
        font-size: 1.2em;
    }

    #s10 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 36.25vh;
        font-size: 1.2em;
    }
    #s11 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 48vh;
        font-size: 1.2em;
    }

    #s12 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 51.95vh;
        font-size: 1.2em;
    }

    #s13 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 55.90vh;
        font-size: 1.2em;
    }

    #s14 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 59.85vh;
        font-size: 1.2em;
    }
    #s15 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 63.80vh;
        font-size: 1.2em;
    }

    #s16 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 67.75vh;
        font-size: 1.2em;
    }

    #s17 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 71.70vh;
        font-size: 1.2em;
    }

    #s18 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 75.65vh;
        font-size: 1.2em;
    }
    #s19 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 79.60vh;
        font-size: 1.2em;
    }

    #s20 p{
        position: absolute;
        margin-top: -3.5vh;
        margin-left: 83.55vh;
        font-size: 1.2em;
    }


    #label1{
        color:white;
    }

    #botonIr{
        position: absolute;
        margin-left: 20%;
    }

    /*FORMULARIO CARD*/
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,900,700,500);

    .fondoNegro{
        display: none;
        margin: 0 auto;
        width: 100vw;
        height: 100vh;
        z-index: 10;
        position: absolute;
        background-color:rgba(23, 23, 23, 0.9);
    }

    .formularioCompra{
        padding: 60px 0;
        margin: 0 auto;
        margin-top: 18vh;
        width: 400px;
    }

  
    .form-container {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transform: scale(1.3);
    }
    .card-wrapper {
        background-color: rgb(245, 76, 76);
        width: 100%;
        display: flex;

    }
    .personal-information {
        background-color: rgb(37, 7, 7);
        color: #fff;
        padding: 1px 0;
        text-align: center;

    }
    h1 {
        font-size: 1.3em;
        font-family: "Roboto"
    }
    .form-container input {
        margin: 1px 0;
        padding-left: 3%;
        font-size: 14px;
    }
    .form-container input[type="text"]{
        display: block;
        height: 50px;
        width: 97%;
        border: none;
    }
    .form-container input[type="email"]{
        display: block;
        height: 50px;
        width: 97%;
        border: none;
    }
    .form-container input[type="submit"]{
        display: block;
        height: 60px;
        width: 100%;
        border: none;
        background-color: rgb(70, 0, 0);
        color: #fff;
        margin-top: 0px;
        cursor: pointer;
        font-size: 0.9em;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
    }
    .form-container input[type="submit"]:hover{
        background-color: darkred;
        transition: 0.3s ease;
    }
    #column-left {
        width: 46.8%;
        float: left;
        margin-bottom: 2px;
    }
    #column-right {
        width: 46.8%;
        float: right;
    }

    @media only screen and (max-width: 480px){
    body {
        width: 100%;
        margin: 0 auto;
    }
    .form-container {
        margin: 0 2%;
    }
    .form-container input {
        font-size: 1em;
    }
    .form-container #input-button {
        width: 100%;
    }
    .form-container #input-field {
        width: 96.5%;
    }
    h1 {
        font-size: 1.2em;
    }
    .form-container input {
        margin: 2px 0;
    }
    .form-container button[type="submit"]{
        height: 50px;
    }
    #column-left {
        width: 96.5%;
        display: block;
        float: none;
    }
    #column-right {
        width: 96.5%;
        display: block;
        float: none;
    }
    }

    .form-container button[type="submit"]{
        display: block;
        height: 60px;
        width: 100%;
        border: none;
        background-color: rgb(70, 0, 0);
        color: #fff;
        margin-top: 0px;
        cursor: pointer;
        font-size: 0.9em;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
    }
    .form-container button[type="submit"]:hover{
        background-color: darkred;
        transition: 0.3s ease;
    }
    
    .botonCerrar{
        position: absolute;
        top: -5px;
        right: 30px;
        transition: all 200ms;
        font-size: 70px;
        font-weight: bold;
        text-decoration: none;
        color: #fff;
        cursor: pointer;
    }

    .ticket{
        width: 700px;
        height: 200px;
        background-image: url(Imagenes/ticket.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        filter: grayscale(0.25) ;
        margin-left: 2vw;
    }

    .borde{
        position: absolute;
        margin: auto;
        top: 0.4vh;
        left: 0.28vw;
        width: 680px;
        height: 182px;
        border: 5px solid white;

    }

    #linea{
        position: absolute;
        border-left: 4px dashed whitesmoke;
        height: 200px;
        margin-top: -21.3vh;
        margin-left: 27vw;
    }

    #barra{
        position: absolute;
        margin-top: 2.8vh;
        margin-left: 30.5vw;
        z-index: 5;
    }

    .unuso{
        position: absolute;
        font-family: Arial, Helvetica, sans-serif;
        position: absolute;
        font-size: 1.1em;
        margin-top: 7vh;
        margin-left: 23vw;
        color: rgb(252, 0, 126);
        text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;         
        transform: rotate(270deg);
        z-index: 5;
    }

    .titulo2{
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 2.5px 0 0 #000, -2.5px 0 0 #000, 0 2.5px 0 #000, 0 -2.5px 0 #000, 1.5px 1.5px #000, -1.5px -1.5px 0 #000, 1.5px -1.5px 0 #000, -1.5px 1.5px 0 #000;         
        position: absolute;
        margin-top: 4vh;
        width: 515px;
        color: rgb(252, 0, 126);
        font-size: 2em;;
    }

    .heavn{
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;         
        position: absolute;
        margin-top: 14vh;
        width: 515px;
        color: rgb(252, 0, 126);
        letter-spacing: 0.6em;
        font-size: 0.8em;
    }

    .fecha{
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;         
        position: absolute;
        margin-top: -0.5vh;
        margin-left: 43vh;
        color: rgb(252, 0, 126);
        font-size: 1.5em;
    }

    .precio{
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;         
        position: absolute;
        margin-top: -0.5vh;
        margin-left: 3vh;
        color: rgb(252, 0, 126);
        font-size: 1.5em;
    }
  

</style>
<script>
 	 
        var counter=0;
         function cambiarColor(id){
            $(`#butaca${id}`).addClass('clicked');
            $(`#butaca${id}`).each(function (){
                if($(`#butaca${id} img`).attr("src") ==  "Imagenes/sillagranate.png"){
                if(counter<6){
                    $(`#butaca${id} img`).attr("src", "Imagenes/sillaverde.png"); 
                    $("#tick").removeClass();
                    $("#tick").addClass("fas fa-ban");
                    $(".tick").css("pointer-events", "none");
                    var idEntrada = $("#idEntrada").val();
                    va = parseInt(idEntrada, 10);
                    var butaca = $("#butaca").val();
                    var fila = $("#fila").val();
                    var dia = $("#dia").val()
                    var hora = $("#hora").val()
                    var int = $("#precio").val();
                    var parseado = parseInt(int, 10);
                    var numEntradas = $("#numEntradas").val();
                    var parseado2 = parseInt(numEntradas, 10);
                    if(dia === "LUNES"){
                        var num = parseado2 + 1;
                        var precio = parseado + 7;
                        $('#numEntradas').val(num);
                        $('#precio').val(precio + '€');
                        $("#butaca").val(butaca + `${id}` + ' ');
                        for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        
                        }else if(dia === "MARTES"){
                            var num = parseado2 + 1;
                            var precio = parseado + 7;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        }else if(dia === "MIERCOLES"){
                            var num = parseado2 + 1;
                            var precio = parseado + 6;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        }else if(dia === "JUEVES"){
                            var num = parseado2 + 1;
                            var precio = parseado + 7;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        }else if(dia === "VIERNES"){
                            var num = parseado2 + 1;
                            var precio = parseado + 8;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                    }else if(dia === "SABADO"){
                            var num = parseado2 + 1;
                            var precio = parseado + 8;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        }else if(dia === "DOMINGO"){
                        var num = parseado2 + 1;
                        var precio = parseado + 8;
                        $('#numEntradas').val(num);
                        $('#precio').val(precio + '€');
                        $("#butaca").val(butaca + `${id}` + ' ');
                        for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                    }
                    
                    counter++;
                }else{
                   
                    $(`#butaca${id}`).removeClass('clicked');
                    
                }

                }else if($(`#butaca${id} img`).attr("src") ==  "Imagenes/sillaazul.png"){
                    if(counter<6){
                        $(`#butaca${id} img`).attr("src", "Imagenes/sillaverde.png"); 
                        $("#tick").removeClass();
                        $("#tick").addClass("fas fa-ban");
                        $(".tick").css("pointer-events", "none");
                        var idEntrada = $("#idEntrada").val();
                        va = parseInt(idEntrada, 10);
                        var butaca = $("#butaca").val();
                        var fila = $("#fila").val();
                        var dia = $("#dia").val();
                        var hora = $("#hora").val();
                        var int = $("#precio").val();
                        var parseado = parseInt(int, 10);
                        var numEntradas = $("#numEntradas").val();
                        var parseado2 = parseInt(numEntradas, 10);
                        if(dia === "LUNES"){
                            var num = parseado2 + 1;
                            var precio = parseado + 7;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        
                        }else if(dia === "MARTES"){
                            var num = parseado2 + 1;
                            var precio = parseado + 7;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        }else if(dia === "MIERCOLES"){
                            var num = parseado2 + 1;
                            var precio = parseado + 6;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        }else if(dia === "JUEVES"){
                            var num = parseado2 + 1;
                            var precio = parseado + 7;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        }else if(dia === "VIERNES"){
                            var num = parseado2 + 1;
                            var precio = parseado + 8;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        }else if(dia === "SABADO"){
                            var num = parseado2 + 1;
                            var precio = parseado + 8;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca + `${id}` + ' ');
                            for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                        }else if(dia === "DOMINGO"){
                        var num = parseado2 + 1;
                        var precio = parseado + 8;
                        $('#numEntradas').val(num);
                        $('#precio').val(precio + '€');
                        $("#butaca").val(butaca + `${id}` + ' ');
                        for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `1` + ' '); 
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `2` + ' '); 
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `3` + ' '); 
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `4` + ' '); 
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `5` + ' '); 
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `6` + ' '); 
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `7` + ' '); 
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `8` + ' '); 
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `9` + ' '); 
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `10` + ' '); 
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `11` + ' '); 
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila + `12` + ' '); 
                                }
                            }
                    }

                        counter++;
                }else{
                  
                    $(`#butaca${id}`).removeClass('clicked');
                 
                }
                }else{
                    counter--;
                    $(`#butaca${id}`).removeClass('clicked');
                    $(`#butaca${id} img`).attr("src", "Imagenes/sillagranate.png");
                    var fila = $("#fila").val();
                    var butaca = $("#butaca").val();
                    var dia = $("#dia").val()
                    var hora = $("#hora").val()
                    var int = $("#precio").val();
                    var parseado = parseInt(int, 10);
                    var numEntradas = $("#numEntradas").val();
                    var parseado2 = parseInt(numEntradas, 10);
                    if(dia === "LUNES"){
                        var num = parseado2 - 1;
                        var precio = parseado - 7;
                        $('#numEntradas').val(num);
                        $('#precio').val(precio + '€');
                        $("#butaca").val(butaca.replace(`${id} `, ''));
                        for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`1 `, ''));
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`2 `, ''));
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`3 `, ''));
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`4 `, ''));
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`5 `, ''));
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`6 `, ''));
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`7 `, ''));
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`8 `, ''));
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`9 `, ''));
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`10 `, ''));
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`11 `, ''));
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`12 `, ''));
                                }
                            }
                          
                    }else if(dia === "MARTES"){
                        var num = parseado2 - 1;
                        var precio = parseado - 7;
                        $('#numEntradas').val(num);
                        $('#precio').val(precio + '€');
                        $("#butaca").val(butaca.replace(`${id} `, ''));
                        for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`1 `, ''));
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`2 `, ''));
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`3 `, ''));
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`4 `, ''));
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`5 `, ''));
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`6 `, ''));
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`7 `, ''));
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`8 `, ''));
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`9 `, ''));
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`10 `, ''));
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`11 `, ''));
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`12 `, ''));
                                }
                            }
                            
                    }else if(dia === "MIERCOLES"){
                        var num = parseado2 - 1;
                        var precio = parseado - 6;
                        $('#numEntradas').val(num);
                        $('#precio').val(precio + '€');
                        $("#butaca").val(butaca.replace(`${id} `, ''));
                        for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`1 `, ''));
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`2 `, ''));
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`3 `, ''));
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`4 `, ''));
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`5 `, ''));
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`6 `, ''));
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`7 `, ''));
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`8 `, ''));
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`9 `, ''));
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`10 `, ''));
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`11 `, ''));
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`12 `, ''));
                                }
                            }
                    }else if(dia === "JUEVES"){
                        var num = parseado2 - 1;
                        var precio = parseado - 7;
                        $('#numEntradas').val(num);
                        $('#precio').val(precio + '€');
                        $("#butaca").val(butaca.replace(`${id} `, ''));
                        for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`1 `, ''));
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`2 `, ''));
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`3 `, ''));
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`4 `, ''));
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`5 `, ''));
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`6 `, ''));
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`7 `, ''));
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`8 `, ''));
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`9 `, ''));
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`10 `, ''));
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`11 `, ''));
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`12`, ''));
                                }
                            }
                    }else if(dia === "VIERNES"){
                        var num = parseado2 - 1;
                        var precio = parseado - 8;
                        $('#numEntradas').val(num);
                        $('#precio').val(precio + '€');
                        $("#butaca").val(butaca.replace(`${id} `, ''));
                        for(var n=0; n<21; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`1 `, ''));
                                }
                            }
                            for(var n=21; n<41; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`2 `, ''));
                                }
                            }
                            for(var n=41; n<61; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`3 `, ''));
                                }
                            }
                            for(var n=61; n<81; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`4 `, ''));
                                }
                            }
                            for(var n=81; n<101; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`5 `, ''));
                                }
                            }
                            for(var n=101; n<121; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`6 `, ''));
                                }
                            }
                            for(var n=121; n<141; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`7 `, ''));
                                }
                            }
                            for(var n=141; n<161; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`8 `, ''));
                                }
                            }
                            for(var n=161; n<181; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`9 `, ''));
                                }
                            }
                            for(var n=181; n<201; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`10 `, ''));
                                }
                            }
                            for(var n=201; n<221; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`11 `, ''));
                                }
                            }
                            for(var n=221; n<241; n++){
                                if(n==`${id}`){
                                    $("#fila").val(fila.replace(`12 `, ''));
                                }
                            }
                        }else if(dia === "SABADO"){
                            var num = parseado2 - 1;
                            var precio = parseado - 8;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca.replace(`${id} `, ''));
                            for(var n=0; n<21; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`1 `, ''));
                                    }
                                }
                                for(var n=21; n<41; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`2 `, ''));
                                    }
                                }
                                for(var n=41; n<61; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`3 `, ''));
                                    }
                                }
                                for(var n=61; n<81; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`4 `, ''));
                                    }
                                }
                                for(var n=81; n<101; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`5 `, ''));
                                    }
                                }
                                for(var n=101; n<121; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`6 `, ''));
                                    }
                                }
                                for(var n=121; n<141; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`7 `, ''));
                                    }
                                }
                                for(var n=141; n<161; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`8 `, ''));
                                    }
                                }
                                for(var n=161; n<181; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`9 `, ''));
                                    }
                                }
                                for(var n=181; n<201; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`10 `, ''));
                                    }
                                }
                                for(var n=201; n<221; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`11 `, ''));
                                    }
                                }
                                for(var n=221; n<241; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`12 `, ''));
                                    }
                                }
                        }else if(dia === "DOMINGO"){
                            var num = parseado2 - 1;
                            var precio = parseado - 8;
                            $('#numEntradas').val(num);
                            $('#precio').val(precio + '€');
                            $("#butaca").val(butaca.replace(`${id} `, ''));
                            for(var n=0; n<21; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`1 `, ''));
                                    }
                                }
                                for(var n=21; n<41; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`2 `, ''));
                                    }
                                }
                                for(var n=41; n<61; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`3 `, ''));
                                    }
                                }
                                for(var n=61; n<81; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`4 `, ''));
                                    }
                                }
                                for(var n=81; n<101; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`5 `, ''));
                                    }
                                }
                                for(var n=101; n<121; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`6 `, ''));
                                    }
                                }
                                for(var n=121; n<141; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`7 `, ''));
                                    }
                                }
                                for(var n=141; n<161; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`8 `, ''));
                                    }
                                }
                                for(var n=161; n<181; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`9 `, ''));
                                    }
                                }
                                for(var n=181; n<201; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`10 `, ''));
                                    }
                                }
                                for(var n=201; n<221; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`11 `, ''));
                                    }
                                }
                                for(var n=221; n<241; n++){
                                    if(n==`${id}`){
                                        $("#fila").val(fila.replace(`12 `, ''));
                                    }
                                }
                        }

                    if($("#butaca").val() == ""){
                        $("#tick").addClass("fas fa-check");
                        $(".tick").css("pointer-events", "auto");
                    }
                }
            });   
            
         }

         function mouseEnter(id){
              if($(`#butaca${id}`).hasClass('clicked')){
                    $(`#butaca${id} img`).attr("src", "Imagenes/sillaverde.png"); 
                }else{
                    $(`#butaca${id} img`).attr("src", "Imagenes/sillaazul.png"); 
                }

            };

        function mouseLeave(id){
            if($(`#butaca${id}`).hasClass('clicked')){
                $(`#butaca${id} img`).attr("src", "Imagenes/sillaverde.png"); 
            }else{
                $(`#butaca${id} img`).attr("src", "Imagenes/sillagranate.png"); 
            }
        };

        
        function ponerDia() {
            var dia =  document.getElementById("elegirDia");
            var hora = document.getElementById("elegirHora");
            var selectedValueDia = dia.options[dia.selectedIndex].value;
            var selectedValueHora = hora.options[hora.selectedIndex].value;
            if(selectedValueDia == 'DIA' || selectedValueHora == 'HORA'){
                $("#tick").removeClass();
                $("#tick").addClass("fas fa-ban");
                $(".tick").css("pointer-events", "none");
                $('#dia').val("");
                $('#hora').val("");
            }else{
                    $('#dia').val(selectedValueDia);
                    $('#hora').val(selectedValueHora);
                    $("#tick").addClass("fas fa-check");
                    $(".tick").css("pointer-events", "auto");
                }
  
        
        }

        function ponerHora() {
            var dia =  document.getElementById("elegirDia");
            var hora =  document.getElementById("elegirHora");
            var selectedValueHora = hora.options[hora.selectedIndex].value;
            var selectedValueDia = dia.options[dia.selectedIndex].value;
            if(selectedValueHora == 'HORA' || selectedValueDia == 'DIA'){
                $("#tick").removeClass();
                $("#tick").addClass("fas fa-ban");
                $(".tick").css("pointer-events", "none");
                $('#hora').val("");
                $('#dia').val("");
            }else{
                $('#hora').val(selectedValueHora);
                $('#dia').val(selectedValueDia);
                $("#tick").addClass("fas fa-check");
                $(".tick").css("pointer-events", "auto");
            }
            
        }

        function cancelarButacas(){
            if($('.sillas div').hasClass('clicked')){
                $(`.sillas div`).removeClass('clicked');
                $(`.sillas img`).attr("src", "Imagenes/sillagranate.png"); 
                $("#fila").val("");
                $("#butaca").val("");
                $("#numEntradas").val("0");
                
            }
          
        }


        function cambiarDiaHora(){
            $("#fila").val("");
            $("#butaca").val("");
            $("#numEntradas").val("0");
            var dia = $("#dia").val();
            var hora = $("#hora").val();
            var a = document.getElementById('aHref'); 
            a.href = "cambiarDiaHora2/"+dia+'/'+hora;
          
        }

        function sumarIdEntrada(){
            var dia = $("#dia").val();
            var hora = $("#hora").val();
            var idEntrada = $("#idEntrada").val();
            for(var j=0; j<241; j++){
                if($(`#butaca${j}`).hasClass('clicked')){
                    for(var n=0; n<21; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '1' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=21; n<41; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '2' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=41; n<61; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '3' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=61; n<81; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '4' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=81; n<101; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '5' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=101; n<121; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '6' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=121; n<141; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '7' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=141; n<161; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '8' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=161; n<181; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '9' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=181; n<201; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '10' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=201; n<221; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/' + '11' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                        for(var n=221; n<241; n++){
                            if(n==`${j}`){
                                $.get('guardarNumButaca2/'+j +'/'+dia+'/'+hora+'/'+'12' + '/' + idEntrada, function(response) {
                                })
                            }
                        }
                }
            
            }
            }

        $( document ).ready(function() {
        $( ".btncomprar" ).click(function() {
            $(".fondoNegro").fadeIn();
        });
        $( ".botonCerrar" ).click(function() {
            $(".fondoNegro").fadeOut();
        });


    });
        


</script>
<body>
    <form id="form" method="POST" action="{{ route('compraEntradas2') }}">
        @csrf

        <div class="formulario">
            <div class="titulo">
                <h2>Compra tu Entrada</h2>
              
            </div>
            <input type="text" id="idEntrada" name="idEntrada" value="{{Session::get('idEntrada')}}" style="display: none;">
            <p><label id="label1">TITULO: HARRY POTTER</label></p>
            <p><label id="label1">Numero de entradas: </label><input type="text" id="numEntradas" name="numEntradas" value="0"></p>
            <p><label id="label1">Num butacas: </label><input type="text" id="butaca" name="butaca" value=""></p>
            <p><label id="label1">Num fila/s: </label><input type="text" id="fila" name="fila" value=""></p>
            <p><label id="label1">PRECIO:</label><input type="text" id="precio" name="precio" value="0€"></p>
            <p><label id="label1">Dia: </label><input type="text" id="dia" name="dia" value="{{Session::get('dia')}}"></p>
            <p><label id="label1">Hora: </label><input type="text" id="hora" name="hora" value="{{Session::get('hora')}}"></p>
            <img id="barra" src="Imagenes/barras.jpg" width="10%">
            <div class="ticket">
                <div class="borde"></div>
                <center><div class="titulo2"><h2>HARRY POTTER</h2></div></center>
                <center><div class="heavn"><h2>HEAVN</h2></div></center>
                <div class="fecha"><h3>{{Session::get('pasarFecha')}}</h3></div>
                <div class="precio"><h3>{{Session::get('pasarPrecio')}}</h3></div>
                <div class="unuso"><h3>SOLO UN USO</h3></div>
            </div>
            <vr id="linea"></vr>
              <div class="btncomprar" style="{{ session()->get( 'pointerEvent' ) }}">COMPRAR</div>
        </div>

        <div class="fondoNegro">
            <div class="botonCerrar">&times;</div>
            <div class="formularioCompra">
                <div class="form-container">
                <div class="personal-information">
                    <h1>Realizar pago</h1>
                </div>
        
                <input id="column-left" type="text" name="first-name" placeholder="Usuario" />
                <input id="column-right" type="text" name="last-name" placeholder="Nombre y Apellido"/>
                <input id="input-field" type="text" name="number" placeholder="Numero de tarjeta de credito"/>
                <input id="column-left" type="text" name="expiry" placeholder="MM / AA"/>
                <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
        
                <div class="card-wrapper"></div>
        
                
                <button onclick="sumarIdEntrada();" type="submit" id="input-button" >COMPRAR</button>  

            </div>
            </div>
        </div>
    </form>
    <div class="encabezado">
        <h3>Selecciona el día y la hora</h3>
        
        <div class="box">
            <select id="elegirDia" name="elegirDia" onchange="ponerDia();">
                <option value="DIA">DIA</option>
                @if(Session::get('dia') == "LUNES")
                    <option value="LUNES" selected>Lunes</option>
                @else 
                    <option value="LUNES">Lunes</option>
                @endif
                @if(Session::get('dia') == "MARTES")
                    <option value="MARTES" selected>Martes</option>
                @else
                    <option value="MARTES">Martes</option>
                @endif
                @if(Session::get('dia') == "MIERCOLES")
                    <option value="MIERCOLES"selected>Miercoles</option>
                @else 
                    <option value="MIERCOLES">Miercoles</option>
                @endif
                @if(Session::get('dia') == "JUEVES")
                    <option value="JUEVES" selected>Jueves</option>
                @else 
                    <option value="JUEVES">Jueves</option>
                @endif
                @if(Session::get('dia') == "VIERNES")
                    <option value="VIERNES" selected>Viernes</option>
                @else 
                    <option value="VIERNES">Viernes</option>
                @endif
                @if(Session::get('dia') == "SABADO")
                    <option value="SABADO" selected>Sabado</option>
                @else 
                    <option value="SABADO">Sabado</option>
                @endif
                @if(Session::get('dia') == "DOMINGO")
                    <option value="DOMINGO" selected>Domingo</option>
                @else 
                    <option value="DOMINGO">Domingo</option>
                @endif
            </select>
        </div>

        <div class="box2">
            <select id="elegirHora" onchange="ponerHora();">
                <option id="HORA">HORA</option>
                @if(Session::get('hora') == "16:00")
                    <option value="16:00" selected>16:00</option>
                @else 
                    <option value="16:00">16:00</option>
                @endif
                @if(Session::get('hora') == "20:00")
                    <option value="20:00" selected>20:00</option>
                @else 
                    <option value="20:00">20:00</option>
                @endif
            </select>
        </div>
        <div class="tick"onclick="cambiarDiaHora();" style="pointer-events: none;">
            <a href="" id="aHref" style="text-decoration: none; color: white;">
                <i class="fas fa-ban" id="tick"></i>
            </a>
        </div>
    </div>
    <div class="selectorSillas" style="{{ session()->get( 'pointerEvent' ) }}">
        <div class="exit">
            <img src="Imagenes/exit.jpg" alt="">
        </div>
        <div class="sillas">
            <div class="alfombra"></div>
            <div class="pantalla"><h2>PANEL</h2></div>
            <div id="a"><p>A</p></div>
            <div id="b"><p>B</p></div>
            <div id="c"><p>C</p></div>
            <div id="d"><p>D</p></div>
            <div id="e"><p>E</p></div>
            <div id="f"><p>F</p></div>
            <div id="g"><p>G</p></div>
            <div id="h"><p>H</p></div>
            <div id="i"><p>I</p></div>
            <div id="j"><p>J</p></div>
            <div id="k"><p>K</p></div>
            <div id="l"><p>L</p></div>
            <div id="s01"><p>01</p></div>
            <div id="s02"><p>02</p></div>
            <div id="s03"><p>03</p></div>
            <div id="s04"><p>04</p></div>
            <div id="s05"><p>05</p></div>
            <div id="s06"><p>06</p></div>
            <div id="s07"><p>07</p></div>
            <div id="s08"><p>08</p></div>
            <div id="s09"><p>09</p></div>
            <div id="s10"><p>10</p></div>
            <div id="s11"><p>11</p></div>
            <div id="s12"><p>12</p></div>
            <div id="s13"><p>13</p></div>
            <div id="s14"><p>14</p></div>
            <div id="s15"><p>15</p></div>
            <div id="s16"><p>16</p></div>
            <div id="s17"><p>17</p></div>
            <div id="s18"><p>18</p></div>
            <div id="s19"><p>19</p></div>
            <div id="s20"><p>20</p></div>

    

    

           
            @if(Session::get('data1') == '1')
            <div id="butaca1">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
               
            @else
            <div id="butaca1" onclick="cambiarColor(1)" onmouseenter="mouseEnter(1)" onmouseleave="mouseLeave(1)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
       
   

            @if(Session::get('data2') == '2')
                <div id="butaca2">
                    <img src="Imagenes/sillaroja.png" title="OCUPADO">
                </div>
            @else              
                <div id="butaca2"  onclick="cambiarColor(2)"  onmouseenter="mouseEnter(2)" onmouseleave="mouseLeave(2)">
                    <img src="Imagenes/sillagranate.png">
                </div>
            @endif
            
            @if(Session::get('data3') == '3')
            <div id="butaca3">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca3" onclick="cambiarColor(3)"  onmouseenter="mouseEnter(3)" onmouseleave="mouseLeave(3)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            @if(Session::get('data4') == '4')
            <div id="butaca4">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca4" onclick="cambiarColor(4)" onmouseenter="mouseEnter(4)" onmouseleave="mouseLeave(4)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            @if(Session::get('data5') == '5')
            <div id="butaca5">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca5" onclick="cambiarColor(5)" onmouseenter="mouseEnter(5)" onmouseleave="mouseLeave(5)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
        
            @if(Session::get('data6') == '6')
            <div id="butaca6">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca6" onclick="cambiarColor(6)"  onmouseenter="mouseEnter(6)" onmouseleave="mouseLeave(6)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            @if(Session::get('data7') == '7')
            <div id="butaca7">
                <img src="Imagenes/sillaroja.png" title="OCUPADO"> 
            </div>
            @else 
            <div id="butaca7" onclick="cambiarColor(7)" onmouseenter="mouseEnter(7)" onmouseleave="mouseLeave(7)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            @if(Session::get('data8') == '8')
            <div id="butaca8">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca8" onclick="cambiarColor(8)" onmouseenter="mouseEnter(8)" onmouseleave="mouseLeave(8)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            @if(Session::get('data9') == '9')
            <div id="butaca9">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca9" onclick="cambiarColor(9)" onmouseenter="mouseEnter(9)" onmouseleave="mouseLeave(9)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            @if(Session::get('data10') == '10')
            <div id="butaca10">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca10" onclick="cambiarColor(10)" onmouseenter="mouseEnter(10)" onmouseleave="mouseLeave(10)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
         
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">

            @if(Session::get('data11') == '11')
            <div id="butaca11">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca11" onclick="cambiarColor(11)" onmouseenter="mouseEnter(11)" onmouseleave="mouseLeave(11)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            @if(Session::get('data12') == '12')
            <div id="butaca12">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca12" onclick="cambiarColor(12)" onmouseenter="mouseEnter(12)" onmouseleave="mouseLeave(12)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
         
            @if(Session::get('data13') == '13')
            <div id="butaca13">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca13" onclick="cambiarColor(13)" onmouseenter="mouseEnter(13)" onmouseleave="mouseLeave(13)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
         
            @if(Session::get('data14') == '14')
            <div id="butaca14">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca14" onclick="cambiarColor(14)" onmouseenter="mouseEnter(14)" onmouseleave="mouseLeave(14)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
  
            @if(Session::get('data15') == '15')
            <div id="butaca15">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca15" onclick="cambiarColor(15)" onmouseenter="mouseEnter(15)" onmouseleave="mouseLeave(15)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
         
            @if(Session::get('data16') == '16')
            <div id="butaca16">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca16" onclick="cambiarColor(16)" onmouseenter="mouseEnter(16)" onmouseleave="mouseLeave(16)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            @if(Session::get('data17') == '17')
            <div id="butaca17">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else
            <div id="butaca17" onclick="cambiarColor(17)" onmouseenter="mouseEnter(17)" onmouseleave="mouseLeave(17)">
                <img src="Imagenes/sillagranate.png">
            </div> 
            @endif
          
            @if(Session::get('data18') == '18')
            <div id="butaca18">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca18" onclick="cambiarColor(18)" onmouseenter="mouseEnter(18)" onmouseleave="mouseLeave(18)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
        
            @if(Session::get('data19') == '19')
            <div id="butaca19">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca19" onclick="cambiarColor(19)" onmouseenter="mouseEnter(19)" onmouseleave="mouseLeave(19)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
     
            @if(Session::get('data20') == '20')
            <div id="butaca20">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca20" onclick="cambiarColor(20)" onmouseenter="mouseEnter(20)" onmouseleave="mouseLeave(20)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            @if(Session::get('data21') == '21')
            <div id="butaca21">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca21" onclick="cambiarColor(21)" onmouseenter="mouseEnter(21)" onmouseleave="mouseLeave(21)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            @if(Session::get('data22') == '22')
            <div id="butaca22">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca22" onclick="cambiarColor(22)" onmouseenter="mouseEnter(22)" onmouseleave="mouseLeave(22)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
        
            @if(Session::get('data23') == '23')
            <div id="butaca23">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca23" onclick="cambiarColor(23)" onmouseenter="mouseEnter(23)" onmouseleave="mouseLeave(23)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif

            @if(Session::get('data24') == '24')
            <div id="butaca24">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca24" onclick="cambiarColor(24)" onmouseenter="mouseEnter(24)" onmouseleave="mouseLeave(24)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
         
            @if(Session::get('data25') == '25')
            <div id="butaca25">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca25" onclick="cambiarColor(25)" onmouseenter="mouseEnter(25)" onmouseleave="mouseLeave(25)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
         
            @if(Session::get('data26') == '26')
            <div id="butaca26">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca26" onclick="cambiarColor(26)" onmouseenter="mouseEnter(26)" onmouseleave="mouseLeave(26)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
    
            @if(Session::get('data27') == '27')
            <div id="butaca27">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca27" onclick="cambiarColor(27)" onmouseenter="mouseEnter(27)" onmouseleave="mouseLeave(27)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
    
            @if(Session::get('data28') == '28')
            <div id="butaca28">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca28" onclick="cambiarColor(28)" onmouseenter="mouseEnter(28)" onmouseleave="mouseLeave(28)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            @if(Session::get('data29') == '29')
            <div id="butaca29">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca29" onclick="cambiarColor(29)" onmouseenter="mouseEnter(29)" onmouseleave="mouseLeave(29)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            @if(Session::get('data30') == '30')
            <div id="butaca30" >
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca30" onclick="cambiarColor(30)" onmouseenter="mouseEnter(30)" onmouseleave="mouseLeave(30)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data31') == '31')
            <div id="butaca31">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca31" onclick="cambiarColor(31)" onmouseenter="mouseEnter(31)" onmouseleave="mouseLeave(31)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data32') == '32')
            <div id="butaca32">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca32" onclick="cambiarColor(32)" onmouseenter="mouseEnter(32)" onmouseleave="mouseLeave(32)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data33') == '33')
            <div id="butaca33">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca33" onclick="cambiarColor(33)" onmouseenter="mouseEnter(33)" onmouseleave="mouseLeave(33)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data34') == '34')
            <div id="butaca34">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca34" onclick="cambiarColor(34)" onmouseenter="mouseEnter(34)" onmouseleave="mouseLeave(34)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data35') == '35')
            <div id="butaca35">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca35" onclick="cambiarColor(35)" onmouseenter="mouseEnter(35)" onmouseleave="mouseLeave(35)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
         
            
            @if(Session::get('data36') == '36')
            <div id="butaca36">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca36" onclick="cambiarColor(36)" onmouseenter="mouseEnter(36)" onmouseleave="mouseLeave(36)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data37') == '37')
            <div id="butaca37">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca37" onclick="cambiarColor(37)" onmouseenter="mouseEnter(37)" onmouseleave="mouseLeave(37)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            @if(Session::get('data38') == '38')
            <div id="butaca38">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca38" onclick="cambiarColor(38)" onmouseenter="mouseEnter(38)" onmouseleave="mouseLeave(38)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data39') == '39')
            <div id="butaca39">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca39" onclick="cambiarColor(39)" onmouseenter="mouseEnter(39)" onmouseleave="mouseLeave(39)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data40') == '40')
            <div id="butaca40">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca40" onclick="cambiarColor(40)" onmouseenter="mouseEnter(40)" onmouseleave="mouseLeave(40)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data41') == '41')
            <div id="butaca41">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca41" onclick="cambiarColor(41)" onmouseenter="mouseEnter(41)" onmouseleave="mouseLeave(41)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data42') == '42')
            <div id="butaca42">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca42" onclick="cambiarColor(42)" onmouseenter="mouseEnter(42)" onmouseleave="mouseLeave(42)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data43') == '43')
            <div id="butaca43">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca43" onclick="cambiarColor(43)" onmouseenter="mouseEnter(43)" onmouseleave="mouseLeave(43)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data44') == '44')
            <div id="butaca44">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca44" onclick="cambiarColor(44)" onmouseenter="mouseEnter(44)" onmouseleave="mouseLeave(44)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data45') == '45')
            <div id="butaca45">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>      
            @else 
            <div id="butaca45" onclick="cambiarColor(45)" onmouseenter="mouseEnter(45)" onmouseleave="mouseLeave(45)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            @if(Session::get('data46') == '46')
            <div id="butaca46">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca46" onclick="cambiarColor(46)" onmouseenter="mouseEnter(46)" onmouseleave="mouseLeave(46)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data47') == '47')
            <div id="butaca47">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca47" onclick="cambiarColor(47)" onmouseenter="mouseEnter(47)" onmouseleave="mouseLeave(47)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data48') == '48')
            <div id="butaca48">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca48" onclick="cambiarColor(48)" onmouseenter="mouseEnter(48)" onmouseleave="mouseLeave(48)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data49') == '49')
            <div id="butaca49">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca49" onclick="cambiarColor(49)" onmouseenter="mouseEnter(49)" onmouseleave="mouseLeave(49)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data50') == '50')
            <div id="butaca50">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca50" onclick="cambiarColor(50)" onmouseenter="mouseEnter(50)" onmouseleave="mouseLeave(50)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data51') == '51')
            <div id="butaca51">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca51" onclick="cambiarColor(51)" onmouseenter="mouseEnter(51)" onmouseleave="mouseLeave(51)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
         
            
            @if(Session::get('data52') == '52')
            <div id="butaca52">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca52" onclick="cambiarColor(52)" onmouseenter="mouseEnter(52)" onmouseleave="mouseLeave(52)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data53') == '53')
            <div id="butaca53">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca53" onclick="cambiarColor(53)" onmouseenter="mouseEnter(53)" onmouseleave="mouseLeave(53)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data54') == '54')
            <div id="butaca54">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca54" onclick="cambiarColor(54)" onmouseenter="mouseEnter(54)" onmouseleave="mouseLeave(54)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data55') == '55')
            <div id="butaca55">
                <img src="Imagenes/sillaroja.png" title="OCUPADO"> 
            </div>
            @else 
            <div id="butaca55" onclick="cambiarColor(55)" onmouseenter="mouseEnter(55)" onmouseleave="mouseLeave(55)">
                <img src="Imagenes/sillagranate.png"> 
            </div>
            @endif
            
            
            @if(Session::get('data56') == '56')
            <div id="butaca56">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca56" onclick="cambiarColor(56)" onmouseenter="mouseEnter(56)" onmouseleave="mouseLeave(56)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data57') == '57')
            <div id="butaca57">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca57" onclick="cambiarColor(57)" onmouseenter="mouseEnter(57)" onmouseleave="mouseLeave(57)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data58') == '58')
            <div id="butaca58">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca58" onclick="cambiarColor(58)" onmouseenter="mouseEnter(58)" onmouseleave="mouseLeave(58)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data59') == '59')
            <div id="butaca59">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca59" onclick="cambiarColor(59)" onmouseenter="mouseEnter(59)" onmouseleave="mouseLeave(59)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data60') == '60')
            <div id="butaca60">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca60" onclick="cambiarColor(60)" onmouseenter="mouseEnter(60)" onmouseleave="mouseLeave(60)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data61') == '61')
            <div id="butaca61">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca61" onclick="cambiarColor(61)" onmouseenter="mouseEnter(61)" onmouseleave="mouseLeave(61)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data62') == '62')
            <div id="butaca62">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca62" onclick="cambiarColor(62)" onmouseenter="mouseEnter(62)" onmouseleave="mouseLeave(62)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data63') == '63')
            <div id="butaca63">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca63" onclick="cambiarColor(63)" onmouseenter="mouseEnter(63)" onmouseleave="mouseLeave(63)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data64') == '64')
            <div id="butaca64">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca64" onclick="cambiarColor(64)" onmouseenter="mouseEnter(64)" onmouseleave="mouseLeave(64)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data65') == '65')
            <div id="butaca65">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca65" onclick="cambiarColor(65)" onmouseenter="mouseEnter(65)" onmouseleave="mouseLeave(65)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data66') == '66')
            <div id="butaca66">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca66" onclick="cambiarColor(66)" onmouseenter="mouseEnter(66)" onmouseleave="mouseLeave(66)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data67') == '67')
            <div id="butaca67">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca67" onclick="cambiarColor(67)" onmouseenter="mouseEnter(67)" onmouseleave="mouseLeave(67)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data68') == '68')
            <div id="butaca68">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca68" onclick="cambiarColor(68)" onmouseenter="mouseEnter(68)" onmouseleave="mouseLeave(68)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data69') == '69')
            <div id="butaca69">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca69" onclick="cambiarColor(69)" onmouseenter="mouseEnter(69)" onmouseleave="mouseLeave(69)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data70') == '70')
            <div id="butaca70">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca70" onclick="cambiarColor(70)" onmouseenter="mouseEnter(70)" onmouseleave="mouseLeave(70)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data71') == '71')
            <div id="butaca71">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca71" onclick="cambiarColor(71)" onmouseenter="mouseEnter(71)" onmouseleave="mouseLeave(71)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data72') == '72')
            <div id="butaca72">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca72" onclick="cambiarColor(72)" onmouseenter="mouseEnter(72)" onmouseleave="mouseLeave(72)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data73') == '73')
            <div id="butaca73">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca73" onclick="cambiarColor(73)" onmouseenter="mouseEnter(73)" onmouseleave="mouseLeave(73)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data74') == '74')
            <div id="butaca74">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca74" onclick="cambiarColor(74)" onmouseenter="mouseEnter(74)" onmouseleave="mouseLeave(74)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data75') == '75')
            <div id="butaca75">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca75" onclick="cambiarColor(75)" onmouseenter="mouseEnter(75)" onmouseleave="mouseLeave(75)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data76') == '76')
            <div id="butaca76">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca76" onclick="cambiarColor(76)" onmouseenter="mouseEnter(76)" onmouseleave="mouseLeave(76)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data77') == '77')
            <div id="butaca77">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca77" onclick="cambiarColor(77)" onmouseenter="mouseEnter(77)" onmouseleave="mouseLeave(77)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data78') == '78')
            <div id="butaca78">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca78" onclick="cambiarColor(78)" onmouseenter="mouseEnter(78)" onmouseleave="mouseLeave(78)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data79') == '79')
            <div id="butaca79">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca79" onclick="cambiarColor(79)" onmouseenter="mouseEnter(79)" onmouseleave="mouseLeave(79)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data80') == '80')
            <div id="butaca80">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca80" onclick="cambiarColor(80)" onmouseenter="mouseEnter(80)" onmouseleave="mouseLeave(80)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data81') == '81')
            <div id="butaca81">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca81" onclick="cambiarColor(81)" onmouseenter="mouseEnter(81)" onmouseleave="mouseLeave(81)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data82') == '82')
            <div id="butaca82">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca82" onclick="cambiarColor(82)" onmouseenter="mouseEnter(82)" onmouseleave="mouseLeave(82)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data83') == '83')
            <div id="butaca83">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca83" onclick="cambiarColor(83)" onmouseenter="mouseEnter(83)" onmouseleave="mouseLeave(83)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data84') == '84')
            <div id="butaca84">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca84" onclick="cambiarColor(84)" onmouseenter="mouseEnter(84)" onmouseleave="mouseLeave(84)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data85') == '85')
            <div id="butaca85">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca85" onclick="cambiarColor(85)" onmouseenter="mouseEnter(85)" onmouseleave="mouseLeave(85)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data86') == '86')
            <div id="butaca86">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca86" onclick="cambiarColor(86)" onmouseenter="mouseEnter(86)" onmouseleave="mouseLeave(86)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data87') == '87')
            <div id="butaca87">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca87" onclick="cambiarColor(87)" onmouseenter="mouseEnter(87)" onmouseleave="mouseLeave(87)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data88') == '88')
            <div id="butaca88">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca88" onclick="cambiarColor(88)" onmouseenter="mouseEnter(88)" onmouseleave="mouseLeave(88)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data89') == '89')
            <div id="butaca89">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else
            <div id="butaca89" onclick="cambiarColor(89)" onmouseenter="mouseEnter(89)" onmouseleave="mouseLeave(89)">
                <img src="Imagenes/sillagranate.png">
            </div> 
            @endif
            
            
            @if(Session::get('data90') == '90')
            <div id="butaca90">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca90" onclick="cambiarColor(90)" onmouseenter="mouseEnter(90)" onmouseleave="mouseLeave(90)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data91') == '91')
            <div id="butaca91">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca91" onclick="cambiarColor(91)" onmouseenter="mouseEnter(91)" onmouseleave="mouseLeave(91)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data92') == '92')
            <div id="butaca92">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca92" onclick="cambiarColor(92)" onmouseenter="mouseEnter(92)" onmouseleave="mouseLeave(92)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data93') == '93')
            <div id="butaca93">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca93" onclick="cambiarColor(93)" onmouseenter="mouseEnter(93)" onmouseleave="mouseLeave(93)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data94') == '94')
            <div id="butaca94">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca94" onclick="cambiarColor(94)" onmouseenter="mouseEnter(94)" onmouseleave="mouseLeave(94)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data95') == '95')
            <div id="butaca95">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca95" onclick="cambiarColor(95)" onmouseenter="mouseEnter(95)" onmouseleave="mouseLeave(95)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data96') == '96')
            <div id="butaca96">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca96" onclick="cambiarColor(96)" onmouseenter="mouseEnter(96)" onmouseleave="mouseLeave(96)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data97') == '97')
            <div id="butaca97">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca97" onclick="cambiarColor(97)" onmouseenter="mouseEnter(97)" onmouseleave="mouseLeave(97)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data98') == '98')
            <div id="butaca98">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca98" onclick="cambiarColor(98)" onmouseenter="mouseEnter(98)" onmouseleave="mouseLeave(98)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data99') == '99')
            <div id="butaca99">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca99" onclick="cambiarColor(99)" onmouseenter="mouseEnter(99)" onmouseleave="mouseLeave(99)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data100') == '100')
            <div id="butaca100">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca100" onclick="cambiarColor(100)" onmouseenter="mouseEnter(100)" onmouseleave="mouseLeave(100)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data101') == '101')
            <div id="butaca101">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca101" onclick="cambiarColor(101)" onmouseenter="mouseEnter(101)" onmouseleave="mouseLeave(101)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data102') == '102')
            <div id="butaca102">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca102" onclick="cambiarColor(102)" onmouseenter="mouseEnter(102)" onmouseleave="mouseLeave(102)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data103') == '103')
            <div id="butaca103">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca103" onclick="cambiarColor(103)" onmouseenter="mouseEnter(103)" onmouseleave="mouseLeave(103)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data104') == '104')
            <div id="butaca104">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca104" onclick="cambiarColor(104)" onmouseenter="mouseEnter(104)" onmouseleave="mouseLeave(104)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data105') == '105')
            <div id="butaca105">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca105" onclick="cambiarColor(105)" onmouseenter="mouseEnter(105)" onmouseleave="mouseLeave(105)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data106') == '106')
            <div id="butaca106">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca106" onclick="cambiarColor(106)" onmouseenter="mouseEnter(106)" onmouseleave="mouseLeave(106)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data107') == '107')
            <div id="butaca107">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca107" onclick="cambiarColor(107)" onmouseenter="mouseEnter(107)" onmouseleave="mouseLeave(107)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data108') == '108')
            <div id="butaca108">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca108" onclick="cambiarColor(108)" onmouseenter="mouseEnter(108)" onmouseleave="mouseLeave(108)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data109') == '109')
            <div id="butaca109">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca109" onclick="cambiarColor(109)" onmouseenter="mouseEnter(109)" onmouseleave="mouseLeave(109)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data110') == '110')
            <div id="butaca110">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca110" onclick="cambiarColor(110)" onmouseenter="mouseEnter(110)" onmouseleave="mouseLeave(110)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data111') == '111')
            <div id="butaca111">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca111" onclick="cambiarColor(111)" onmouseenter="mouseEnter(111)" onmouseleave="mouseLeave(111)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            @if(Session::get('data112') == '112')
            <div id="butaca112">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca112" onclick="cambiarColor(112)" onmouseenter="mouseEnter(112)" onmouseleave="mouseLeave(112)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data113') == '113')
            <div id="butaca113">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca113" onclick="cambiarColor(113)" onmouseenter="mouseEnter(113)" onmouseleave="mouseLeave(113)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data114') == '114')
            <div id="butaca114">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca114" onclick="cambiarColor(114)" onmouseenter="mouseEnter(114)" onmouseleave="mouseLeave(114)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data115') == '115')
            <div id="butaca115">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca115" onclick="cambiarColor(115)" onmouseenter="mouseEnter(115)" onmouseleave="mouseLeave(115)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data116') == '116')
            <div id="butaca116">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca116" onclick="cambiarColor(116)" onmouseenter="mouseEnter(116)" onmouseleave="mouseLeave(116)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data117') == '117')
            <div id="butaca117">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca117" onclick="cambiarColor(117)" onmouseenter="mouseEnter(117)" onmouseleave="mouseLeave(117)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data118') == '118')
            <div id="butaca118">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca118" onclick="cambiarColor(118)" onmouseenter="mouseEnter(118)" onmouseleave="mouseLeave(118)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data119') == '119')
            <div id="butaca119">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca119" onclick="cambiarColor(119)" onmouseenter="mouseEnter(119)" onmouseleave="mouseLeave(119)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data120') == '120')
            <div id="butaca120">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca120" onclick="cambiarColor(120)" onmouseenter="mouseEnter(120)" onmouseleave="mouseLeave(120)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data121') == '121')
            <div id="butaca121">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca121" onclick="cambiarColor(121)" onmouseenter="mouseEnter(121)" onmouseleave="mouseLeave(121)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data122') == '122')
            <div id="butaca122">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca122" onclick="cambiarColor(122)" onmouseenter="mouseEnter(122)" onmouseleave="mouseLeave(122)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data123') == '123')
            <div id="butaca123">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca123" onclick="cambiarColor(123)" onmouseenter="mouseEnter(123)" onmouseleave="mouseLeave(123)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data124') == '124')
            <div id="butaca124">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca124" onclick="cambiarColor(124)" onmouseenter="mouseEnter(124)" onmouseleave="mouseLeave(124)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data125') == '125')
            <div id="butaca125">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca125" onclick="cambiarColor(125)" onmouseenter="mouseEnter(125)" onmouseleave="mouseLeave(125)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data126') == '126')
            <div id="butaca126">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca126" onclick="cambiarColor(126)" onmouseenter="mouseEnter(126)" onmouseleave="mouseLeave(126)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data127') == '127')
            <div id="butaca127">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca127" onclick="cambiarColor(127)" onmouseenter="mouseEnter(127)" onmouseleave="mouseLeave(127)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            @if(Session::get('data128') == '128')
            <div id="butaca128">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca128" onclick="cambiarColor(128)" onmouseenter="mouseEnter(128)" onmouseleave="mouseLeave(128)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data129') == '129')
            <div id="butaca129">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca129" onclick="cambiarColor(129)" onmouseenter="mouseEnter(129)" onmouseleave="mouseLeave(129)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data130') == '130')
            <div id="butaca130">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca130" onclick="cambiarColor(130)" onmouseenter="mouseEnter(130)" onmouseleave="mouseLeave(130)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data131') == '131')
            <div id="butaca131">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca131" onclick="cambiarColor(131)"  onmouseenter="mouseEnter(131)" onmouseleave="mouseLeave(131)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data132') == '132')
            <div id="butaca132">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca132" onclick="cambiarColor(132)"  onmouseenter="mouseEnter(132)" onmouseleave="mouseLeave(132)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data133') == '133')
            <div id="butaca133">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca133" onclick="cambiarColor(133)"  onmouseenter="mouseEnter(133)" onmouseleave="mouseLeave(133)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            @if(Session::get('data134') == '134')
            <div id="butaca134">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca134" onclick="cambiarColor(134)"  onmouseenter="mouseEnter(134)" onmouseleave="mouseLeave(134)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data135') == '135')
            <div id="butaca135">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca135" onclick="cambiarColor(135)"  onmouseenter="mouseEnter(135)" onmouseleave="mouseLeave(135)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data136') == '136')
            <div id="butaca136">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca136" onclick="cambiarColor(136)"  onmouseenter="mouseEnter(136)" onmouseleave="mouseLeave(136)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data137') == '137')
            <div id="butaca137">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca137" onclick="cambiarColor(137)"  onmouseenter="mouseEnter(137)" onmouseleave="mouseLeave(137)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data138') == '138')
            <div id="butaca138">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca138" onclick="cambiarColor(138)"  onmouseenter="mouseEnter(138)" onmouseleave="mouseLeave(138)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data139') == '139')
            <div id="butaca139">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca139" onclick="cambiarColor(139)"  onmouseenter="mouseEnter(139)" onmouseleave="mouseLeave(139)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            @if(Session::get('data140') == '140')
            <div id="butaca140">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca140" onclick="cambiarColor(140)"  onmouseenter="mouseEnter(140)" onmouseleave="mouseLeave(140)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data141') == '141')
            <div id="butaca141">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca141" onclick="cambiarColor(141)"  onmouseenter="mouseEnter(141)" onmouseleave="mouseLeave(141)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data142') == '142')
            <div id="butaca142">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca142" onclick="cambiarColor(142)"  onmouseenter="mouseEnter(142)" onmouseleave="mouseLeave(142)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data143') == '143')
            <div id="butaca143">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca143" onclick="cambiarColor(143)" onmouseenter="mouseEnter(143)" onmouseleave="mouseLeave(143)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data144') == '144')
            <div id="butaca144">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca144" onclick="cambiarColor(144)" onmouseenter="mouseEnter(144)" onmouseleave="mouseLeave(144)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data145') == '145')
            <div id="butaca145">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca145" onclick="cambiarColor(145)" onmouseenter="mouseEnter(145)" onmouseleave="mouseLeave(145)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data146') == '146')
            <div id="butaca146">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca146" onclick="cambiarColor(146)" onmouseenter="mouseEnter(146)" onmouseleave="mouseLeave(146)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data147') == '147')
            <div id="butaca147">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca147" onclick="cambiarColor(147)" onmouseenter="mouseEnter(147)" onmouseleave="mouseLeave(147)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data148') == '148')
            <div id="butaca148">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca148" onclick="cambiarColor(148)" onmouseenter="mouseEnter(148)" onmouseleave="mouseLeave(148)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data149') == '149')
            <div id="butaca149">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca149" onclick="cambiarColor(149)" onmouseenter="mouseEnter(149)" onmouseleave="mouseLeave(149)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data150') == '150')
            <div id="butaca150">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca150" onclick="cambiarColor(150)" onmouseenter="mouseEnter(150)" onmouseleave="mouseLeave(150)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data151') == '151')
            <div id="butaca151">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca151" onclick="cambiarColor(151)" onmouseenter="mouseEnter(151)" onmouseleave="mouseLeave(151)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data152') == '152')
            <div id="butaca152">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca152" onclick="cambiarColor(152)" onmouseenter="mouseEnter(152)" onmouseleave="mouseLeave(152)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data153') == '153')
            <div id="butaca153">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca153" onclick="cambiarColor(153)" onmouseenter="mouseEnter(153)" onmouseleave="mouseLeave(153)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data154') == '154')
            <div id="butaca154">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca154" onclick="cambiarColor(154)" onmouseenter="mouseEnter(154)" onmouseleave="mouseLeave(154)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data155') == '155')
            <div id="butaca155">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca155" onclick="cambiarColor(155)" onmouseenter="mouseEnter(155)" onmouseleave="mouseLeave(155)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data156') == '156')
            <div id="butaca156">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca156" onclick="cambiarColor(156)" onmouseenter="mouseEnter(156)" onmouseleave="mouseLeave(156)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data157') == '157')
            <div id="butaca157">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca157" onclick="cambiarColor(157)" onmouseenter="mouseEnter(157)" onmouseleave="mouseLeave(157)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data158') == '158')
            <div id="butaca158">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca158" onclick="cambiarColor(158)" onmouseenter="mouseEnter(158)" onmouseleave="mouseLeave(158)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data159') == '159')
            <div id="butaca159">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca159" onclick="cambiarColor(159)" onmouseenter="mouseEnter(159)" onmouseleave="mouseLeave(159)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data160') == '160')
            <div id="butaca160">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca160" onclick="cambiarColor(160)" onmouseenter="mouseEnter(160)" onmouseleave="mouseLeave(160)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data161') == '161')
            <div id="butaca161">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca161" onclick="cambiarColor(161)" onmouseenter="mouseEnter(161)" onmouseleave="mouseLeave(161)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data162') == '162')
            <div id="butaca162">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca162" onclick="cambiarColor(162)" onmouseenter="mouseEnter(162)" onmouseleave="mouseLeave(162)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data163') == '163')
            <div id="butaca163">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca163" onclick="cambiarColor(163)" onmouseenter="mouseEnter(163)" onmouseleave="mouseLeave(163)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data164') == '164')
            <div id="butaca164">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca164" onclick="cambiarColor(164)" onmouseenter="mouseEnter(164)" onmouseleave="mouseLeave(164)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data165') == '165')
            <div id="butaca165">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca165" onclick="cambiarColor(165)" onmouseenter="mouseEnter(165)" onmouseleave="mouseLeave(165)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data166') == '166')
            <div id="butaca166">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca166" onclick="cambiarColor(166)" onmouseenter="mouseEnter(166)" onmouseleave="mouseLeave(166)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data167') == '167')
            <div id="butaca167">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca167" onclick="cambiarColor(167)" onmouseenter="mouseEnter(167)" onmouseleave="mouseLeave(167)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data168') == '168')
            <div id="butaca168">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca168" onclick="cambiarColor(168)" onmouseenter="mouseEnter(168)" onmouseleave="mouseLeave(168)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data169') == '169')
            <div id="butaca169">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca169" onclick="cambiarColor(169)" onmouseenter="mouseEnter(169)" onmouseleave="mouseLeave(169)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data170') == '170')
            <div id="butaca170">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca170" onclick="cambiarColor(170)" onmouseenter="mouseEnter(170)" onmouseleave="mouseLeave(170)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data171') == '171')
            <div id="butaca171">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca171" onclick="cambiarColor(171)" onmouseenter="mouseEnter(171)" onmouseleave="mouseLeave(171)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data172') == '172')
            <div id="butaca172">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca172" onclick="cambiarColor(172)" onmouseenter="mouseEnter(172)" onmouseleave="mouseLeave(172)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data173') == '173')
            <div id="butaca173">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca173" onclick="cambiarColor(173)" onmouseenter="mouseEnter(173)" onmouseleave="mouseLeave(173)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data174') == '174')
            <div id="butaca174">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca174" onclick="cambiarColor(174)" onmouseenter="mouseEnter(174)" onmouseleave="mouseLeave(174)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data175') == '175')
            <div id="butaca175">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca175" onclick="cambiarColor(175)" onmouseenter="mouseEnter(175)" onmouseleave="mouseLeave(175)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data176') == '176')
            <div id="butaca176">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca176" onclick="cambiarColor(176)" onmouseenter="mouseEnter(176)" onmouseleave="mouseLeave(176)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data177') == '177')
            <div id="butaca177">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca177" onclick="cambiarColor(177)" onmouseenter="mouseEnter(177)" onmouseleave="mouseLeave(177)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data178') == '178')
            <div id="butaca178">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca178" onclick="cambiarColor(178)" onmouseenter="mouseEnter(178)" onmouseleave="mouseLeave(178)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data179') == '179')
            <div id="butaca179">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca179" onclick="cambiarColor(179)" onmouseenter="mouseEnter(179)" onmouseleave="mouseLeave(179)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data180') == '180')
            <div id="butaca180">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca180" onclick="cambiarColor(180)" onmouseenter="mouseEnter(180)" onmouseleave="mouseLeave(180)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data181') == '181')
            <div id="butaca181">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca181" onclick="cambiarColor(181)" onmouseenter="mouseEnter(181)" onmouseleave="mouseLeave(181)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data182') == '182')
            <div id="butaca182">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca182" onclick="cambiarColor(182)" onmouseenter="mouseEnter(182)" onmouseleave="mouseLeave(182)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data183') == '183')
            <div id="butaca183">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca183" onclick="cambiarColor(183)" onmouseenter="mouseEnter(183)" onmouseleave="mouseLeave(183)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data184') == '184')
            <div id="butaca184">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca184" onclick="cambiarColor(184)" onmouseenter="mouseEnter(184)" onmouseleave="mouseLeave(184)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data185') == '185')
            <div id="butaca185">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca185" onclick="cambiarColor(185)" onmouseenter="mouseEnter(185)" onmouseleave="mouseLeave(185)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data186') == '186')
            <div id="butaca186">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca186" onclick="cambiarColor(186)" onmouseenter="mouseEnter(186)" onmouseleave="mouseLeave(186)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data187') == '187')
            <div id="butaca187">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca187" onclick="cambiarColor(187)" onmouseenter="mouseEnter(187)" onmouseleave="mouseLeave(187)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data188') == '188')
            <div id="butaca188">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca188" onclick="cambiarColor(188)" onmouseenter="mouseEnter(188)" onmouseleave="mouseLeave(188)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data189') == '189')
            <div id="butaca189">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca189" onclick="cambiarColor(189)" onmouseenter="mouseEnter(189)" onmouseleave="mouseLeave(189)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data190') == '190')
            <div id="butaca190">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else
            <div id="butaca190" onclick="cambiarColor(190)" onmouseenter="mouseEnter(190)" onmouseleave="mouseLeave(190)">
                <img src="Imagenes/sillagranate.png">
            </div> 
            @endif
            
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data191') == '191')
            <div id="butaca191">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca191" onclick="cambiarColor(191)" onmouseenter="mouseEnter(191)" onmouseleave="mouseLeave(191)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data192') == '192')
            <div id="butaca192">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca192" onclick="cambiarColor(192)" onmouseenter="mouseEnter(192)" onmouseleave="mouseLeave(192)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data193') == '193')
            <div id="butaca193">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca193" onclick="cambiarColor(193)" onmouseenter="mouseEnter(193)" onmouseleave="mouseLeave(193)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data194') == '194')
            <div id="butaca194">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca194" onclick="cambiarColor(194)" onmouseenter="mouseEnter(194)" onmouseleave="mouseLeave(194)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data195') == '195')
            <div id="butaca195">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca195" onclick="cambiarColor(195)" onmouseenter="mouseEnter(195)" onmouseleave="mouseLeave(195)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data196') == '196')
            <div id="butaca196">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca196" onclick="cambiarColor(196)" onmouseenter="mouseEnter(196)" onmouseleave="mouseLeave(196)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data197') == '197')
            <div id="butaca197">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca197" onclick="cambiarColor(197)" onmouseenter="mouseEnter(197)" onmouseleave="mouseLeave(197)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data198') == '198')
            <div id="butaca198">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca198" onclick="cambiarColor(198)" onmouseenter="mouseEnter(198)" onmouseleave="mouseLeave(198)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data199') == '199')
            <div id="butaca199">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca199" onclick="cambiarColor(199)" onmouseenter="mouseEnter(199)" onmouseleave="mouseLeave(199)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data200') == '200')
            <div id="butaca200">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca200" onclick="cambiarColor(200)" onmouseenter="mouseEnter(200)" onmouseleave="mouseLeave(200)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            

            @if(Session::get('data201') == '201')
            <div id="butaca201">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca201" onclick="cambiarColor(201)" onmouseenter="mouseEnter(201)" onmouseleave="mouseLeave(201)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            @if(Session::get('data202') == '202')
            <div id="butaca202">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca202" onclick="cambiarColor(202)" onmouseenter="mouseEnter(202)" onmouseleave="mouseLeave(202)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data203') == '203')
            <div id="butaca203">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca203" onclick="cambiarColor(203)" onmouseenter="mouseEnter(203)" onmouseleave="mouseLeave(203)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data204') == '204')
            <div id="butaca204">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca204" onclick="cambiarColor(204)" onmouseenter="mouseEnter(204)" onmouseleave="mouseLeave(204)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data205') == '205')
            <div id="butaca205">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca205" onclick="cambiarColor(205)" onmouseenter="mouseEnter(205)" onmouseleave="mouseLeave(205)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data206') == '206')
            <div id="butaca206">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca206" onclick="cambiarColor(206)" onmouseenter="mouseEnter(206)" onmouseleave="mouseLeave(206)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data207') == '207')
            <div id="butaca207">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca207" onclick="cambiarColor(207)" onmouseenter="mouseEnter(207)" onmouseleave="mouseLeave(207)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data208') == '208')
            <div id="butaca208">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca208" onclick="cambiarColor(208)" onmouseenter="mouseEnter(208)" onmouseleave="mouseLeave(208)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data209') == '209')
            <div id="butaca209">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca209" onclick="cambiarColor(209)" onmouseenter="mouseEnter(209)" onmouseleave="mouseLeave(209)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data210') == '210')
            <div id="butaca210">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca210" onclick="cambiarColor(210)" onmouseenter="mouseEnter(210)" onmouseleave="mouseLeave(210)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data211') == '211')
            <div id="butaca211">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca211" onclick="cambiarColor(211)" onmouseenter="mouseEnter(211)" onmouseleave="mouseLeave(211)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data212') == '212')
            <div id="butaca212">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca212" onclick="cambiarColor(212)" onmouseenter="mouseEnter(212)" onmouseleave="mouseLeave(212)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data213') == '213')
            <div id="butaca213">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca213" onclick="cambiarColor(213)" onmouseenter="mouseEnter(213)" onmouseleave="mouseLeave(213)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data214') == '214')
            <div id="butaca214">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca214" onclick="cambiarColor(214)" onmouseenter="mouseEnter(214)" onmouseleave="mouseLeave(214)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data215') == '215')
            <div id="butaca215">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca215" onclick="cambiarColor(215)" onmouseenter="mouseEnter(215)" onmouseleave="mouseLeave(215)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data216') == '216')
            <div id="butaca216">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca216" onclick="cambiarColor(216)" onmouseenter="mouseEnter(216)" onmouseleave="mouseLeave(216)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data217') == '217')
            <div id="butaca217">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca217" onclick="cambiarColor(217)" onmouseenter="mouseEnter(217)" onmouseleave="mouseLeave(217)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data218') == '218')
            <div id="butaca218">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca218" onclick="cambiarColor(218)" onmouseenter="mouseEnter(218)" onmouseleave="mouseLeave(218)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data219') == '219')
            <div id="butaca219">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca219" onclick="cambiarColor(219)" onmouseenter="mouseEnter(219)" onmouseleave="mouseLeave(219)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data220') == '220')
            <div id="butaca220">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca220" onclick="cambiarColor(220)" onmouseenter="mouseEnter(220)" onmouseleave="mouseLeave(220)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data221') == '221')
            <div id="butaca221">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca221" onclick="cambiarColor(221)" onmouseenter="mouseEnter(221)" onmouseleave="mouseLeave(221)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data222') == '222')
            <div id="butaca222">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca222" onclick="cambiarColor(222)" onmouseenter="mouseEnter(222)" onmouseleave="mouseLeave(222)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data224') == '224')
            <div id="butaca223">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca223" onclick="cambiarColor(223)" onmouseenter="mouseEnter(223)" onmouseleave="mouseLeave(223)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data224') == '224')
            <div id="butaca224">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca224" onclick="cambiarColor(224)" onmouseenter="mouseEnter(224)" onmouseleave="mouseLeave(224)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data225') == '225')
            <div id="butaca225">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca225" onclick="cambiarColor(225)" onmouseenter="mouseEnter(225)" onmouseleave="mouseLeave(225)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data226') == '226')
            <div id="butaca226">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca226" onclick="cambiarColor(226)" onmouseenter="mouseEnter(226)" onmouseleave="mouseLeave(226)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data227') == '227')
            <div id="butaca227">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca227" onclick="cambiarColor(227)" onmouseenter="mouseEnter(227)" onmouseleave="mouseLeave(227)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data228') == '228')
            <div id="butaca228">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca228" onclick="cambiarColor(228)" onmouseenter="mouseEnter(228)" onmouseleave="mouseLeave(228)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data229') == '229')
            <div id="butaca229">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca229" onclick="cambiarColor(229)" onmouseenter="mouseEnter(229)" onmouseleave="mouseLeave(229)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data230') == '230')
            <div id="butaca230">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca230" onclick="cambiarColor(230)" onmouseenter="mouseEnter(230)" onmouseleave="mouseLeave(230)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            <img src="Imagenes/sillagranate.png" style="opacity: 0; user-select: none; cursor: default;">
            
            @if(Session::get('data231') == '231')
            <div id="butaca231">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca231" onclick="cambiarColor(231)" onmouseenter="mouseEnter(231)" onmouseleave="mouseLeave(231)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data232') == '232')
            <div id="butaca232">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca232" onclick="cambiarColor(232)" onmouseenter="mouseEnter(232)" onmouseleave="mouseLeave(232)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data233') == '233')
            <div id="butaca233">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca233" onclick="cambiarColor(233)" onmouseenter="mouseEnter(233)" onmouseleave="mouseLeave(233)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data234') == '234')
            <div id="butaca234">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca234" onclick="cambiarColor(234)" onmouseenter="mouseEnter(234)" onmouseleave="mouseLeave(234)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data235') == '235')
            <div id="butaca235">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca235" onclick="cambiarColor(235)" onmouseenter="mouseEnter(235)" onmouseleave="mouseLeave(235)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data236') == '236')
            <div id="butaca236">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca236" onclick="cambiarColor(236)" onmouseenter="mouseEnter(236)" onmouseleave="mouseLeave(236)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
            
            @if(Session::get('data237') == '237')
            <div id="butaca237">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca237" onclick="cambiarColor(237)" onmouseenter="mouseEnter(237)" onmouseleave="mouseLeave(237)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           

            @if(Session::get('data238') == '238')
            <div id="butaca238">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca238" onclick="cambiarColor(238)" onmouseenter="mouseEnter(238)" onmouseleave="mouseLeave(238)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
          
            
            @if(Session::get('data239') == '239')
            <div id="butaca239">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca239" onclick="cambiarColor(239)" onmouseenter="mouseEnter(239)" onmouseleave="mouseLeave(239)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
            
            
            @if(Session::get('data240') == '240')
            <div id="butaca240">
                <img src="Imagenes/sillaroja.png" title="OCUPADO">
            </div>
            @else 
            <div id="butaca240" onclick="cambiarColor(240)" onmouseenter="mouseEnter(240)" onmouseleave="mouseLeave(240)">
                <img src="Imagenes/sillagranate.png">
            </div>
            @endif
           
        </div>
    </div>
    <div class="info">
        <h3>Butacas Libres <div class="cuadroGranate"></div></h3>
        <h3>Butacas Ocupadas <div class="cuadroRojo"></div></h3>
        <h3>Butacas Seleccionadas <div class="cuadroVerde"></div></h3>
    </div>
    <div class="cancelar" onclick="cancelarButacas();">RESET</div>
    <div class="volver"><a href="verCine" style="text-decoration: none; color: white;">VOLVER</a></div>
</body>
<script id="rendered-js">

    $('form').card({
        container: '.card-wrapper',
        width: 280,

        formSelectors: {
            nameInput: 'input[name="first-name"], input[name="last-name"]'
        }
    });
    </script>
</html>