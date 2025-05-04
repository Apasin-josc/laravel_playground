<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lists | Home </title>
</head>
<body>
    <h2> Currently Available tasks</h2>
    <p>{{ $greeting }}</p>
    <ul>
        <li>
            <a href="/lists/{{$tasks[0]["id"]}}">
                {{$tasks[0]["name"]}}
            </a>
        </li>
        <li>
            <a href="/lists/{{$tasks[1]["id"]}}">
                {{$tasks[1]["name"]}}
            </a>
        </li>
    </ul>
</body>
</html>