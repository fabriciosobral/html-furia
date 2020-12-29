<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/jquery.mask.min.js"></script>

    <!-- <link rel="stylesheet" href="./dist/font-awesome.min.css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="./dist/css/style.css">

    <title>Furia</title>
</head>

<body>
    <div class="container all login">
        <div class="row">
            <div class="col-12">
                <div class="logo">
                    <img src="images/logo.png" class="img-fluid logofuria">
                </div>
            </div>

        </div>
        <div class="alert alert-danger">
            <ul>
                <li class="text-left"><i class="fa fa-times fa-lg"></i> <span class="error">Esse é o alerta de error</span></li>
            </ul>
        </div>
        <div class="alert alert-warning">
            <ul>
                <li class="text-left"><i class="fa fa-exclamation fa-lg"></i> <span class="exclamation">Esse é o alerta de warning</li>
            </ul>
        </div>
        <div class="alert alert-success">
            <ul>
                 <li class="text-left"><i class="fa fa-check fa-lg"></i> <span class="success">Esse é o alerta de success</span></li>
            </ul>
        </div>
        <div class="alert alert-info">
            <ul>
                <li class="text-left"><i class="fa fa-info fa-lg"></i> <span class="info">Esse é o alerta de info</span></li>
            </ul>
        </div>
        <form>
            <div class="row mb-3">
                <div class="col-sm-4">
                    <div class="d-flex flex-column">
                        <label>Nome</label>
                        <input type="text" class="input-full">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="d-flex flex-column">
                        <label>Email</label>
                        <input type="text" class="input-full email">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="d-flex flex-column">
                        <label>Data de Nascimento</label>
                        <input type="text" class="input-full date">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <div class="d-flex flex-column">
                        <label>Endereço</label>
                        <input type="text" class="input-full">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="d-flex flex-column">
                        <label>N.º</label>
                        <input type="text" class="input-full">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="d-flex flex-column">
                        <label>Cidade</label>
                        <input type="text" class="input-full">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="d-flex flex-column">
                        <label>Estado</label>
                        <select class="input-full">
                            <option value="- -"></option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="d-flex flex-column">
                        <label>Complemento</label>
                        <input type="text" class="input-full">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <div class="d-flex flex-column">
                        <label>Senha</label>
                        <input type="text" class="input-full">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="d-flex flex-column">
                        <label>Confirmar Senha</label>
                        <input type="text" class="input-full">
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <button class="bt-default">Cadastrar</button>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="logo-selo text-center">
                        <img src="images/furia-selo.png" class="img-fluid logofuria">
                    </div>
                </div>
            </div>
        </form>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#errorModal">
        Error Modal
        </button>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#alertModal">
        Alert Modal
        </button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#successModal">
        Success Modal
        </button>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#infoModal">
        Info Modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                        <i class="fa fa-times fa-lg"></i>
                </div>
                <div class="modal-body">
                    Erro Fatal
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                        <i class="fa fa-exclamation fa-lg"></i>
                </div>
                <div class="modal-body">
                    Alerta
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">OK</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                        <i class="fa fa-check fa-lg"></i>
                </div>
                <div class="modal-body">
                   Sucesso
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                        <i class="fa fa-info fa-lg"></i>
                </div>
                <div class="modal-body">
                    Info
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>