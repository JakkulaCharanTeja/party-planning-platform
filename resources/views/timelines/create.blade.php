<!DOCTYPE html>
<html>
<head>
    <title>Add Timeline Event</title>
</head>
<body>
    <h1>Add New Timeline Event</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('timelines.store') }}" method="POST">
        @csrf

        <label>Title:</label>
        <input type="text" name="title" required><br>

        <label>Date:</label>
        <input type="date" name="date" required><br>

        <label>Description (optional):</label>
        <textarea name="description"></textarea><br>

        <button type="submit">Submit</button>
    </form>

    <br>
    <a href="{{ route('timelines.index') }}">Back to Timeline</a>
</body>
</html>

