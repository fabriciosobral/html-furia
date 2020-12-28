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
                    <img src="imagens/logo.png" class="img-fluid logofuria">
                </div>
            </div>

        </div>
        <div class="alert alert-danger">
            <ul>
                <li class="text-left">Esse é o alerta de error</li>
                <li class="text-left">O campo email é obrigatório.</li>
                <li class="text-left">O campo endereço é obrigatório.</li>
            </ul>
        </div>
        <div class="alert alert-warning">
            <ul>
                <li class="text-left">Esse é o alerta de warning</li>
                <li class="text-left">Esse coloquei duas linhas</li>
            </ul>
        </div>
        <div class="alert alert-success">
            <ul>
                <li class="text-left">Esse é o alerta de success</li>
            </ul>
        </div>
        <div class="alert alert-info">
            <ul>
                <li class="text-left">Esse é o alerta de info. Mexe nessa página mesmo, deixa os 4 aqui.</li>
                <li class="text-left">Acho que deixa o fundo original deles, tira a bolinha e só coloca o ícone ao lado</li>
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
                        <img src="imagens/furia-selo.png" class="img-fluid logofuria">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>