<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <link type="image/png" sizes="32x32" rel="icon" href="https://img.icons8.com/ios-filled/100/null/metal-music.png">

    <script src="https://kit.fontawesome.com/9dd0c630b7.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>

</head>
<body>
    <header>
        <a href="/" class="logo"><i class="fa-solid fa-skull"></i>Oficina</a>
        <nav>
            <ul>
                @auth
                <li><a href="/veiculos/revisao">Revisão</a></li>
                <li><a href="/veiculos">Veículos</a></li>
                <li>
                    <form action="/logout" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();" 
                    method="POST">
                        @csrf
                        <a href="/logout">Sair</a>
                    </form>
                </li>
                @endauth
                @guest
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Registrar</a></li>
                @endguest
            </ul>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div>
                @if(session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                @endif 
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
            <p><a href="https://www.linkedin.com/in/euliberato/" target="_blank">Ruan Liberato</a> | Oficina &copy; 2022</p>
    </footer>
</body>
</html>