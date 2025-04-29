<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Selection</title>
</head>
<body>
    <h1>Select a Theme</h1>
    <a href="{{ route('switchTheme', 'light') }}">Light Theme</a>
    <a href="{{ route('switchTheme', 'dark') }}">Dark Theme</a>
    <a href="{{ route('switchTheme', 'custom') }}">Custom Theme</a>
</body>
</html>


