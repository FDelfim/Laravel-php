<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">

    <title>
        Painel Administrativo QR Leitos
    </title>

</head>

<body>

    <header>
        <nav id="menu-h">
            <ul>
                <li><a>QR LEITOS</a></li>

                <li><a>Início</a></li>

                <li> <a href="/leitos"> Leitos </a></li>

                <li><a href="/usuarios">Usuários</a></li>

                <li><a>Sair</a></li>
            </ul>
        </nav>
    </header>

    <div class="titulo">
        <h1>Painel administrativo QR Leitos</h1>
    </div>

    <div class="all-box">
        <div>
            <div class="box">
                <a class="title-box">Taxa de Ocupação</a>
            </div>
            <div class="box">
                <a class="title-box">Usuários Cadastrados</a>
            </div>
        </div>
        <div>
            <div class="box">
                <a class="title-box">c </a>
            </div>
            <div class="box">
                <a class="title-box">d</a>
            </div>
        </div>
    </div>
</body>

</html>
