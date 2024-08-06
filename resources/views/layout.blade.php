<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jim+Nightshade&display=swap" rel="stylesheet">
    <title>Purgatorium</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <header>
        <div>
            <img src="{assets['image/images.png']}" alt="">
            <h1>Purgatorium</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Satus</a></li>
                <li><a href="#">Mortalis</a></li>
                <li><a href="#">Virtus</a></li>
                <li><a href="#">Pecattum</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @hasSection('content')
            @yield('content')
        @endif
    </main>
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