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
                    <h2 class="text-center tituloTable">FERRARI </h2>
                    <table class="tabelaEdicaoCarros text-center">
                        <tr class="text-center tableHeaders">
                            <th>Nome</th>
                            <th>Ano de Fundação</th>
                            <th>País de Origem</th>
                            <th>Logo</th>
                            <th>Editar</th>
                        </tr>
                        <td class="">
                            <tr class="text-center tableRows">
                                <td>FERRARI</td>
                                <td>1914</td>
                                <td>Itália</td>
                                <td class="colunaLogoMarca"><img src="https://i.pinimg.com/originals/4c/ab/f1/4cabf11ca2754891d4d9d20326eca835.png" alt="Pagani Logo" class="logoMarca"></td>
                                <td><span data-bs-toggle="modal" data-bs-target="#modalEditarCarro" class="editarInfos">Editar</span></td>
                            </tr>
                        </td>
                    </table>
                </div>
            </div>
            <div class="ladoDireito">
                <div class="infoModeloCarroSelecionado">
                    <img src="https://i.pinimg.com/originals/4c/ab/f1/4cabf11ca2754891d4d9d20326eca835.png" alt="Pagani Huayra" class="logo-marca" style="height: 25%; width: 25%; margin-left: 40%;">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalEditarCarro" tabindex="-1" aria-labelledby="modalEditarCarroLavel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/JS/modal.js"></script>
</body>

</html>