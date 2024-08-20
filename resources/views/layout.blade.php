<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jim+Nightshade&display=swap" rel="stylesheet">
    <title>Purgatorium</title>
    @vite(['resources/js/app.js'])
</head>

<body style="background-image:url('storage/imagens/home.png')">
    <header>
    
        <div style="display:flex">
        <img src="{{asset('storage/imagens/logo.png')}}">
            <h1>Purgatorium</h1>
            
        </div>
        
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Satus</a></li>
                <li><a href="#">Mortalis</a></li>
                <li><a href="#">Virtus</a></li>
                <li><a href="{{route('pecados')}}">Pecattum</a></li>
            </ul>
        </nav>
    </header>
    
    
           
        
    <main>
        @hasSection('content')
            @yield('content')
        @endif
    </main>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
  <a style="font-size: 2rem; color: white; text-align: center;">
    No purgatório, o tempo arrasta-se como um castigo, enquanto a alma busca a expiação sem garantia de alcançá-la, receba - Luva de Pedreiro
  </a>
</div>
    <footer>
        <div>
            <p>Developed by Angels</p>
        </div>
        <div>
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
</body>
</html>