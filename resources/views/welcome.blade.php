<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Herd Playground</title>
    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>
        Welcome to the Laravel Playground
    </h1>
        <p> Click the button below to get a list</p>
        <a href = "/lists" class="btn">
            get your lists!
        </a>
</body>
</html>