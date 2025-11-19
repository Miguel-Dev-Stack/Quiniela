<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiniela Liga MX | Participantes</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <!-- FUENTE PARA TITULO-SPAN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+SAS:wght@100..400&display=swap" rel="stylesheet">
    <!-- FUENTE PARA UBICACIÓN-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&display=swap" rel="stylesheet">
    <!-- FUENTE PARA BOTON JUGAR -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="titulo">Quiniela Covadonga <span>Liga MX</span></h1>
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal1 contenedor1">
            <a href="index.php">Inicio</a>
            <a href="apuestasCuartos.php">Apuestas</a>
            <a href="difusionCuartos.php">Difusión de Cuartos</a>
            <a href="resultadosCuartos.php">Resultados de Cuartos</a>
            <a href="iniciar_sesion.php">Salir</a>
        </nav>
    </div>
    
    
<!-- INICIA SLIDER RESPONSIVO -->

<div class="logos" id="logos">
    <div class="logos-slide" id="slider">
        <img src="./img/America.png" alt="">
        <img src="./img/Atlas.png" alt="">
        <img src="./img/AtleticoSanLuis.png" alt="">
        <img src="./img/Chivas.png" alt="">
        <img src="./img/ClubDeportivoToluca.png" alt="">
        <img src="./img/ClubSantos.png" alt="">
        <img src="./img/ClubTijuana.png" alt="">
        <img src="./img/CruzAzul.png" alt="">
        <img src="./img/FCJuarez.png" alt="">
        <img src="./img/Leon.png" alt="">
        <img src="./img/Mazatlan.png" alt="">
        <img src="./img/Monterrey.png" alt="">
        <img src="./img/Necaxa.png" alt="">
        <img src="./img/Pachuca.png" alt="">
        <img src="./img/Puebla.png" alt="">
        <img src="./img/Queretaro.png" alt="">
        <img src="./img/Tigres.png" alt="">
    </div>
</div>

<script src="./js/app.js"></script>

<!-- TERMINA SLIDER RESPONSIVO -->
<div class="input-field col s12 m4">
</div>

<main class="contenedorApuestas sombra">
<h2><b>Apuestas de Cuartos de Final</b></h2>
    <section class="form-register">
        <h4>Realiza tus Apuestas</h4>
        <div class="tarjeta">
            <h1>Contador</h1>
            <div class="contador">
                <h2 id="contador">0</h2>
            </div>

            <div class="grupo-btn">
                <button id="aumentar" class="btn incrementar" >Aumentar</button>
                <button class="btn disminuir" >Disminuir</button>
                <button class="btn restablecer" >Restablecer</button>
            </div>
            
            <!--
            <button onclick="sumar()">+</button>
            <input type="number" value="0">
            <button onclick="restar()">-</button>

            <button onclick="sumar()">+</button>
            <input type="number" value="0">
            <button onclick="restar()">-</button>
            -->

        </div>
        <script src="script.js"></script>
        <button class="botons" type="submit" name="guardarApuestas" onclick="location='difusionCuartos.php'">Guardar Apuestas</button>
    </section>
</main>
    
<footer class="footer">
    <p>2025. Corporativo Covadonga. Todos los derechos reservados.</p>
</footer>

</body>
</html>