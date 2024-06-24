<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith - Editar carros de Pagani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/CSS/gerenciar-carros.css">
</head>

<body>
    <video autoplay muted loop id="backgroundVideo">
        <source src="./assets/VID/koenigsegg-background.mp4" class="video" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="diagonalBackground"></div>
    <div class="container-fluid mainContent">
        <div class="header">
            <div class="titleContent row text-center">
                <h1>Zenith</h1>
                <small>
                    Your Luxury Car Manager
                </small>
            </div>
        </div>
        <div class="content">
            <div class="ladoEsquerdo">
                <div class="tabelaMarca text-center">
                    <h2 class="text-center tituloTable">PAGANI</h2>
                    <table class="tabelaEdicaoCarros text-center">
                        <tr class="text-center tableHeaders">
                            <th>Modelo</th>
                            <th>Cor</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Editar</th>
                        </tr>
                        <td class="">
                            <tr class="text-center tableRows">
                                <td>Huayra</td>
                                <td>Preto</td>
                                <td>R$ 5.000.000,00</td>
                                <td>5</td>
                                <td><span data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</span></td>
                            </tr>
                            <tr class="text-center tableRows">
                                <td>Zonda</td>
                                <td>Vermelho</td>
                                <td>R$ 4.000.000,00</td>
                                <td>3</td>
                                <td><span data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</span></td>
                            </tr>
                            <tr class="text-center tableRows">
                                <td>Imola</td>
                                <td>Prata</td>
                                <td>R$ 6.000.000,00</td>
                                <td>2</td>
                                <td><span data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</span></td>
                            </tr>
                            <tr class="text-center tableRows">
                                <td>Tricolore</td>
                                <td>Verde</td>
                                <td>R$ 7.000.000,00</td>
                                <td>1</td>
                                <td><a href="#" class="editarCarro">Editar</a></td>
                            </tr>
                        </td>
                        <tr class="addCarro">
                            <td colspan="5" class="botaoAddCarro text-center">
                                <button type="button" class="botaoAdicionarCarro btn btn-primary" data-bs-toggle="modal" data-bs-target="#editionModal">Add car</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="ladoDireito">
                <div class="infoModeloCarroSelecionado">
                    <h2 class="text-center nomeMarca">Pagani</h2>
                    <img src="https://ecosetting-files.com/br/image/models/dJZaNo02jLQviHcLCPu2ADLHd1JfRF.PNG" alt="Pagani Huayra" class="modeloCarroImagem">
                    <h2 class="text-center nomeModeloCarro"> Huayra</h2>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>