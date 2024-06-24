<?php
include '../BLL/UserService.php';

setcookie('nome', '', -1, '/');
setcookie('email', '', -1, '/');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['input-senha']) && isset($_POST['input-email'])) {
    $senha = $_POST['input-senha'];
    $email = $_POST['input-email'];

    if (\BLL\UserService::ValidarUsuario($email, $senha)) {
        header('Location: http://localhost:8080/VIEW/pagina-principal.php');
    };
}
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith - Luxury Car Manager</title>
    <link rel="stylesheet" href="./assets/CSS/login.css">
    <link rel="stylesheet" href="./assets/CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="">
    <video autoplay muted loop id="backgroundVideo">
        <source src="assets/VID/login-background.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container-fluid mainContent">
        <div class="loginHeader">
            <div class="titleContent row text-center">
                <h1>Zenith</h1>
                <small>
                    Your Luxury Car Manager
                </small>
            </div>
        </div>
        <div class="loginContent mt-3">
            <div class="formContent">
                <div  class="card-content card">
                    <form method="post" action="" class="front">
                        <div>
                            <h2 class="text-center">Login</h2>
                            <div class="inputContent">
                                <div class="col">
                                    <label for="input-email" class="mb-2 form-label">Email do Usuário</label>
                                    <p>
                                        <input id="input-email" name="input-email" class="input-group-text" type="text">
                                    </p>
                                </div>

                                <div class="col">
                                    <label for="input-senha" class="mb-2 form-label">Senha</label>
                                    <p>
                                        <input id="input-senha" name="input-senha" class="input-group-text" type="password">
                                    </p>
                                </div>
                                <div>
                                    <small>Não possui uma conta? <a class="cadastrar-text">Cadastre-se</a></small>
                                </div>
                            </div>
                            <button class="button botaoLogin" type="submit"> Login </button>
                        </div>
                    </form>
                    <form method="post" action="" class="back">
                        <div>
                            <h2 class="text-center" id="texto-cadastro">Cadastrar-se</h2>
                            <div class="inputContent" id="cadastrarForm">
                                <div class="col">
                                    <label for="input-usuario-cadastro" class="mb-2 form-label">Nome de Usuário</label>
                                    <p>
                                        <input id="input-usuario-cadastro" name="input-usuario" class="input-group-text" type="text">
                                    </p>
                                </div>
                                <div>
                                    <label for="input-email-cadastro" class="mb-2 form-label">Email</label>
                                    <p>
                                        <input id="input-email-cadastro" name="input-email" class="input-group-text" type="email">
                                    </p>
                                </div>
                                <div class="col">
                                    <label for="input-senha-cadastro" class="mb-2 form-label">Senha</label>
                                    <p>
                                        <input id="input-senha-cadastro" name="input-senha" class="input-group-text" type="password">
                                    </p>
                                </div>
                                <div>
                                    <small>Já possui uma conta? <a class="entrar-text">Entrar</a></small>
                                </div>
                            </div>
                            <button class="button botaoLogin" type="submit"> Cadastrar-se </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/JS/flipCard.js"></script>
    <script src="./assets/JS/verificacao.js"></script>
</body>

</html>