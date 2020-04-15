<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opiniones</title>
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    body{
        margin: 0;
        background-color: silver;
        font-family: 'Bree Serif', serif;
        
    }
    .fondo{
        position: absolute;
        width: 100%;
        height: 100vh;
        background-color: rgb(39, 39, 39, 0.2);
        background-size: cover;
        box-shadow: inset 0px 0px 400px 75px rgba(0,0,0,0.9);
    }

    .container{
        margin-top: 15vh;
    }

    label{
        color: white;
    }


    #tablaUsuarios_info{
        color: white;
    }

    .sorting{
        color: #021620;
    }
        
    td{
        background-color: #222;
        color: white;
    }

    .volver{
        position: absolute;
        margin-top: 8vh;
        margin-left: 85vw;
        padding: 0.5% 2% 0% 2% ;
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

    h1{
        margin-top: -8vh;
        margin-bottom: 3vh;
        letter-spacing: 1vh;
        font-size: 5em;
    }

    .opina{
        position: absolute;
        margin-top: 8vh;
        margin-left: 20vw;
        padding: 0.5% 2% 0% 2% ;
        background-color: #222;
        border-radius: 50px;
        border: 2px solid white;
        cursor: pointer;
        user-select: none;
    }

    .opina:hover{
        transform: scale(1.25);
        transition: all .3s ease-in-out;
    }

    .opina a{
        text-decoration: none;
    }

    .opina h2{
        color: white;
    }

    .opina #d{
        color: grey;
    }
</style>

<script>
    /*Funcion para volver atrás*/
    function goBack() {
        window.history.back();
    }
</script>

<body>
    <div class="fondo">
        <div class="volver" onclick="goBack()">
            <h2><span id="v">V</span>olver</h2>
        </div>
        <div class="container">
            <div id="app">
                <center><h1>OPINIONES</h1></center>
                <opiniones-component></opiniones-component>
               
                <a href="/sobreheavn#opinion">
                    <div class="opina">
                        <h2><span id="d">D</span>anos tu opinion</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>