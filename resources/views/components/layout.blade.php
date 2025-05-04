<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Herd Playground</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1> Laravel Herd Playground</h1>
            <a href='/lists'> Do all your stuff</a>
           <a href='/lists/create'> Create more tasks </a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
    
</body>
</html>