<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />
    <title>Opciones</title>
</head>
<style>
    body{
        margin: 0;
        background: #272727;
        font-family: 'Bree Serif', serif;
    }

    .fondo{
        margin: 0;
        width: 100%;
        height: 100vh;
        background-color: rgb(39, 39, 39, 0.2);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        display: inline-block;
    }

    .volver{
            position: absolute;
            margin-top: 6vh;
            margin-left: 85vw;
            padding: 0% 2% 0% 2% ;
            background-color: #222;
            border-radius: 50px;
            border: 2px solid white;
            cursor: pointer;
            user-select: none;
    }

    .volver:hover{
        transform: scale(1.25);
        transition: all .3s ease-in-out;
    }

    .volver a{
        text-decoration: none;
    }

    .volver h2{
        color: white;
    }
    .volver #v{
        color: grey;
    }

    .titulo{
        padding-top: 2vh;
        color: white;
        font-size: 2.5em;
        letter-spacing: 2vh;
    }

    .titulo i{
        font-size: 0.9em;
    }

    .negroblanco{
        position: absolute;
        margin: 0vh 0vh 0vh 8vw;
        width: 40%;
        height: 30vh;
        background-color: rgb(39, 39, 39, 0.2);
        border-radius: 5px;
        border-left: 10px solid #c9c9c9;
        border-right: 10px solid #c9c9c9;
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        color: white;
        display: inline-block;
    }

    .blanco{
        position: relative;
        margin-top: 0vh;
        margin-left: -17vw;
        width: 40%;
        height: 60%;
        background: silver;
        color: black;
        cursor: pointer;
    }

    .blanco:hover{
        box-shadow: inset 0px 0px 10px 6px rgba(0,0,0,0.8);
    }

    .blanco h2{
        margin: auto;
        padding-top: 6vh;
        font-size: 2em;
    }

    .negro{
        position: relative;
        margin-top: -18vh;
        margin-left: 15vw;
        width: 40%;
        height: 60%;
        background: #222;
        color: white;
        cursor: pointer;
    }

    .negro:hover{
        box-shadow: inset 0px 0px 10px 6px rgba(0,0,0,0.75);
    }

    .negro h2{
        margin: auto;
        padding-top: 6vh;
        font-size: 2em;

    }

    .musica{
        position: absolute;
        margin: 0vh 0vh 0vh 52vw;
        width: 40%;
        height: 30vh;
        background-color: rgb(39, 39, 39, 0.2);
        border-radius: 5px;
        border-left: 10px solid #c9c9c9;
        border-right: 10px solid #c9c9c9;
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        color: white;
    }

    .musica h2{
        margin-left: 2vw;
        font-size: 2.2em;

    }

    .botones{
        margin-left: -2vw;
    }

    .musica i{
        margin-top: 2vh;
        font-size: 5em;
        margin-left: 2vw;
        cursor: pointer;
    }

    .idioma{
        position: absolute;
        margin: 36vh 0vh 0vh 20vw;
        width: 60%;
        height: 25vh;
        border-radius: 5px;
        border-left: 10px solid #c9c9c9;
        border-right: 10px solid #c9c9c9;
    }

    .imagen{
        position: absolute;
        background-image: url('Imagenes/españa.png');
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        opacity: 0.2;
        
    }

    .banderas{
        position: absolute;
        margin-left: -5vw;
    }

    .banderas p{
        color: white;
        font-size: 2.2em;
        margin-left: 5vw;
    }

    .banderas img{
        margin-left: 5vw;
        border-radius: 150px;
        border: 3px solid white;
        cursor: pointer;
        user-select: none;

    }

</style>
<script>
    bNegro = false;
    $(document).ready(function() {
        $("#ingles").click(function(){  
            $(".imagen").css("background-image", "url('Imagenes/reinounido.png')");
        });   
        $("#español").click(function(){  
            $(".imagen").css("background-image", "url('Imagenes/españa.png')");
        });   
        $("#euskera").click(function(){  
            $(".imagen").css("background-image", "url('Imagenes/ikurriña2.png')");
        });   
        $("#frances").click(function(){  
            $(".imagen").css("background-image", "url('Imagenes/francia.png')");
        });  
        $("#ingles").mouseenter(function(){  
            $(this).css('border', '3px solid #012169');
            $(this).css('transform', 'scale(1.5)');
        });  
        $("#ingles").mouseleave(function(){  
            $(this).css('border', '3px solid white');
            $(this).css('transform', 'scale(1)');
        });
        $("#español").mouseenter(function(){  
            $(this).css('border', '3px solid #AA151B');
            $(this).css('transform', 'scale(1.5)');
        });  
        $("#español").mouseleave(function(){  
            $(this).css('border', '3px solid white');
            $(this).css('transform', 'scale(1)');
        }); 
        $("#euskera").mouseenter(function(){  
            $(this).css('border', '3px solid #009C46');
            $(this).css('transform', 'scale(1.5)');
        });  
        $("#euskera").mouseleave(function(){  
            $(this).css('border', '3px solid white');
            $(this).css('transform', 'scale(1)');
        }); 
        $("#frances").mouseenter(function(){  
            $(this).css('border-left', '3px solid #0055A4');
            $(this).css('border-right', '3px solid #EF4135');
            $(this).css('transform', 'scale(1.5)');
        });  
        $("#frances").mouseleave(function(){  
            $(this).css('border', '3px solid white');
            $(this).css('transform', 'scale(1)');
        });  
    });

    function goBack() {
        window.history.back();
    }
</script>
<body>
    <div class="fondo">
        <div class="volver" onclick="goBack()">
            <h2><span id="v">V</span>olver</h2>
        </div>
        <center>
            <div class="titulo">
                <h2>OPCIONES
                <i class="material-icons icono">
                    settings
                </i></h2>
            </div>
        </center>
        <div class="negroblanco">
            <center>
                <h2>COLOR MENU</h2>
                <div class="blanco">
                    <h2>oscuro</h2>
                </div>
                <div class="negro">
                    <h2>claro</h2>
                </div>
            </center>

        </div>
        <div class="musica">
            <center>
                <div class="botones">
                    <h2>MUSICA</h2>
                    <i class="material-icons">
                        play_circle_outline
                    </i>
                    <i class="material-icons">
                        pause_circle_outline
                    </i>
                    <i class="material-icons">
                        volume_up
                    </i>
                    <i class="material-icons">
                        volume_down
                    </i>
                </div>
            </center>

        </div>
        <div class="idioma">
            <div class="imagen"></div>
            <div class="banderas">
                <center>
                    <p>ELIGE TU IDIOMA</p>
                    <img id="ingles" src="Imagenes/ingles.png"  width="6%" alt="">
                    <img id="español" src="Imagenes/español.png"  width="6%" alt="">
                    <img id="euskera" src="Imagenes/euskera.png"  width="6%" alt="">
                    <img id="frances" src="Imagenes/frances.png"  width="6%" alt="">
                </center>
            </div>
        </div>
    </div>
</body>
</html>