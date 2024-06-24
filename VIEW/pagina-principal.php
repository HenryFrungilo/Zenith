<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith - Koenigsegg</title>
    <link rel="stylesheet" href="./assets/CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/CSS/tela-principal.css">
</head>

<body class="">
    <video autoplay muted loop id="backgroundVideo">
        <source src="./assets/VID/koenigsegg-background.mp4" class="video" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="diagonalBackground"></div>
    <div class="container-fluid">
        <div class="" id="welcome-text">
            <span>Bem vindo,</span>
            <p>
                Enzo Ferrari
            </p>
        </div>
        <div class="brandInfo">
            <ul class="brandListInfo">
                <li>
                    Dono da <b>Ferrari</b>
                </li>
                <li>
                    Modelos Ativos
                </li>
                <ul>
                    <li>
                        <b>F50</b>
                    </li>
                    <li>
                        <b>Jesko</b>
                    </li>
                    <li>
                        <b>Regera</b>
                    </li>
                </ul>
                <li class="hover-text">
                    <a href="http://localhost:8080/VIEW/gerenciar-carros.php" target="_blank" class="gerenciar-modelos-text hover-underline-animation">Gerenciar Modelos Ativos</a>
                </li>
                <li class="hover-text">
                    <a href="http://localhost:8080/VIEW/gerenciar-marca.php" target="_blank" class="gerenciar-modelos-text hover-underline-animation">Editar Marca</a>
                </li>
            </ul>
            <div class="lado-direito">
                <img src="https://i.pinimg.com/originals/4c/ab/f1/4cabf11ca2754891d4d9d20326eca835.png" class=".logo-marca" alt="Koenigsegg" style="width: 18%; height: 18%; margin-left: 65vw;">
            </div>
        </div>
    </div>
</body>

</html>