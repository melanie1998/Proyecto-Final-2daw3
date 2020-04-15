<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />

    <title>Test</title>
</head>
<style>
    
    body{
        margin: 0;
        background: #272727;
        font-family: 'Arial';
        background-image: url('Imagenes/logo2.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 70%;
    }

    .fondo{
        width: 100%;
        height: 100vh;
        background-color: rgb(39, 39, 39, 0.90);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        display: flex;
        justify-content: center;
    }

    .texto{
        display: flex;
        align-items: center;
    }

    .texto h2{
        color: white;
        letter-spacing: 3vh;
        font-size: 7em;
        line-height: 15vh;
    }

    .texto h2:before{
        content: attr(data-text);
        position: absolute;
        margin: auto;
        align-items: center;
        transform-origin: bottom;
        transform: rotateX(180deg);
        line-height: 0.88em;
        background: linear-gradient(0deg, #fff 0, transparent 100%);
        -webkit-background-clip: text;
        opacity: 0.15;
        color: transparent;
    }

    img{
        margin: 1%;
    }

    .info{
        display: none;
        margin: auto;
        color: white;
        font-size: 2em;

    }

    .empezar{
        position: absolute;
        margin-top: 8vh;
        margin-left: 23vw;
        width: 20%;
        height: 10vh;
        background-color: #222;
        border-radius: 10px;
        border: 2px solid white;
        cursor: pointer;
        user-select: none;
    }

    .empezar:hover{
        transform: scale(1.25);
        transition: all .3s ease-in-out;
    }

    .empezar a{
        text-decoration: none;
    }

    .empezar h2{
        color: white;
        font-size: 1em;
    }
 

</style>

<script>
    $(document).ready(function() {

        setTimeout(function() {
            $('.texto').delay(3000);
            $('.texto').fadeToggle(1000);
        }, 0);

        setTimeout(function() {
            $('.info').fadeToggle(1000);
            $('.info').delay(3000);
           // $('.empezar').fadeToggle(1000);
        }, 4200);

    });
</script>
<body>

    <div class="fondo">
        <div class="texto">
            <h2 data-text="BIENVENIDO A HEAVN">BIENVENIDO A HEAVN</h2>
        </div>
        <div class="info">
            Antes de comenzar, tendras que rellenar un pequeño test para que podamos saber sobre ti.
            <center>
            <a href="realizarTest"><div class="empezar"><h2>Empezar test</h2></div></a>
            </center>
        </div>
    </div>
    
</body>
</html>