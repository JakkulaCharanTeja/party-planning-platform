<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests List</title>
</head>
<body>
    <h1>Guests List</h1>
    
    <a href="{{ route('guests.create') }}">Add New Guest</a>
    <ul>
        @foreach ($guests as $guest)
            <li>{{ $guest->name }} - {{ $guest->email }} - {{ $guest->phone }}</li>
        @endforeach
    </ul>
</body>
</html>
