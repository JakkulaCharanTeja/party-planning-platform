<!DOCTYPE html>
<html>
<head>
    <title>Edit Guest</title>
</head>
<body>
    <h1>Edit Guest</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('guests.update', $guest->id) }}">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $guest->name }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $guest->email }}"><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $guest->phone }}"><br>

        <label>Attending:</label>
        <input type="checkbox" name="attending" value="1" {{ $guest->attending ? 'checked' : '' }}><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('guests.index') }}">Back to Guest List</a>
</body>
</html>
