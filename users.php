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
                            <a class="nav-link" href="{{ route('login') }}">Nova Partida</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Eventos</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Felipe <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="http://localhost:8000/users/profile">
                                    Perfil
                                </a>

                                <a class="dropdown-item" href="http://localhost:8000/logout"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="http://localhost:8000/logout" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="aeYlRQJYvr2hqXv3B2fQEEf8WsOBJa6M8WjC6pg2">                                    </form>
                                
                            </div>
 
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
                <h1>Users</h1>

                <ul class="pagination">
            
                    <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Anterior">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>
                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="http://localhost:8000/Admin/users?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="http://localhost:8000/Admin/users?page=3">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="http://localhost:8000/Admin/users?page=2" rel="next" aria-label="Próximo &raquo;">&rsaquo;</a>
                    </li>
                </ul>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" style="width: 60%">Name</th>
                        <th scope="col" style="width: 20%">Email</th>
                        <th scope="col" style="width: 20%">Is Admin</th>
                        <th scope="col" style="width: 20%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{route('users.edit', $user->id)}}">Felipe</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">felipaorfr@gmail.com</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">Sim</a></td>
                            <td class="row">
                                <div class="col-sm-6">
                                    <a href="{{route('users.edit', $user->id)}}"  class="btn btn-primary">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{route('users.edit', $user->id)}}">Zabra</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">zabra@gmail.com</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">Sim</a></td>
                            <td class="row">
                                <div class="col-sm-6">
                                    <a href="{{route('users.edit', $user->id)}}"  class="btn btn-primary">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{route('users.edit', $user->id)}}">Marceu</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">marceu@gmail.com</a></td>
                            <td><a href="{{route('users.edit', $user->id)}}">Não</a></td>
                            <td class="row">
                                <div class="col-sm-6">
                                    <a href="{{route('users.edit', $user->id)}}"  class="btn btn-primary">Edit</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <ul class="pagination">
            
                    <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Anterior">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>
                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="http://localhost:8000/Admin/users?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="http://localhost:8000/Admin/users?page=3">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="http://localhost:8000/Admin/users?page=2" rel="next" aria-label="Próximo &raquo;">&rsaquo;</a>
                    </li>
                </ul>
                <!-- Fim do miolo -->



            </div>

    </main><!-- /.container -->
</body>