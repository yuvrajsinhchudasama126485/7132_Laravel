<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninjas List</title>
</head>
<body>
    <h1>Ninjas List</h1>

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <a href="{{ url('/ninjas/' . $ninja['id']) }}">
                    {{ $ninja['name'] }} - Skill Level: {{ $ninja['skill'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/') }}">Back to home</a>
</body>
</html>
