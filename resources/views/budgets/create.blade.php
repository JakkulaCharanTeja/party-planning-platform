<!DOCTYPE html>
<html>
<head>
    <title>Add Guest</title>
</head>
<body>
    <h1>Add Guest</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('guests.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Email:</label>
        <input type="email" name="email"><br>

        <label>Phone:</label>
        <input type="text" name="phone"><br>

        <label>Attending:</label>
        <input type="checkbox" name="attending" value="1"><br>

        <button type="submit">Add</button>
    </form>

    <br>
    <a href="{{ route('guests.index') }}">Back to Guest List</a>
</body>
</html>
