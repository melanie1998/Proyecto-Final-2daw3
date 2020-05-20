<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compra entradas</title>
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
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
            background-image: url('Imagenes/RecintoAmaral.jpeg');
            background-position: center center;
            font-family: 'Bree Serif', serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden;
        
        }
    
        /* Encabezado */
        .encabezado{
            position: absolute;
            margin-top: 3vh;
            margin-left: 35vw;
            padding: 0 2% 0 2%;
            font-size: 2em;
            background-color: rgba(23, 23, 23, 0.8);
            color: whitesmoke;
            border: 5px solid #111;
    
        }
    
        /* Volver */
        .volver{
            position: fixed;
            margin-top: 6vh;
            margin-left: 85vw;
            padding: 1%;
            font-size: 2em;
            background-color: rgba(23, 23, 23, 0.8);
            color: whitesmoke;
            border: 5px solid #111;
        }
    
        .volver h4{
            margin: 0;
        }

        /* BOTON COMPRA */
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

        .btncomprar2{
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

        .btncomprar3{
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

        .btncomprar4{
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

        .btncomprar5{
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
    
    
        /* MAPA */
        .reservas{
            position: absolute;
            margin-top: 22vh;
            margin-left: 10vw;
            width: 49.5vw;
            height: 60vh;
            background-color: rgba(23, 23, 23, 0.8);
            color: whitesmoke;
            border: 5px solid #111;
        }
    
        .reservas h2{
            display: flex;
            justify-content: center;
            align-content: center;
            color: white;
    
        }   
    
        .escenario{
            position: absolute;
            margin-top: 10vh;
            margin-left: 1vw;
            width: 10vw;
            height: 40vh;
            background-color:rgb(52, 7, 23);
            border: 3px solid whitesmoke;
    
        }
    
        .pista1{
            position: absolute;
            margin-top: 15vh;
            margin-left: 12vw;
            width: 12vw;
            height: 30vh;
            background-color: #222;
            border: 3px solid whitesmoke;
            cursor: pointer;
    
        }
    
        .pista2{
            position: absolute;
            margin-top: 15vh;
            margin-left: 25vw;
            width: 12vw;
            height: 30vh;
            background-color: #222;
            border: 3px solid whitesmoke;
            cursor: pointer;
    
        }
    
        .grada1{
            position: absolute;
            margin-top: 3vh;
            margin-left: 12vw;
            width: 25vw;
            height: 10vh;
            background-color: #555;
            border: 3px solid whitesmoke;
            cursor: pointer;
    
        }
    
    
    
        .grada2{
            position: absolute;
            margin-top: 47vh;
            margin-left: 12vw;
            width: 25vw;
            height: 10vh;
            background-color: #555;
            border: 3px solid whitesmoke;
            cursor: pointer;
        }
    
    
        .grada3{
            position: absolute;
            margin-top: 5vh;
            margin-left: 38vw;
            width: 10vw;
            height: 50vh;
            background-color: #777;
            border: 3px solid whitesmoke;
            cursor: pointer;
    
        }
    
        /* titulo */
        .datos{
            position: absolute;
            margin-top: 22vh;
            margin-left: 62vw;
            width: 29vw;
            height: 60vh;
            background-color: rgba(23, 23, 23, 0.8);
            border: 5px solid #111;
        }
    
        #titulo{
            margin-top: 5vh;
            margin-bottom: 2vh;
            font-size: 2em;
            color: white;
        }
    
        /* InputBox */
    
        .inputBox{
            display: block;
            margin-top: 4vh;
            font-size: 1.8em;
            color: whitesmoke;
        }

        .inputBox input{
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
    
        .inputBox .invalid-feedback{
            display: inline-block;
        }
    
        .inputBox p{
            font-size: 0.8em;
            color: darkred;
        }

        .inputBox span{
            margin-top: 3vh;
            font-size: 1.1em;
        }

        /* InputBox2 */
    
        .formulario{
            display: none;
            position: absolute;
            margin-top: 22vh;
            margin-left: 62vw;
            width: 29vw;
            height: 60vh;
            background-color: rgba(23, 23, 23, 0.8);
            border: 5px solid #111;
        }

        .formulario input{
            background: transparent;
            border: none;
            outline: none;
            color: white;
            margin-top: -3vh;
            margin-left: 15vw;
            font-size: 1.2em;
            font-weight: bold;
        }   

        .formulario span{
            font-size: 1.4em;
            margin-left: 5vw;
            
        }

        #pistaA{
            font-size: 1.4em;
            margin-left: 37%;
        }

        #precioentrada{
            margin-left: 6.5vw;
            font-family: 'Bree Serif', serif;
        }

        .formulario select{
            margin-left: 9.5vw;
            font-size: 1.3em;
            border: none;
        }
    
        .formulario2{
            display: none;
            position: absolute;
            margin-top: 22vh;
            margin-left: 62vw;
            width: 29vw;
            height: 60vh;
            background-color: rgba(23, 23, 23, 0.8);
            border: 5px solid #111;
            }

        .formulario2 input{
            background: transparent;
            border: none;
            outline: none;
            color: white;
            margin-top: -3vh;
            margin-left: 15vw;
            font-size: 1.2em;
            font-weight: bold;
        }   

        .formulario2 span{
            font-size: 1.4em;
            margin-left: 5vw;
            font-family: 'Bree Serif', serif;

        }

        #pistaB{
            font-size: 1.4em;
            margin-left: 37%;
        }

        #precioentrada{
            margin-left: 6.5vw;
        }

        .formulario2 select{
            margin-left: 9.5vw;
            font-size: 1.3em;
            border: none;
        }

        .formulario3{
            display: none;
            position: absolute;
            margin-top: 22vh;
            margin-left: 62vw;
            width: 29vw;
            height: 60vh;
            background-color: rgba(23, 23, 23, 0.8);
            border: 5px solid #111;
        }

        .formulario3 input{
            background: transparent;
            border: none;
            outline: none;
            color: white;
            margin-top: -3vh;
            margin-left: 15vw;
            font-size: 1.2em;
            font-weight: bold;
        }   

        .formulario3 span{
            font-size: 1.4em;
            margin-left: 5vw;
            font-family: 'Bree Serif', serif;

        }

        #grada1{
            font-size: 1.4em;
            margin-left: 37%;
        }

        #precioentrada{
            margin-left: 6.5vw;
        }

        .formulario3 select{
            margin-left: 9.5vw;
            font-size: 1.3em;
            border: none;
        }

        .formulario4{
            display: none;
            position: absolute;
            margin-top: 22vh;
            margin-left: 62vw;
            width: 29vw;
            height: 60vh;
            background-color: rgba(23, 23, 23, 0.8);
            border: 5px solid #111;
        }

        .formulario4 input{
            background: transparent;
            border: none;
            outline: none;
            color: white;
            margin-top: -3vh;
            margin-left: 15vw;
            font-size: 1.2em;
            font-weight: bold;
        }   

        .formulario4 span{
            font-size: 1.4em;
            margin-left: 5vw;
            font-family: 'Bree Serif', serif;

        }

        #grada2{
            font-size: 1.4em;
            margin-left: 37%;
        }

        #precioentrada{
            margin-left: 6.5vw;
        }

        .formulario4 select{
            margin-left: 9.5vw;
            font-size: 1.3em;
            border: none;
        }

        .formulario5{
            display: none;
            position: absolute;
            margin-top: 22vh;
            margin-left: 62vw;
            width: 29vw;
            height: 60vh;
            background-color: rgba(23, 23, 23, 0.8);
            border: 5px solid #111;
        }

        .formulario5 input{
            background: transparent;
            border: none;
            outline: none;
            color: white;
            margin-top: -3vh;
            margin-left: 15vw;
            font-size: 1.2em;
            font-weight: bold;
        }   

        .formulario5 span{
            font-size: 1.4em;
            margin-left: 5vw;
            font-family: 'Bree Serif', serif;

        }

        #grada3{
            font-size: 1.4em;
            margin-left: 37%;
        }

        #precioentrada{
            margin-left: 6.5vw;
        }

        .formulario5 select{
            margin-left: 9.5vw;
            font-size: 1.3em;
            border: none;
        }
        #text2{
            display: block;
            color: whitesmoke;
            font-weight: 300;
            padding: 5px;
            margin-bottom: 1vh;
        }

        a{
            text-decoration: none;
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


    .fondoNegro2{
        display: none;
        margin: 0 auto;
        width: 100vw;
        height: 100vh;
        z-index: 10;
        position: absolute;
        background-color:rgba(23, 23, 23, 0.9);
    }

    .fondoNegro3{
        display: none;
        margin: 0 auto;
        width: 100vw;
        height: 100vh;
        z-index: 10;
        position: absolute;
        background-color:rgba(23, 23, 23, 0.9);
    }

    .fondoNegro4{
        display: none;
        margin: 0 auto;
        width: 100vw;
        height: 100vh;
        z-index: 10;
        position: absolute;
        background-color:rgba(23, 23, 23, 0.9);
    }

    .fondoNegro5{
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

    .formularioCompra2{
        padding: 60px 0;
        margin: 0 auto;
        margin-top: 18vh;
        width: 400px;
    }

    .formularioCompra3{
        padding: 60px 0;
        margin: 0 auto;
        margin-top: 18vh;
        width: 400px;
    }

    .formularioCompra4{
        padding: 60px 0;
        margin: 0 auto;
        margin-top: 18vh;
        width: 400px;
    }

    .formularioCompra5{
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

    .card-wrapper2 {
        background-color: rgb(245, 76, 76);
        width: 100%;
        display: flex;

    }

    .card-wrapper3 {
        background-color: rgb(245, 76, 76);
        width: 100%;
        display: flex;

    }

    .card-wrapper4 {
        background-color: rgb(245, 76, 76);
        width: 100%;
        display: flex;

    }

    .card-wrapper5 {
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
        font-family: Arial, Helvetica, sans-serif;
    }
    .form-container input {
        margin: 1px 0;
        padding-left: 3%;
        font-size: 14px;
        
    }
    .form-container input[type="text"]{
        display: block;
        height: 50px;
        width: 100%;
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
        width: 49.5%;
        float: left;
        margin-bottom: 2px;
    }
    #column-right {
        width: 50%;
        float: right;
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

    .botonCerrar2{
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

    .botonCerrar3{
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

    .botonCerrar4{
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

    .botonCerrar5{
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

    .info{
        position: absolute;
        width: 41vw;
        margin-left: 30vw;
        margin-top: 88vh;
        border-radius: 15px; 
        background-color: rgba(23, 23, 23, 0.8);
        color: whitesmoke;
        border: 5px solid #111;

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
        margin-left: 6.5vw;
        width: 20px;
        height: 20px;
        background-color: rgb(52, 7, 23);
        border: 2px solid black;
    }

    .cuadroRojo{
        margin-top: -2.3vh;
        margin-left: 5vw;
        width: 20px;
        height: 20px;
        background-color: rgb(255, 0, 0);
        border: 2px solid black;
    }

    .cuadroAzul{
        margin-top: -2.3vh;
        margin-left: 7vw;
        width: 20px;
        height: 20px;
        background-color: #00C1FF;
        border: 2px solid black;
    }

    </style>

    <script>

        function cambiarPrecio(){
            var precio =  80;
            var cantidad = document.getElementById("cantidad1");
            var selectedValueCantidad = cantidad.options[cantidad.selectedIndex].value;
            if(selectedValueCantidad == '0'){
                $(".btncomprar").css("pointer-events", "none");
                var total = precio*selectedValueCantidad;
                $("#precioTotal1").val(total + '€')
            }else{
                var total = precio*selectedValueCantidad;
                $("#precioTotal1").val(total + '€')
                $(".btncomprar").css("pointer-events", "auto");
            }
        }   

        function cambiarPrecio2(){
            var precio =  60;
            var cantidad = document.getElementById("cantidad2");
            var selectedValueCantidad = cantidad.options[cantidad.selectedIndex].value;
            if(selectedValueCantidad == '0'){
                $(".btncomprar2").css("pointer-events", "none");
                var total = precio*selectedValueCantidad;
                $("#precioTotal2").val(total + '€')
            }else{
                var total = precio*selectedValueCantidad;
                $("#precioTotal2").val(total + '€')
                $(".btncomprar2").css("pointer-events", "auto");
            }
        }   

        
        function cambiarPrecio3(){
            var precio =  40;
            var cantidad = document.getElementById("cantidad3");
            var selectedValueCantidad = cantidad.options[cantidad.selectedIndex].value;
            if(selectedValueCantidad == '0'){
                $(".btncomprar3").css("pointer-events", "none");
                var total = precio*selectedValueCantidad;
                $("#precioTotal3").val(total + '€')
            }else{
                var total = precio*selectedValueCantidad;
                $("#precioTotal3").val(total + '€')
                $(".btncomprar3").css("pointer-events", "auto");
            }
        }  

        function cambiarPrecio4(){
            var precio =  40;
            var cantidad = document.getElementById("cantidad4");
            var selectedValueCantidad = cantidad.options[cantidad.selectedIndex].value;
            if(selectedValueCantidad == '0'){
                $(".btncomprar4").css("pointer-events", "none");
                var total = precio*selectedValueCantidad;
                $("#precioTotal4").val(total + '€')
            }else{
                var total = precio*selectedValueCantidad;
                $("#precioTotal4").val(total + '€')
                $(".btncomprar4").css("pointer-events", "auto");
            }
        }  

        function cambiarPrecio5(){
            var precio =  40;
            var cantidad = document.getElementById("cantidad5");
            var selectedValueCantidad = cantidad.options[cantidad.selectedIndex].value;
            if(selectedValueCantidad == '0'){
                $(".btncomprar5").css("pointer-events", "none");
                var total = precio*selectedValueCantidad;
                $("#precioTotal5").val(total + '€')
            }else{
                var total = precio*selectedValueCantidad;
                $("#precioTotal5").val(total + '€')
                $(".btncomprar5").css("pointer-events", "auto");
            }
        }  
        
        $( document ).ready(function() {

                $( ".btncomprar" ).click(function() {
                    $(".fondoNegro").fadeIn();
                });
                $( ".botonCerrar" ).click(function() {
                    $(".fondoNegro").fadeOut();
                });

                $( ".btncomprar2" ).click(function() {
                    $(".fondoNegro2").fadeIn();
                });
                $( ".botonCerrar2" ).click(function() {
                    $(".fondoNegro2").fadeOut();
                });

                $( ".btncomprar3" ).click(function() {
                    $(".fondoNegro3").fadeIn();
                });
                $( ".botonCerrar3" ).click(function() {
                    $(".fondoNegro3").fadeOut();
                });

                $( ".btncomprar4" ).click(function() {
                    $(".fondoNegro4").fadeIn();
                });
                $( ".botonCerrar4" ).click(function() {
                    $(".fondoNegro4").fadeOut();
                });

                $( ".btncomprar5" ).click(function() {
                    $(".fondoNegro5").fadeIn();
                });
                $( ".botonCerrar5" ).click(function() {
                    $(".fondoNegro5").fadeOut();
                });

        });

    </script>


    <body>

      

        <div class="encabezado">
            <h2>SELECCIONA TU ENTRADA</h2>
        </div>
        <div class="reservas">
            <a href="generalConc1"><div class="escenario" style="{{ session()->get( 'color' ) }}{{ session()->get( 'colorNegro1' ) }}{{ session()->get( 'colorNegro2' ) }}{{ session()->get( 'colorNegro3' ) }}{{ session()->get( 'colorNegro4' ) }}{{ session()->get( 'colorNegro5' ) }}"><h2>Escenario</h2></div></a>
            <a href="pistaAConc1"><div class="pista1" style="{{ session()->get( 'agotado' ) }}{{ session()->get( 'colorAgotado' ) }}{{ $agotado6 }}{{ $colorAgotado6 }}{{ session()->get( 'color1' ) }}"><h2>Pista A</h2></div></a>
            <a href="pistaBConc1"><div class="pista2" style="{{ session()->get( 'agotado2' ) }}{{ session()->get( 'colorAgotado2' ) }}{{ $agotado7 }}{{ $colorAgotado7 }}{{ session()->get( 'agotado7' ) }}{{ session()->get( 'colorAgotado7' ) }}{{ session()->get( 'color2' ) }}"><h2>Pista B</h2></div></a>
            <a href="grada1Conc1"><div class="grada1" style="{{ session()->get( 'agotado3' ) }}{{ session()->get( 'colorAgotado3' ) }}{{ $agotado8 }}{{ $colorAgotado8 }}{{ session()->get( 'agotado8' ) }}{{ session()->get( 'colorAgotado8' ) }}{{ session()->get( 'color3' ) }}"><h2>Grada 1</h2></div></a>
            <a href="grada2Conc1"><div class="grada2" style="{{ session()->get( 'agotado4' ) }}{{ session()->get( 'colorAgotado4' ) }}{{ $agotado9 }}{{ $colorAgotado9 }}{{ session()->get( 'agotado9' ) }}{{ session()->get( 'colorAgotado9' ) }}{{ session()->get( 'color4' ) }}"><h2>Grada 2</h2></div></a>
            <a href="grada3Conc1"><div class="grada3" style="{{ session()->get( 'agotado5' ) }}{{ session()->get( 'colorAgotado5' ) }}{{ $agotado10 }}{{ $colorAgotado10 }}{{ session()->get( 'agotado10' ) }}{{ session()->get( 'colorAgotado10' ) }}{{ session()->get( 'color5' ) }}"><h2>Grada 3</h2></div></a>
        </div>
        <div class="datos">
            <center>   
                <div class="inputBox" style="{{ session()->get( 'displayBlock' ) }}{{ session()->get( 'displayNone1' ) }}{{ session()->get( 'displayNone2' ) }}{{ session()->get( 'displayNone3' ) }}{{ session()->get( 'displayNone4' ) }}{{ session()->get( 'displayNone5' ) }}">
                    <h3 id="titulo"><u>GENERAL</u></h3>
                    <span id="text2">Artista: ED SHEERAN</span>
                    <span id="text2">Lugar: Wizik Center</span>
                    <span id="text2">Fecha: Martes, 16 de Junio 2020</span>
                    <span id="text2">Hora: 21:00</span>
                </div>
            </div>
           
            <form id="form" method="POST" action="{{ route('compraEntradaConc1PistaA') }}">
                @csrf
                    <div class="formulario" style="{{ session()->get( 'displayBlock1' ) }}{{ session()->get( 'displayNone2' ) }}">
                        <h3 id="titulo"><u id="pistaA">PISTA A</u></h3>
                        <input type="text" name="idEntrada1" id="idEntrada1" value="{{Session::get('idEntrada1')}}" style="display: none;">
                        <span id="text2">Entradas Disponibles: <input type="text" name="entradasDisponibles1" id="entradasDisponibles1" value="{{Session::get('entradasDisponibles1')}}"></span>
                        <span id="text2">Precio Entrada: <span id="precioentrada">80€</span></span>
                        <span id="text2">Cantidad:   
                            @if(session()->get( 'cantidad' ) == 1 )
                                <select id="cantidad1" name="cantidad1" onchange="cambiarPrecio();">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            @elseif( session()->get( 'cantidad' ) == 2 )
                                <select id="cantidad1" name="cantidad1" onchange="cambiarPrecio();">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            @elseif(session()->get( 'cantidad' ) == 3 )
                                <select id="cantidad1" name="cantidad1" onchange="cambiarPrecio();">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            @elseif( session()->get( 'cantidad' ) == 4 )
                                <select id="cantidad1" name="cantidad1" onchange="cambiarPrecio();">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            @else
                                <select id="cantidad1" name="cantidad1" onchange="cambiarPrecio();">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            @endif

                        </span>
                        <span id="text2">Precio Total: <input type="text" name="precioTotal1" id="precioTotal1" value="0"></span>
                        <span id="text2">Entradas Compradas: <input type="text" name="entradasCompradas1" id="entradasCompradas1" value="{{Session::get('entradasCompradas1')}}"></span>
                        <div class="btncomprar">COMPRAR</div>
                     
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
                    
                            
                            <button type="submit" id="input-button" >COMPRAR</button>  
            
                        </div>
                    </div>
                    </div>
                </form>
   
    
                <form id="form2" method="POST" action="{{ route('compraEntradaConc1PistaB') }}">
                    @csrf
                    <div class="formulario2"  style="{{ session()->get( 'displayBlock2' ) }}{{ session()->get( 'displayNone3' ) }}">
                        <h3 id="titulo"><u id="pistaB">PISTA B</u></h3>
                        <input type="text" name="idEntrada2" id="idEntrada2" value="{{Session::get('idEntrada2')}}" style="display: none;">
                        <span id="text2">Entradas Disponibles: <input type="text" name="entradasDisponibles2" id="entradasDisponibles2" value="{{Session::get('entradasDisponibles2')}}"></span>
                        <span id="text2">Precio Entrada: <span id="precioentrada">60€</span></span>
                        <span id="text2">Cantidad:     
                        @if(session()->get( 'cantidad2' ) == 1 )
                            <select id="cantidad2" name="cantidad2" onchange="cambiarPrecio2();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                        @elseif( session()->get( 'cantidad2' ) == 2 )
                            <select id="cantidad2" name="cantidad2" onchange="cambiarPrecio2();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        @elseif(session()->get( 'cantidad2' ) == 3 )
                            <select id="cantidad2" name="cantidad2" onchange="cambiarPrecio2();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        @elseif( session()->get( 'cantidad2' ) == 4 )
                            <select id="cantidad2" name="cantidad2" onchange="cambiarPrecio2();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        @else
                            <select id="cantidad2" name="cantidad2" onchange="cambiarPrecio2();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        @endif
                        </span>
                        <span id="text2">Precio Total: <input type="text" name="precioTotal2" id="precioTotal2" value="0"></span>
                        <span id="text2">Entradas Compradas: <input type="text" name="entradasCompradas2" id="entradasCompradas2" value="{{Session::get('entradasCompradas2')}}"></span>
                        <div class="btncomprar2">COMPRAR</div>
                    </div>
                    <div class="fondoNegro2">
                        <div class="botonCerrar2">&times;</div>
                        <div class="formularioCompra2">
                            <div class="form-container">
                            <div class="personal-information">
                                <h1>Realizar pago</h1>
                            </div>
                    
                            <input id="column-left" type="text" name="first-name" placeholder="Usuario" />
                            <input id="column-right" type="text" name="last-name" placeholder="Nombre y Apellido"/>
                            <input id="input-field" type="text" name="number" placeholder="Numero de tarjeta de credito"/>
                            <input id="column-left" type="text" name="expiry" placeholder="MM / AA"/>
                            <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
                    
                            <div class="card-wrapper2"></div>
                    
                            
                            <button type="submit" id="input-button" >COMPRAR</button>  
            
                        </div>
                    </div>
                    </div>
                </form>
    
                <form id="form3" method="POST" action="{{ route('compraEntradaConc1Grada1') }}">
                    @csrf
                    <div class="formulario3" style="{{ session()->get( 'displayBlock3' ) }}{{ session()->get( 'displayNone4' ) }}">
                        <h3 id="titulo"><u id="grada1">GRADA 1</u></h3>
                        <input type="text" name="idEntrada3" id="idEntrada3" value="{{Session::get('idEntrada3')}}" style="display: none;">
                        <span id="text2">Entradas Disponibles: <input type="text" name="entradasDisponibles3" id="entradasDisponibles3" value="{{Session::get('entradasDisponibles3')}}"></span>
                        <span id="text2">Precio Entrada: <span id="precioentrada">40€</span></span>
                        <span id="text2">Cantidad:     
                        @if(session()->get( 'cantidad3' ) == 1 )
                            <select id="cantidad3" name="cantidad3" onchange="cambiarPrecio3();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                        @elseif( session()->get( 'cantidad3' ) == 2 )
                            <select id="cantidad3" name="cantidad3" onchange="cambiarPrecio3();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        @elseif(session()->get( 'cantidad3' ) == 3 )
                            <select id="cantidad3" name="cantidad3" onchange="cambiarPrecio3();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        @elseif( session()->get( 'cantidad3' ) == 4 )
                            <select id="cantidad3" name="cantidad3" onchange="cambiarPrecio3();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        @else
                            <select id="cantidad3" name="cantidad3" onchange="cambiarPrecio3();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        @endif
                        </span>
                        <span id="text2">Precio Total: <input type="text" name="precioTotal3" id="precioTotal3" value="0"></span>
                        <span id="text2">Entradas Compradas: <input type="text" name="entradasCompradas3" id="entradasCompradas3" value="{{Session::get('entradasCompradas3')}}"></span>
                        <div class="btncomprar3">COMPRAR</div>
                    </div>
                    <div class="fondoNegro3">
                        <div class="botonCerrar3">&times;</div>
                        <div class="formularioCompra3">
                            <div class="form-container">
                            <div class="personal-information">
                                <h1>Realizar pago</h1>
                            </div>
                    
                            <input id="column-left" type="text" name="first-name" placeholder="Usuario" />
                            <input id="column-right" type="text" name="last-name" placeholder="Nombre y Apellido"/>
                            <input id="input-field" type="text" name="number" placeholder="Numero de tarjeta de credito"/>
                            <input id="column-left" type="text" name="expiry" placeholder="MM / AA"/>
                            <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
                    
                            <div class="card-wrapper3"></div>
                    
                            
                            <button type="submit" id="input-button" >COMPRAR</button>  
            
                        </div>
                    </div>
                    </div>
                </form>
    
                <form id="form4" method="POST" action="{{ route('compraEntradaConc1Grada2') }}">
                    @csrf
                    <div class="formulario4" style="{{ session()->get( 'displayBlock4' ) }}{{ session()->get( 'displayNone5' ) }}">
                        <h3 id="titulo"><u id="grada2">GRADA 2</u></h3>
                        <input type="text" name="idEntrada4" id="idEntrada4" value="{{Session::get('idEntrada4')}}" style="display: none;">
                        <span id="text2">Entradas Disponibles: <input type="text" name="entradasDisponibles4" id="entradasDisponibles4" value="{{Session::get('entradasDisponibles4')}}"></span>
                        <span id="text2">Precio Entrada: <span id="precioentrada">40€</span></span>
                        <span id="text2">Cantidad:  
                        @if(session()->get( 'cantidad4' ) == 1 )
                            <select id="cantidad4" name="cantidad4" onchange="cambiarPrecio4();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                        @elseif( session()->get( 'cantidad4' ) == 2 )
                            <select id="cantidad4" name="cantidad4" onchange="cambiarPrecio4();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        @elseif(session()->get( 'cantidad4' ) == 3 )
                            <select id="cantidad4" name="cantidad4" onchange="cambiarPrecio4();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        @elseif( session()->get( 'cantidad4' ) == 4 )
                            <select id="cantidad4" name="cantidad4" onchange="cambiarPrecio4();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        @else
                            <select id="cantidad4" name="cantidad4" onchange="cambiarPrecio4();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        @endif
                        </select>
                        </span>
                        <span id="text2">Precio Total: <input type="text" name="precioTotal4" id="precioTotal4" value="0"></span>
                        <span id="text2">Entradas Compradas: <input type="text" name="entradasCompradas4" id="entradasCompradas4" value="{{Session::get('entradasCompradas4')}}"></span>
                        <div class="btncomprar4">COMPRAR</div>
                    </div>
                    <div class="fondoNegro4">
                        <div class="botonCerrar4">&times;</div>
                        <div class="formularioCompra4">
                            <div class="form-container">
                            <div class="personal-information">
                                <h1>Realizar pago</h1>
                            </div>
                    
                            <input id="column-left" type="text" name="first-name" placeholder="Usuario" />
                            <input id="column-right" type="text" name="last-name" placeholder="Nombre y Apellido"/>
                            <input id="input-field" type="text" name="number" placeholder="Numero de tarjeta de credito"/>
                            <input id="column-left" type="text" name="expiry" placeholder="MM / AA"/>
                            <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
                    
                            <div class="card-wrapper4"></div>
                            <button type="submit" id="input-button" >COMPRAR</button>  
            
                        </div>
                    </div>
                    </div>
                </form>
    
                <form id="form5" method="POST" action="{{ route('compraEntradaConc1Grada3') }}">
                    @csrf
                    <div class="formulario5" style="{{ session()->get( 'displayBlock5' ) }}">
                        <h3 id="titulo"><u id="grada3">GRADA 3</u></h3>
                        <input type="text" name="idEntrada5" id="idEntrada5" value="{{Session::get('idEntrada5')}}" style="display: none;">
                        <span id="text2">Entradas Disponibles: <input type="text" name="entradasDisponibles5" id="entradasDisponibles5" value="{{Session::get('entradasDisponibles5')}}"></span>
                        <span id="text2">Precio Entrada: <span id="precioentrada">40€</span></span>
                        <span id="text2">Cantidad:   
                        @if(session()->get( 'cantidad5' ) == 1 )
                            <select id="cantidad5" name="cantidad5" onchange="cambiarPrecio5();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                        @elseif( session()->get( 'cantidad5' ) == 2 )
                            <select id="cantidad5" name="cantidad5" onchange="cambiarPrecio5();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        @elseif(session()->get( 'cantidad5' ) == 3 )
                            <select id="cantidad5" name="cantidad5" onchange="cambiarPrecio5();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        @elseif( session()->get( 'cantidad5' ) == 4 )
                            <select id="cantidad5" name="cantidad5" onchange="cambiarPrecio5();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        @else
                            <select id="cantidad5" name="cantidad5" onchange="cambiarPrecio5();">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        @endif
                        </span>
                        <span id="text2">Precio Total: <input type="text" name="precioTotal5" id="precioTotal5" value="0"></span>
                        <span id="text2">Entradas Compradas: <input type="text" name="entradasCompradas5" id="entradasCompradas5" value="{{Session::get('entradasCompradas5')}}"></span>
                        <div class="btncomprar5">COMPRAR</div>
                    </div>
                    <div class="fondoNegro5">
                        <div class="botonCerrar5">&times;</div>
                        <div class="formularioCompra5">
                            <div class="form-container">
                            <div class="personal-information">
                                <h1>Realizar pago</h1>
                            </div>
                    
                            <input id="column-left" type="text" name="first-name" placeholder="Usuario" />
                            <input id="column-right" type="text" name="last-name" placeholder="Nombre y Apellido"/>
                            <input id="input-field" type="text" name="number" placeholder="Numero de tarjeta de credito"/>
                            <input id="column-left" type="text" name="expiry" placeholder="MM / AA"/>
                            <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
                    
                            <div class="card-wrapper5"></div>
                            <button type="submit" id="input-button" >COMPRAR</button>  
            
                        </div>
                    </div>
                    </div>
                </form>
            </center>   

        <div class="info">
            <h3>Seleccionada <div class="cuadroAzul"></div></h3>
            <h3>Info general <div class="cuadroGranate"></div></h3>
            <h3>Agotado <div class="cuadroRojo"></div></h3>
        </div>

        <a href="/verConciertos">
            <div class="volver">
                <h4>VOLVER</h4>
            </div>
        </a>

            
<script id="rendered-js">

    $('#form').card({
        container: '.card-wrapper',
        width: 280,

        formSelectors: {
            nameInput: 'input[name="first-name"], input[name="last-name"]'
        }
    });

    $('#form2').card({
        container: '.card-wrapper2',
        width: 280,

        formSelectors: {
            nameInput: 'input[name="first-name"], input[name="last-name"]'
        }
    });

    $('#form3').card({
        container: '.card-wrapper3',
        width: 280,

        formSelectors: {
            nameInput: 'input[name="first-name"], input[name="last-name"]'
        }
    });

    $('#form4').card({
        container: '.card-wrapper4',
        width: 280,

        formSelectors: {
            nameInput: 'input[name="first-name"], input[name="last-name"]'
        }
    });

    $('#form5').card({
        container: '.card-wrapper5',
        width: 280,

        formSelectors: {
            nameInput: 'input[name="first-name"], input[name="last-name"]'
        }
    });
    </script>
    </body>

    </html>