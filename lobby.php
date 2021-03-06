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
<div id="app">
        <nav class="navbar navbar-expand-lg navbar-custom-furia">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Fúria Jungle
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrar-se</a>
                                </li>
                            </ul>
                </div>
            </div>
        </nav>
        <main role="main" class="container">
            <div class="container-fluid">



                <!-- 
                Aqui é o miolo Zabra, só muda isso de página pra página
                Veja como tem container repetido e tal... 
                Bom isso que agora tu tem noção de como é o html da app real
                -->
                <div class="container all">
                    <h1 class="custom text-left">Lobby</h1>
                    <div class="row">
                        <div class="col-sm-12">
                            

                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Fim do miolo -->



            </div>

    </main><!-- /.container -->
</body>