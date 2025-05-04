<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lists | Home </title>
</head>
<body>
    <h2> Currently Available tasks</h2>

    @if($greeting === "hello")
    <p> Hi from inside the if statement </p>
    @endif

    <p>{{ $greeting }}</p>
    <ul>
        @foreach($tasks as $task)
            <li>
                <p>{{ $task['name'] }}</p>
                <a href='/lists/{{$task['id']}}'>View your tasks</a>
            </li>
        @endforeach
    </ul>
</body>
</html>